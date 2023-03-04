<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kost Arnest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href={{ asset('css/kost.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar flex1">
                <div class="sticky_logo logo">
                    <a href="/">BE KOST</a>
                </div>
                <ul class="nav-menu">
                    <li> <a href="{{ url('/main/about') }}">Tentang Kami</a> </li>
                    <li class="dropdown">
                        <button class="drop-button" onclick="myFunction()">Kost
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="drop-content" id="myDropdown">
                            <a href="{{ url('/kost_fuad') }}">Kost Fuad</a>
                            <a href="{{ url('/kost_ilham') }}">Kost Ilham</a>
                            <a href="{{ url('/kost_kombas') }}">Kost Kombas</a>
                            <a href="{{ url('/kost_arnest') }}">Kost Arnest</a>
                        </div>
                    </li>
                    <li> <a href="{{ url('./main/testimonial') }}">Testimoni</a> </li>
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
                <h2>{{ $data->name }}
                </h2>
            </div>

            <div class="content flex top">
                <div class="left">
                    <h3>Kost Arnest, salah satu kost terbaik yang bisa kamu dapatkan bersama kami
                    </h3>
                    <p>{{ $data->description }}</p>
                    {{-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
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
                <h5>Ruang Kamar</h5>
                <h2>Fasilitas Kamar</h2>
            </div>
            <div class="content flex mtop">
                <div class="left grid2">
                    @if ($fasilitas->bathroom == 1)
                        <div class="box">
                            <i class="fa fa-bath"></i>
                            <p>Gratis</p>
                            <h3>Kamar Mandi Dalam</h3>
                        </div>
                    @endif
                    @if ($fasilitas->kitchen == 1)
                        <div class="box">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <p>Gratis</p>
                            <h3>Dapur Bersama</h3>
                        </div>
                    @endif

                    @if ($fasilitas->mattress == 1)
                        <div class="box">
                            <i class="fa fa-bed"></i>
                            <p>Gratis</p>
                            <h3>Tempat Tidur</h3>
                        </div>
                    @endif

                    @if ($fasilitas->cupboard == 1)
                        <div class="box">
                            <i class="fa fa-microchip"></i>
                            <p>Gratis</p>
                            <h3>Lemari</h3>
                        </div>
                    @endif

                    @if ($fasilitas->icebox == 1)
                        <div class="box">
                            <i class="fa-regular fa-snowflake"></i>
                            <p>Gratis</p>
                            <h3>Kulkas</h3>

                        </div>
                    @endif

                    @if ($fasilitas->wifi == 1)
                        <div class="box">
                            <i class="fa fa-wifi"></i>
                            <p>Gratis</p>
                            <h3>Wifi</h3>
                        </div>
                    @endif

                </div>
                <div class="right dm">
                    <img src={{ asset('assets/img/kost_1/fasilitas.jpeg') }} alt="">
                    <button><a
                            href="https://api.whatsapp.com/send?phone=6282266530061&text=Halo%20Kak%20Saya%20Mau%Bertanya%tentang%kost">Hubungi
                            pemilik kost</a></button>
                </div>
            </div>
        </div>
    </section>

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
                            <p>“Wah untung ada ngkost, mau pindah pindah kosan jd gampang tinggal cari ajaa disini
                                hihi.”</p>
                        </blockquote>
                        <h3>Indah</h3>
                        <h4>Mahasiswi, Surabaya</h4>
                    </figcaption>
                </figure>
                <figure class="snip1533">
                    <figcaption>
                        <blockquote>
                            <p>“Wah untung ada ngkost, mau pindah pindah kosan jd gampang tinggal cari ajaa disini
                                hihi.”</p>
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
                            <p>“Karena sempet mau pindah kost,temen nyaranin cek BeKost. Ternyata cukup banyak pilihan.”
                            </p>
                        </blockquote>
                        <h3>Andreas</h3>
                        <h4>Mahasiswa, Surabaya</h4>
                    </figcaption>
                </figure>
                <figure class="snip1533">
                    <figcaption>
                        <blockquote>
                            <p>“Sempet nyari tempat tinggal kost di sekitar SMK Telkom Purwokerto, ternyata bisa nemu
                                juga."</p>
                        </blockquote>
                        <h3>Dwioka</h3>
                        <h4>Siswa, Surabaya</h4>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <div class="locati">
        <div class="container">
            <h1>Lokasi</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273119179214!2d109.2494613!3d-7.4350009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9d1768e4d1%3A0x959269c10818fa0c!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1677191338561!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>




    <footer>
        <div class="container top">
            <div class="subscribe" id="contact">
                <h2>Kontak Pengurus Kost</h2>
            </div>

            <div class="content grid  top">
                @foreach ($footers as $footer)
                    <div class="box">
                        <h2>{{ $footer->name }}</h2>
                        <div class="icon flex">
                            <div class="i">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <h3>{{ $footer->address }}</h3>
                                <p><a href="https://goo.gl/maps/L7USrpnm4R1hJzHE6" target="_blank">SMK TELKOM</a></p>
                            </div>
                        </div>
                        <div class="icon flex">
                            <div class="i">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="text">
                                <h3>{{ $footer->noHP }}</h3>
                                <p><a href="https://wa.me/6282266530061?text=Halo20%Kak,20%saya20%mau20%order20%joki"
                                        target="_blank">+62 3456 7890</a></p>
                            </div>
                        </div>
                        <div class="icon flex">
                            <div class="i">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="text">
                                <h3>{{ $footer->email }}</h3>
                                <p>hello@muziro.com</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="box">
                    <h2>Kost Ilham</h2>
                    <div class="icon flex">
                        <div class="i">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Alamat</h3>
                            <p><a href="https://goo.gl/maps/L7USrpnm4R1hJzHE6" target="_blank">SMK TELKOM</a></p>
                        </div>
                    </div>
                    <div class="icon flex">
                        <div class="i">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Nomor</h3>
                            <p><a href="https://wa.me/6282266530061?text=Halo20%Kak,20%saya20%mau20%order20%joki"
                                    target="_blank">+62 3456 7890</a></p>
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
                    <h2>Kost Kombas</h2>
                    <div class="icon flex">
                        <div class="i">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Alamat</h3>
                            <p><a href="https://goo.gl/maps/L7USrpnm4R1hJzHE6" target="_blank">SMK TELKOM</a></p>
                        </div>
                    </div>
                    <div class="icon flex">
                        <div class="i">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Nomor</h3>
                            <p><a href="https://wa.me/6282266530061?text=Halo20%Kak,20%saya20%mau20%order20%joki"
                                    target="_blank">+62 3456 7890</a></p>
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
                    <h2>Kost Mas Fuad</h2>
                    <div class="icon flex">
                        <div class="i">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Alamat</h3>
                            <p><a href="https://goo.gl/maps/L7USrpnm4R1hJzHE6" target="_blank">SMK TELKOM</a></p>
                        </div>
                    </div>
                    <div class="icon flex">
                        <div class="i">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Nomor</h3>
                            <p><a href="https://wa.me/6282266530061?text=Halo20%Kak,20%saya20%mau20%order20%joki"
                                    target="_blank">+62 3456 7890</a></p>
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
                </div> --}}
            </div>
        </div>
    </footer>
</body>

</html>
