@extends('layouts.masyarakat')

@section('title')
Data Pengaduan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Pengaduan
    </h2>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Foto</th>
              <th class="px-4 py-3">Keterangan</th> <!-- Kolom baru untuk Keterangan -->
              <th class="px-4 py-3">Tanggal</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @php
            \Carbon\Carbon::setLocale('id');
            @endphp
            @forelse ($items as $item)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3 text-center">
                <div class="flex items-center justify-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden mr-3 md:block">
                    <img class="h-32 w-35" src="{{ route('image.displayImage' , $item->image) }}" alt="" loading="lazy" />
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm text-center">
                {{ $item->description }} <!-- Menampilkan keterangan -->
              </td>
              <td class="px-4 py-3 text-sm text-center">
                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y - H:i:s') }}
              </td>
              @if($item->status == 'Belum di Proses')
              <td class="px-4 py-3 text-xs text-center">
                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                  {{ $item->status }}
                </span>
              </td>
              @elseif ($item->status == 'Sedang di Proses')
              <td class="px-4 py-3 text-xs text-center">
                <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                  {{ $item->status }}
                </span>
              </td>
              @else
              <td class="px-4 py-3 text-xs text-center">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                  {{ $item->status }}
                </span>
              </td>
              @endif
              <td class="px-4 py-3 text-center">
                <a href="{{ route('pengaduan.show', $item->id) }}" class="flex items-center justify-center text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-green-300 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </a>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-gray-400"> <!-- Ubah colspan dari 4 ke 5 -->
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
@endsection
