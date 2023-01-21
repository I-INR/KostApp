<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>S KOST</title>
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
          <a href="#home">BE KOST</a>
        </div>

        <ul class="nav-menu">
          <li> <a href="#about">Tentang Kami</a> </li>
          {{-- <div class="dropdown">
            <button class="drop-button">Kost
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="drop-content">
              <a href="#">Kost Muslimah</a>
              <a href="#">Kost Maslamah</a>
              <a href="#">Kost Mislimah</a>
            </div>
          </div> --}}
          <li class="dropdown"> 
            <button class="drop-button" onclick="myFunction()">Kost
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="drop-content" id="myDropdown">
              <a href="{{ url('/kost') }}">Kost</a>
              <a href="{{ url('/kost') }}">Kost</a>
              <a href="{{ url('/kost') }}">Kost</a>
            </div>
          </li>
          <li> <a href="#testimonial">Testimoni</a> </li>
          <li> <a href="#kontak">Kontak</a></li>
          <li style="background-color: #f9a826; padding: 10px 30px; border-radius: 3px;">
            <a href="#" style="color: white;">Login</a>
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
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
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
        <h4 data-aos="fade-left" data-aos-duration="1000">Top Kost</h4>
        <h3 data-aos="fade-right" data-aos-duration="1300">Rekomendasi Kost Kami</h3>
      </div>

      <div class="content grid mtop">
        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1300">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Wano</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="#">Read More </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1400">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Water Seven</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="#">Read More </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Skypea</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="#">Read More </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="img" data-aos="fade-up" data-aos-duration="1600">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Kost Wolecake</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class ="readmore">
                <a href="#">Read More </a>
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
        <h4>Testimoni</h4>
        <h3>Apa yang dikatakan pelanggan?</h3>
      </div>
      <div class="testifix">
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
            </blockquote>
            <h3>Wisteria Ravenclaw</h3>
            <h4>Google Inc.</h4>
          </figcaption>
        </figure>
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
            </blockquote>
            <h3>Ursula Gurnmeister</h3>
            <h4>Facebook</h4>
          </figcaption>
        </figure>
      </div>
      <div class="testifix">
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
            </blockquote>
            <h3>Wisteria Ravenclaw</h3>
            <h4>Google Inc.</h4>
          </figcaption>
        </figure>
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
            </blockquote>
            <h3>Ursula Gurnmeister</h3>
            <h4>Facebook</h4>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- End Testimoni -->



  {{--
  <div class="top footer_v1">
    <div class="subscribe" id="contact">
      <h1>Kontak Developer</h1>
      <p>Hubungi kami jika kamu memiliki masalah pada website</p>
      <p>Hubungi kami jika kamu ingin mengenal lebih jauh dengan developer</p>
      <div class="mirr">
        <div class="input flex">
          <input type="email" placeholder="Your Email address">
          <button class="flex1">
            <span>Subscribe</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div> --}}



  <!-- Footer -->
  {{-- default footer --}}
  {{-- <footer>
    <div class="container top">
      <div class="content grid top">
        <div class="box">
          <h2>Services</h2>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>SMK TELKOM</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+123 456 7898</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>hello@muziro.com</p>
            </div>
          </div>
        </div>
        <div class="box">
          <h2>Services</h2>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>SMK TELKOM</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+123 456 7898</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>hello@muziro.com</p>
            </div>
          </div>
        </div>
        <div class="box">
          <h2>Services</h2>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>SMK TELKOM</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+123 456 7898</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>hello@muziro.com</p>
            </div>
          </div>
        </div>
        <div class="box">
          <h2>Services</h2>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>SMK TELKOM</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+123 456 7898</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>hello@muziro.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> --}}


  {{-- figma footer --}}
  {{-- <footer class="footer-distributed" id="kontak">
    <div class="container">
      <div class="footer-left">
        <h3>BE<span> Kost</span></h3>
        <p class="footer-company-name">Find a comfortable boarding house to live in while you are traveling wihtout the hassle
          of bringing things from home  
        </p>
      </div>
      <div class="footer-right">
        <p class="footer-links">
          <a href="#about">Tentang kami</a>
          <a href="">Kost</a>
          <a href="#testimonial">Testimoni</a>
          <a href="#contact">Kontak</a>
        </p>
  
        <p>Contact Us</p>
  
        <form action="#" method="post">
  
          <input type="text" name="email" placeholder="Email">
          <textarea name="message" placeholder="Message"></textarea>
          <button>Send</button>
  
        </form>
  
      </div>
    </div>
  </footer> --}}


  <footer class="footer-distributed">
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
