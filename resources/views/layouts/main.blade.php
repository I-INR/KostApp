<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>S KOST</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href={{ asset ('css/style.css') }}>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>
<body>

  <!-- Header Mulai-->
  <header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
          <a href="#home">S KOST</a>
        </div>

        <ul class="nav-menu">
          <li> <a href="#about">Tentang Kami</a> </li>
          <li> <a href="kost1.html">Kost</a> </li>
          <li> <a href="#testimonial">Testimoni</a> </li>
          <li> <a href="#contact">Kontak</a></li>
          <li
            style="
              background-color: #f9a826;
              padding: 10px 30px;
            "
          > <a href="#" 
          style="color: black;
                font-weight: bold;">Login</a></li>
        </ul>

        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>

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

  <!--Header Selesai-->



  <!-- Home Start-->

  <section class="home" id="home">
    <div class="container">
      <div class="homesmall">
        <h1>SKOST</h1>
        <h5>Discover the place where you have fun & enjoy a lot</h5>
      </div>
  </section>

  <!-- Home End -->



  <!-- About -->

  <section class="about" id="about">
    <div class="container">
      <div class="heading">
        <h5>EXPLORE</h5>
        <h2>We are cool to give you pleasure
        </h2>
      </div>

      <div class="content flex  top">
        <div class="left">
          <h3>As much as comfort want to get from us everything
          </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="right">
          <img src="{{ asset('assets/img/b2.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- About End -->



  <!-- tools for corousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
  


  <!-- Avaible Kost -->

  <section class="available top" id="available">
    <div class="container">
      <div class="heading">
        <h5>OUR KOST</h5>
        <h3>Some Top Our Kost</h3>
      </div>

      <div class="content grid mtop">
        <div class="box">
          <div class="img">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More </a>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More </a>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More </a>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="{{ asset('assets/img/new1.jpg') }}" alt="">
            {{-- <span>HOTEL</span> --}}
          </div>
          <div class="text">
            <h3>Celebrating Decade Years Of Hotel In 2020</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#">Read More </a>
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
        <h5>TESTIMONIALS </h5>
        <h3>What customers say </h3>
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



  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>



  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 4000,
      autoplaySpeed: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>



  <!-- Footer -->

  <footer>
    <div class="container top">
      <div class="subscribe" id="contact">
        <h2>Contact Developer</h2>
        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="input flex">
          <input type="email" placeholder="Your Email address">
          <button class="flex1">
            <span>Subscribe</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>

      <div class="content grid  top">
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
  </footer>

  <!-- End Footer-->
</body>
</html>