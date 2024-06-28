<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PAMADESAN | Pengaduan Masyarakat</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/announce.ico')}}">
  <style>
    /* General Styles */
    body {
      font-family: 'Montserrat', sans-serif;
      line-height: 1.6;
      background-color: #fbfcf7;
      color: #2d3748;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header */
    .header {
      background: linear-gradient(120deg, #c3e6cb, #29ab87); /* Updated header gradient */
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #2d3748;
    }

    .header-links {
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .header-links a {
      color: #ffffff;
      text-decoration: none;
      transition: color 0.3s ease;
      font-weight: bold;
      font-size: 1.1rem;
      padding: 10px 15px;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.2);
    }

    .header-links a:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }

    /* Hero Section */
    .hero {
      background-color: #c3e6cb;
      padding: 80px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
      color: #2d3748;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      color: #2d3748;
      margin-bottom: 40px;
    }

    .hero-button {
      background-color: #29ab87; /* Updated hero button color */
      color: #ffffff;
      font-weight: bold;
      font-size: 1.1rem;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .hero-button:hover {
      background-color: #01796f;
    }

    /* How It Works Section */
    .how-it-works {
      background-color: #fbfcf7;
      padding: 80px 20px;
      text-align: center;
    }

    .how-it-works h2 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #2d3748;
      margin-bottom: 40px;
    }

    .how-steps {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 40px;
    }

    .how-step {
      flex: 1;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      max-width: 300px;
      text-align: left;
    }

    .how-step:hover {
      transform: translateY(-10px);
    }

    .how-step h3 {
      font-size: 1.5rem;
      font-weight: bold;
      color: #2d3748;
      margin-bottom: 20px;
    }

    .how-step p {
      font-size: 1.1rem;
      color: #4a5568;
      line-height: 1.6;
    }

    /* Footer */
    .footer {
      background-color: #29ab87; /* Updated footer background color */
      padding: 20px;
      text-align: center;
      color: #ffffff;
      font-size: 1.1rem;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .header {
        flex-wrap: wrap;
      }

      .hero h1 {
        font-size: 2.5rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .how-steps {
        flex-direction: column;
        gap: 20px;
      }

      .how-step {
        max-width: none;
        margin-bottom: 20px;
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 0.9rem;
      }

      .hero-button {
        font-size: 1rem;
        padding: 10px 20px;
      }

      .how-it-works h2 {
        font-size: 2rem;
      }

      .how-step h3 {
        font-size: 1.2rem;
      }

      .how-step p {
        font-size: 1rem;
      }

      .header-links {
        gap: 10px;
      }

      .header-links a {
        font-size: 0.9rem;
        padding: 8px 12px;
      }
    }
  </style>
</head>

<body>

  <!-- Header -->
  <header class="header">
    <div class="header-logo">PAMADESAN</div>
    <nav class="header-links">
      <a href="/" class="header-link">Home</a>
      <a href="#how-it-works" class="header-link">Tata Cara</a>
      <a href="{{ url('login')}}" class="header-link">Masuk</a>
      <a href="{{ url('register')}}" class="header-link">Daftar</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Layanan Pengaduan Masyarakat Desa Menuran</h1>
      <p>Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat.</p>
      <a href="{{ url('login')}}" class="hero-button">Laporkan!</a>
    </div>
  </section>

  <!-- How It Works Section -->
  <section id="how-it-works" class="how-it-works">
    <div class="container">
      <h2>Tata Cara Pengaduan</h2>
      <div class="how-steps">
        <div class="how-step">
          <img src="{{ asset('img/tulis.svg')}}" alt="Tulis">
          <h3>1. Tulis Laporan</h3>
          <p>Tulis laporan keluhan Anda dengan jelas.</p>
        </div>
        <div class="how-step">
          <img src="{{ asset('img/processing.svg')}}" alt="Proses">
          <h3>2. Proses Verifikasi</h3>
          <p>Tunggu sampai laporan Anda diverifikasi.</p>
        </div>
        <div class="how-step">
          <img src="{{ asset('img/act.svg')}}" alt="Ditindak">
          <h3>3. Tindak Lanjut</h3>
          <p>Laporan Anda sedang dalam tindak lanjut.</p>
        </div>
        <div class="how-step">
          <img src="{{ asset('img/verification.svg')}}" alt="Selesai">
          <h3>4. Selesai</h3>
          <p>Laporan pengaduan telah selesai ditindak.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      &copy; {{ now()->year }} Desa Menuran
    </div>
  </footer>

</body>

</html>
