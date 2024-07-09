@extends('layouts.admin')

@section('title')
Data Pengaduan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Pengaduan
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
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Foto</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">Keterangan</th>
              <th class="px-4 py-3">Tanggal</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($items as $item)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <div class="relative hidden mr-3 md:block">
                    <img class="h-32 w-35" src="{{ route('image.displayImage' , $item->image) }}" alt="" loading="lazy" />
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->description }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y - H:i:s') }}
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight {{ $item->status == 'Belum di Proses' ? 'text-red-700 bg-red-100' : ($item->status == 'Sedang di Proses' ? 'text-orange-700 bg-orange-100' : 'text-green-700 bg-green-100') }} rounded-md dark:text-red-100 dark:bg-red-700">
                  {{ $item->status }}
                </span>
              </td>
              <td class="px-4 py-3">
                <div class="flex items-center space-x-4 text-sm">
                  <a href="{{ route('pengaduans.show', $item->id)}}" class="flex items-center justify-between text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-green-400 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                  </a>
                  <button onclick="showDeleteModal({{ $item->id }}, '{{ $item->name }}')" class="flex items-center justify-between text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-red-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center text-gray-400">
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

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
  <div class="bg-white rounded-lg shadow-lg p-6">
    <p id="deleteText" class="mb-4 text-gray-700">Apakah anda yakin ingin menghapus pengaduan ini?</p>
    <div class="flex justify-end">
      <button onclick="closeDeleteModal()" class="mr-2 px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">Tidak</button>
      <form id="deleteForm" method="POST" action="">
        @csrf
        @method('delete')
        <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700">Ya</button>
      </form>
    </div>
  </div>
</div>

<script>
  function showDeleteModal(id, name) {
    document.getElementById('deleteText').innerText = `Apakah anda yakin ingin menghapus pengaduan dari ${name}?`;
    document.getElementById('deleteForm').action = `/admin/pengaduans/${id}`;
    document.getElementById('deleteModal').classList.remove('hidden');
  }

  function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
  }
</script>
@endsection
