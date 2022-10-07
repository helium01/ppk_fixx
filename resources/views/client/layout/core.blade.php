<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="{{asset('Assets')}}/Vendor/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Assets')}}/CSS/Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>
<section id="navbar-section">
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container">
          <a class="navbar-brand ms-3" href="#">
            <img src="{{asset('Assets')}}/Images/Logo.png" alt="LOGO">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="{{route('produk')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                <ul class="dropdown-menu dropdown-menu-lg-start">
                    <li><a class="dropdown-item" href="{{route('produk')}}">Hasil Olahan</a></li>
                    <li><a class="dropdown-item" href="#">Hasil Pertanian</a></li>
                  </ul>  
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('tentang')}}">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('kontak')}}">Kontak</a>
              </li>
            </ul>
            <div class="me-3">
                <div class="justify-content-end">
                @if (Route::has('login'))
                   
                    @auth
                    <a href="{{url('/home')}}" class="button-default">
                        <h1 class="button-text">admin</h1>
                    </a>
                    @else
                    <a href="{{route('login')}}" class="button-default">
                        <h1 class="button-text">login</h1>
                    </a>

                        @if (Route::has('register'))
                        <a href="{{route('register')}}" class="button-default">
                        <h1 class="button-text">daftar</h1>
                    </a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
          </div>
        </div>
      </nav>
</section>
<section id="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="justify-content-end">
                            <div class="text-main-banner">
                                <h1>Marketplace <span>Produk</span></h1>
                                <h1>Desa <span>Sumberejo</span></h1>
                                
                                <p>Temukan produk olahan teh unik berbahan dasar 
                                    tanaman seledri dan hasil pertanian lainnya sekarang</p>
                            </div>
                            <a class="button-default">
                                <h1 class="button-text">Lihat Produk</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-banner ms-lg-5">
                            <img class="img-fluid" src="{{asset('Assets')}}/Images/Woman-main-banner.png" alt="Main-Banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')
<div class="sec-preview-product">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title text-light">Produk Unggulan</h2>
                <h4 class="description text-light">Berikut merupakan beberapa produk hasil olahan dan hasil
                    pertanian
                    desa
                    Sumberejo</h4>
                <a href="{{route('produk')}}" class="btn btn-white">Lihat Produk</a>
            </div>
            <div class="col-md-7">
                <div class="flex-product">
                    <div class="card-preview-product">
                        <img src="/{{asset('Assets')}}/Images/sayur.png" alt="sayur">
                        <p class="text-preview-product text-dark">Sayuran</p>
                    </div>
                    <div class="card-preview-product">
                        <img src="/{{asset('Assets')}}/Images/teh.png" alt="teh">
                        <p class="text-preview-product text-dark">Teh Herbal</p>
                    </div>
                    <div class="card-preview-product">
                        <img src="/{{asset('Assets')}}/Images/bumbudapur.png" alt="bumbu">
                        <p class="text-preview-product text-dark">Bumbu Dapur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="galery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Galery</h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="layout"></div>
        </div>
    </div>
</section >
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('Assets')}}/Images/Logo Ormawa.png" alt="Logo Ormawa">
                        <h1>okay</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-nav">
                            <div class="menu-nav">
                                <h1>Links</h1>
                                <ul>
                                    <li><a href="{{route('produk')}}" target="_blank">Produk</a></li>
                                    <li><a href="#" target="_blank">Galeri</a></li>
                                    <li><a href="{{route('kontak')}}" target="_blank">Kontak</a></li>
                                </ul>
                            </div>
                            <div class="menu-nav">
                                <h1>Company</h1>
                                <ul>
                                    <li><a href="#" target="_blank">Bantuan</a></li>
                                    <li><a href="#" target="_blank">Lisensi dan Peryaratan</a></li>
                                    <li><a href="{{route('tentang')}}" target="_blank">Tentang Kami</a></li>
                                </ul>
                            </div>
                            <div class="menu-nav additional">
                                <h1>Kunjungi kami</h1>
                                <ul>
                                    <li><div class="row"><div class="col col-md-1"><span><img src="{{asset('Assets')}}/Images/Location.png"></span></div><div class="col col-md-11"><a href="" target="_blank">Jl. Indragiri Gg. 1, RT.01/RW.08,
                                        Sumberejo, Kec. Batu,Kota Batu,
                                        Jawa Timur 65318</a></div></div></li>
                                    <li><div class="row"><div class="col col-md-1"><span><img src="{{asset('Assets')}}/Images/Clock.png"></span></div><div class="col col-md-11"><a href="https://nekopoi.care" target="_blank">Setiap Hari - 8Pagi - 8Malam</a></div></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span ></span>
                    <p class="text-center ">Made With <img src="{{asset('Assets')}}/Images/Love.png"> By PPKO</p>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
    <script src="{{asset('Assets')}}/Vendor/js/bootstrap.bundle.js"></script>
    <script src="{{asset('Assets')}}/CSS/Style.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</html>