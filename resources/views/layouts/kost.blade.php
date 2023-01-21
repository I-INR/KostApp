<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kost Muslimah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset ('css/kost.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/font-6/css/all.css') }}">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
      
      
      </head>
<body>
  <header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
          <a href="{{ url('/main') }}">BE KOST</a>
        </div>

        <ul class="nav-menu">
          <li> <a href="{{ url('/main') }}">Tentang Kami</a> </li>
          <li> <a href="{{ url('') }}">Kost</a> </li>
          <li> <a href="#testimonial">Testimoni</a> </li>
          <li> <a href="#kontak">Kontak</a></li>
          <li
            style="
              background-color: #f9a826;
              padding: 10px 30px;
            "
          > <a href="#"
          style="color: white;
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
  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobliemmenu);

    function mobliemmenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }
  </script>


  <!-- <section class="home" id="home">
    <div class="container">
      <h1>SKOST</h1>
      <p>Discover the place where you have fun & enjoy a lot</p>
       <div class="content grid">
        <div class="box">
          <span>ARRIVAL DATE </span> <br>
          <input type="date" placeholder="29/20/2021">
        </div>
        <div class="box">
          <span>DEPARTURE DATE </span> <br>
          <input type="date" placeholder="29/20/2021">
        </div>
        <div class="box">
          <span>ADULTS</span> <br>
          <input type="number" placeholder="01">
        </div>
        <div class="box">
          <span>CHILDREN </span> <br>
          <input type="number" placeholder="01">
        </div>
        <div class="box">
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div> 
    </div>
  </section> -->

  <section class="about" style="margin-top: 30px;" id="about">
    <div class="container">
      <div class="heading">
        <h5>Jelajahi</h5>
        <h2>Kost Muslimah
        </h2>
      </div>

      <div class="content flex  top">
        <div class="left">
          <h3>Salah satu kost yang bagus, KOST MUSLIMAH
          </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <!-- <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button> -->
        </div>
        <div class="right">
          {{-- <img src="{{ asset('assets/img/b2.jpg') }}" alt=""> --}}
          <img src="{{ asset('assets/img/kost_1/about.jpeg') }}" alt="">
        </div>
      </div>
    </div>
  </section>


      <section class="room wrapper2 top" id="room">
        <div class="container">
          <div class="heading">
            <h5>Tentang Kost Kita</h5>
            <h2>Fasilitas nyaman dan aman</h2>
          </div>
          <div class="content flex mtop">
            <div class="left grid2">
              <div class="box">
                <i class="fa fa-bath"></i>
                <p>Gratis</p>
                <h3>Kamar Mandi Dalam</h3>
              </div>
              <div class="box">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <p>Gratis</p>
                <h3>Dapur Bersama</h3>
              </div>
              <div class="box">
                <i class="fa fa-bed"></i>
                <p>Gratis</p>
                <h3>Tempat Tidur</h3>
              </div>
              <div class="box">
                <i class="fa fa-microchip"></i>
                <p>Gratis</p>
                <h3>Lemari</h3>
              </div>
              <div class="box">
                <i class="fa-regular fa-snowflake"></i>
                <p>Gratis</p>
                <h3>Kulkas</h3>
                
              </div>
              <div class="box">
                <i class="fa fa-wifi"></i>
                <p>Gratis</p>
                <h3>Wifi</h3>
              </div>
            </div>
            <div class="right dm">
              <img src={{ asset('assets/img/kost_1/fasilitas.jpeg') }} alt="">
              <button>Hubungi pemilik kost</button>
            </div>
          </div>
        </div>
      </section>

      <section class="customer top" id="testimonials">
        <div class="container">
          <div class="heading">
            <h5>TESTIMONIALS </h5>
            <h3>What customers say </h3>
          </div>
          <div class="">
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
          <!-- <figure class="snip1533">
            <figcaption>
              <blockquote>
                <p>The only skills I have the patience to learn are those that have no real application in life. </p>
              </blockquote>
              <h3>Ingredia Nutrisha</h3>
              <h4>Twitter</h4>
            </figcaption>
          </figure> -->
    
          <!-- <div class="owl-carousel owl-theme mtop">
            <div class="item">
              <div class="rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h3>Kost Yang Asri</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div class="admin flex">
                <div class="img">
                  <img src="image/c1.jpg" alt="">
                </div>
                <div class="text">
                  <h3>Hayam Muruk</h3>
                  <span>Student   </span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h3>Excellent Swimming</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div class="admin flex">
                <div class="img">
                  <img src="image/c2.jpg" alt="">
                </div>
                <div class="text">
                  <h3>Ayman Jensi</h3>
                  <span>Manager</span>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>


      <footer>
        <div class="container top">
          <div class="subscribe" id="contact">
            <h2>Kontak Pengurus Kost</h2>
            {{-- <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="input flex">
              <input type="email" placeholder="Your Email address">
              <button class="flex1">
                <span>Subscribe</span>
                <i class="fas fa-arrow-circle-right"></i>
              </button>
            </div> --}}
          </div>
    
          <div class="content grid  top">
            <!-- <div class="box">
              <div class="logo">
                <img src="image/logo.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <div class="social flex">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>
    
            <div class="box">
              <h2>Quick Links</h2>
              <ul>
                <li><i class="fas fa-angle-double-right"></i>Big Data</li>
                <li><i class="fas fa-angle-double-right"></i>Wellness</li>
                <li><i class="fas fa-angle-double-right"></i>Spa Gallery</li>
                <li><i class="fas fa-angle-double-right"></i>Reservation</li>
                <li><i class="fas fa-angle-double-right"></i>FAQ</li>
                <li><i class="fas fa-angle-double-right"></i>Contact</li>
              </ul>
            </div>
    
            <div class="box">
              <h2>Kost Muslimah</h2>
              <ul>
                <li><i class="fas fa-angle-double-right"></i>Restaurant</li>
                <li><i class="fas fa-angle-double-right"></i>Swimming Pool</li>
                <li><i class="fas fa-angle-double-right"></i>Wellness & Spa</li>
                <li><i class="fas fa-angle-double-right"></i>Conference Room</li>
                <li><i class="fas fa-angle-double-right"></i>Events</li>
                <li><i class="fas fa-angle-double-right"></i>Adult Room</li>
              </ul>
            </div> -->
    
            <div class="box">
              <h2>Kost Muslimah</h2>
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
              <h2>Kost Muslimah</h2>
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
              <h2>Kost Muslimah</h2>
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
              <h2>Kost Muslimah</h2>
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
</body>
</html>