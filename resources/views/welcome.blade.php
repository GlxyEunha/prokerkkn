<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PAMADESAN | Pengaduan Masyarakat</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/announce.ico')}}">
  <style>
    html {
      scroll-behavior: smooth;
    }

    .bg-green-200 {
      background-color: #c3e6cb;
    }

    .bg-brown-200 {
      background-color: #d3a87c;
    }

    .text-green-500 {
      color: #28a745;
    }

    .text-brown-500 {
      color: #6c757d;
    }

    .border-green-500 {
      border-color: #28a745;
    }

    .border-brown-500 {
      border-color: #6c757d;
    }

    .bg-green-500 {
      background-color: #28a745;
    }

    .bg-brown-500 {
      background-color: #6c757d;
    }
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">

  <nav class="flex items-center justify-between flex-wrap bg-green-200 p-7 px-20">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
      <span class="font-bold tracking-wider text-xl">
        &nbsp PAMADESAN</span>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-green-500 border-green-500 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
      <div class="text-md lg:flex-grow">
        <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4 hover:text-green-600 hover:underline hover:font-bold">
          Home
        </a>
        <a href="#how" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4 hover:text-green-600 hover:underline hover:font-bold">
          Tata Cara
        </a>
      </div>
      <div>
        <button
          class="text-black font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Masuk</a>
        </button>
        <button
          class="text-green-500 font-medium rounded-md py-3 px-4 border-2 border-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('register')}}">Daftar</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-24 px-16 bg-green-200">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-800">
        <h1 class="my-4 text-4xl font-bold leading-tight">
          Layanan Pengaduan Masyarakat Desa Menuran
        </h1>
        <p class="leading-normal text-1xl mb-8">
          Sampaikan laporan masalah Anda di sini, kami akan memprosesnya
          dengan cepat.
        </p>
        <button
          class="mx-auto lg:mx-0 bg-green-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Laporkan!</a>
        </button>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5 text-center">
        <img class="object-fill mx-36 transform transition hover:scale-110 duration-300 ease-in-out"
          src="{{ asset('img/hero.svg')}}" />
      </div>
    </div>
  </div>

  <!-- How -->
  <div id="how" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Tulis"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tulis.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">1. Tulis Laporan</h1>
            <p class="text-grey-darker text-sm py-4">
              Tulis laporan keluhan Anda dengan jelas.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Proses"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/processing.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">2. Proses Verifikasi</h1>
            <p class="text-grey-darker text-sm py-4">
              Tunggu sampai laporan Anda di verifikasi.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Ditindak"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/act.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">3. Tindak Lanjut</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan Anda sedang dalam tindak lanjut.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Selesai"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/verification.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">4. Selesai</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan pengaduan telah selesai ditindak.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center font-medium bg-green-200 py-5">
    © {{ now()->year }} Desa Menuran
  </footer>
  @include('sweetalert::alert')
</body>

</html>
