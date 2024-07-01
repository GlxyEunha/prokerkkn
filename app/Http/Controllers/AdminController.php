<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use PDF;


class AdminController extends Controller
{
    public function __invoke()
    {
    }

    public function index($id)
    {

        $item = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.admin.tanggapan.add', [
            'item' => $item
        ]);
    }

    public function masyarakat()
    {

        $data = DB::table('users')->where('roles', '=', 'USER')->get();

        return view('pages.admin.masyarakat', [
            'data' => $data
        ]);
    }

    public function laporan()
    {
        // Ambil data pengaduan dengan urutan berdasarkan tanggal dibuat (ASC)
        $pengaduan = Pengaduan::orderBy('created_at', 'ASC')->get();
    
        // Inisialisasi counter
        $counter = 1;
    
        // Mengubah data pengaduan untuk menambahkan nomor urut dari counter
        foreach ($pengaduan as $item) {
            $item->counter = $counter;
            $counter++;
        }
    
        return view('pages.admin.laporan', [
            'pengaduan' => $pengaduan
        ]);
    }
    
    public function cetak()
    {
        // Ambil data pengaduan dengan urutan berdasarkan tanggal dibuat (ASC)
        $pengaduan = Pengaduan::orderBy('created_at', 'ASC')->get();
    
        // Inisialisasi counter
        $counter = 1;
    
        // Load view PDF dengan data yang sudah dimodifikasi
        $pdf = PDF::loadview('pages.admin.pengaduan', [
            'pengaduan' => $pengaduan,
            'counter' => $counter  // Sertakan counter untuk nomor urut dalam PDF
        ]);
    
        // Download PDF dengan nama file 'laporan.pdf'
        return $pdf->download('laporan.pdf');
    }  

    

    public function pdf($id)
    {

        $pengaduan = Pengaduan::find($id);

        $pdf = PDF::loadview('pages.admin.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
