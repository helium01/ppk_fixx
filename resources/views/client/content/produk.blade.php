@extends('client.layout.core')
@section('content')

<section id="banner-slide">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-container">
                        <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">Slide 4</div>
                                <div class="swiper-slide">Slide 5</div>
                                <div class="swiper-slide">Slide 6</div>
                                </div>
                            <div class="swiper-pagination"></div>
                          </div>  
                    </div>
                    <div class="layout"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="header">
    </section>
    <section id="produk-terlaris">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="name-header text-center">
                        <p>Produk Terlaris</p>
                    </div>
                    <div class="desc-produk-terlaris">
                        <img src="Assets/Images/produk.png" alt="produk">
                        <p class="nama-produk-terlaris text-center">Teh Herbal Seledri - Teh Celup</p>
                        <div class="container-spec-produk">
                            <p class="harga-produk-terlaris">Rp. 200.000</p>
                            <div class="spesifikasi">
                                <p class="kondisi-produk-terlaris">Kondisi : <span>Baru</span></p>
                                <p class="berat-produk-terlaris">Berat : <span>200gr</span></p>
                                <p class="kategori-produk-terlaris">Kategori : <span>Teh Herbal</span></p>
                            </div>
                        </div>
                        <button class="btn-pesan-whatsapp btn"><img src="./img/whatsapp.svg" alt=""> Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="produk-kami">
        <div class="container">
            <div class="row">
                <div class="name-header col-lg-12 text-center">
                    <p>Produk Kami</p>
                </div>
            </div>
            <div class="card-container">
                <div class="nav-produk text-center">
                    <a href="">
                        <div class="navigasi-produk-kami active">
                            <img src="Assets/Images/cangkir.png" alt="">
                            <p>Semua Produk</p>
                        </div>
                    </a>
                </div>
                <div class="nav-produk">
                    <a href="">
                        <div class="navigasi-produk-kami">
                            <img src="Assets/Images/cangkir asli.png" alt="">
                            <p>Produk Olahan</p>
                        </div>
                    </a>
                </div>
                <div class="nav-produk">
                    <a href="">
                        <div class="navigasi-produk-kami">
                            <img src="Assets/Images/bawang.png" alt="">
                            <p>Produk Pertanian</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="search">
                <form action="" method="post" class="d-flex">
                    <input type="text" class="search-input" placeholder='Cari "Teh Seledri"'>
                    <button type="submit" class="btn-cari btn"><img src="Assets/Images/search.svg" alt=""></button>
                    <div class="container-most-popular">
                        <p class="most-popular">Sering Dicari :</p>
                        <a class="most-history">Teh Seledri</a>
                        <a class="most-history">Sawi Hijau</a>
                        <a class="most-history">Ketumbar</a>
                        <a class="most-history">Bawang Merah</a>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="teh-herbal">
                        <div class="name-header">
                            <p>Teh Herbal</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="teh-herbal">
                        <div class="name-header mt-lg-5">
                            <p>Bumbu Dapur</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="teh-herbal">
                        <div class="name-header mt-lg-5">
                            <p>Aneka Sayuran</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-teh-herbal">
                                    <div class="img-product">
                                        <img src="Assets/Images/bini.png" alt="">
                                    </div>
                                    <div class="container-card">
                                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                                        <p>Rp. 200.000</p>
                                        <p class="text-seller-card"><span><img src="Assets/Images/Logo.png" alt="img seller"></span>PPKO</p>
                                        <div class="button-pos">
                                            <div class="btn-buy btn">
                                                <a href="">
                                                    <h2>Beli Sekarang</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection