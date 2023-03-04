<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>BE KOST</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href={{ asset ('css/style.css') }}>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>
<body>


  <header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
          <a href="/">BE KOST</a>
        </div>

        <ul class="nav-menu">
          <li> <a href="#about">Tentang Kami</a> </li>
          <li class="dropdown">
            <button class="drop-button" onclick="myFunction()">Kost
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="drop-content" id="myDropdown">
                @foreach ($kosts as $kost)
                    <a href="/kost/{{ $kost->id }}">{{ $kost->name }}</a>

                @endforeach
              {{-- <a href="{{ url('/kost_fuad') }}">Kost Fuad</a>
              <a href="{{ url('/kost_ilham') }}">Kost Ilham</a>
              <a href="{{ url('/kost_kombas') }}">Kost Kombas</a>
              <a href="{{ url('/kost_arnest') }}">Kost Arnest</a> --}}
            </div>
          </li>
          <li> <a href="#testimonial">Testimoni</a> </li>
          <li> <a href="#kontak">Kontak</a></li>
          <li style="background-color: #f9a826; padding: 10px 30px; border-radius: 3px;">
            <a href="{{ url('/login') }}" style="color: white;">Login</a>
          </li>
        </ul>

        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>

  <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(e) {
      if (!e.target.matches('.drop-button')) {
      var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
  </script>

  <!-- Resnposive Nav Humberger-->
  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobliemmenu);

    function mobliemmenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }
  </script>


  <section class="home" id="home">
    <div class="container">
      <div class="homesmall">
        <h1>BEkost</h1>
        <h5>
          BEkost selalu menyediakan kost yang pasti nyaman, terjangkau dan sesuai keinginnanmu
        </h5>
      </div>
  </section>

  <!-- Home End -->



  <!-- About -->

  <section class="about" id="about">
    <div class="container">
      <div class="heading">
        <h4>Ruang Kamar</h4>
        <h2>Rekomendasi Kamar
        </h2>
      </div>

      <div class="content flex top_v2">
        <div class="left_about">
          <h3 class="sec_about">Apa itu BEkost? Untuk Apa Kami Ada?
          </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="right" data-aos="fade-left" data-aos-duration="1300">
          <img src="{{ asset('assets/img/b1.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- About End -->




  <!-- Avaible Kost -->

  <section class="available top" id="available">
    <div class="container">
      <div class="heading">
        <h4>Top Kost</h4>
        <h3>Rekomendasi Kost Kami</h3>
      </div>

      <div class="content grid mtop">
        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1300">
            <img src="{{ asset('assets/img/kost_1/Fuad2.jpg') }}" alt="">
          </div>
          <div class="text">
            <h3>Kost Fuad</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="{{ url('/kost_fuad') }}">Read More </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1400">
            <img src="{{ asset('assets/img/kost_1/Ilhamm.jpeg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Ilham</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="{{ url('/kost_ilham') }}">Read More </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('assets/img/kost_1/kombass.jpeg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Kombas</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="{{ url('/kost_kombas') }}">Read More </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1600">
            <img src="{{ asset('assets/img/kost_1/Arnest.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Arnest</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="{{ url('/kost_arnest') }}">Read More </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Avaible Kost -->



  <!-- Testimoni -->

  <section class="customer top" id="testimonial">
    <div class="container">
      <div class="heading">
        <h4>TESTIMONI</h4>
        <h3>Apa yang dikatakan pelanggan?</h3>
      </div>
      <div class="testifix">
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>“Wah untung ada ngkost, mau pindah pindah kosan jd gampang tinggal cari ajaa disini hihi.”</p>
            </blockquote>
            <h3>Indah</h3>
            <h4>Mahasiswi, Surabaya</h4>
          </figcaption>
        </figure>
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>“Wah untung ada ngkost, mau pindah pindah kosan jd gampang tinggal cari ajaa disini hihi.”</p>
            </blockquote>
            <h3>Erwin</h3>
            <h4>Mahasiswi, Surabaya</h4>
          </figcaption>
        </figure>
      </div>
      <div class="testifix">
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>“Karena sempet mau pindah kost,temen nyaranin cek BeKost. Ternyata cukup banyak pilihan.”</p>
            </blockquote>
            <h3>Andreas</h3>
            <h4>Mahasiswa, Surabaya</h4>
          </figcaption>
        </figure>
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>“Sempet nyari tempat tinggal kost di sekitar SMK Telkom Purwokerto, ternyata bisa nemu juga."</p>
            </blockquote>
            <h3>Dwioka</h3>
            <h4>Siswa, Surabaya</h4>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>


  <!-- End Testimoni -->


  <footer class="footer-distributed" id="kontak">
    <div class="footer-left">
      <h3>BE<span> kost</span></h3>
      <p class="footer-links">
        <a href="#">Tentang Kami</a>
        <a href="#">Kost</a>
        <a href="#">Testimoni</a>
        <a href="#">Kontak</a>
      </p>
      <p>Find a comfortable boarding house to live in while you are traveling without the hassle of bringing things from home</p>
      {{-- <p class="footer-company-name">Developer Student SMK TELKOM PURWOKERTO© 2022</p> --}}
    </div>

    <div class="footer-right">
      <h3>Contact Us</h3>
      <form action="#" method="post">
        <input type="text" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message"></textarea>
        <button>Send</button>
      </form>
    </div>
  </footer>

  <!-- End Footer-->

  <script>
    AOS.init();
  </script>

</body>
</html>
