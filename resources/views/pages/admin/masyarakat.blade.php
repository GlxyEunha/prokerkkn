@extends('layouts.admin')

@section('title')
Data Masyarakat
@endsection

@section('content')
<style>
  .btn-danger {
      background-color: red;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
  }

  .btn-warning {
      background-color: orange;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
  }
</style>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Data Masyarakat
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
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NIK</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($data as $masyarakat)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3 text-sm text-center">{{ $masyarakat->name }}</td>
              <td class="px-4 py-3 text-sm text-center">{{ $masyarakat->nik }}</td>
              <td class="px-4 py-3 text-sm text-center">{{ $masyarakat->phone }}</td>
              <td class="px-4 py-3 text-sm text-center">{{ $masyarakat->email }}</td>
              <td class="px-4 py-3 text-sm text-center">
                <button onclick="showResetModal({{ $masyarakat->id }}, '{{ $masyarakat->name }}')" class="btn-danger">Reset Password</button>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-gray-400">
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

<!-- Reset Confirmation Modal -->
<div id="resetModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
  <div class="bg-white rounded-lg shadow-lg p-6">
    <p id="resetText" class="mb-4 text-gray-700">Apakah anda yakin ingin mereset password akun ini?</p>
    <div class="flex justify-end">
      <button onclick="closeResetModal()" class="mr-2 px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">Tidak</button>
      <form id="resetForm" method="POST" action="">
        @csrf
        <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700">Ya</button>
      </form>
    </div>
  </div>
</div>

<script>
  function showResetModal(id, name) {
    document.getElementById('resetText').innerText = `Apakah anda yakin ingin mereset password akun ${name}?`;
    document.getElementById('resetForm').action = `/admin/masyarakat/${id}/reset-password`;
    document.getElementById('resetModal').classList.remove('hidden');
  }

  function closeResetModal() {
    document.getElementById('resetModal').classList.add('hidden');
  }
</script>
@endsection
