@extends('client.layout.core')
@section('content')

<section id="detail-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sec-img-product-detail">
                        <img src="assets/Images/produk.png" class="img-product-detail" alt="detail product">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sec-desc-product-detail">
                        <h1>Teh Herbal Seledri - Teh Celup</h1>
                        <p class="price">Rp. 200.000
                            <span class="price-normal">Rp. 300.000</span>
                            <span class="discount">
                                <img src="Assets/Images/Discount.svg" alt="discount icon">
                                <span class="text-disc">30%</span>
                            </span>
                        </p>
                        <div class="seller">
                            <img src="assets/Images/seller.png" alt="seller">
                            <p>Donald Trump</p>
                        </div>
                        <button class="btn-pesan-whatsapp btn"><img src="./img/whatsapp.svg" alt=""> Beli
                            Sekarang</button>
                        <a href="#" class="btn-share">
                            <img src="Assets/Images/Send.svg" alt="share icon">
                            Share
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section id="sec-desc-product">
            <div class="container">
                <h4>Deskripsi</h4>
                <div class="desc-product">
                    <div class="data-desc-product">
                        <p>Stok : <span>200</span></p>
                        <p>Berat : <span>200gr</span></p>
                        <p>Kategori : <span>Teh Herbal</span></p>
                    </div>
                    <div class="description-product">
                        <p>Penggunaan seledri sebagai obat yang paling banyak dijelaskan dan dipelajari adalah sebagai
                            diuretik berkat aksi phthalides yang ada di batangnya, yang juga dikaitkan dengan kemampuan
                            seledri untuk meredakan nyeri panggul. Berkat kandungan antioksidannya, seledri bertindak
                            sebagai agen anti-inflamasi .
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="similar-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="teh-herbal">
                            <div class="name-header" style="margin-bottom: 20px;">
                                <p>Produk Seperti Ini</p>
                            </div>
                            <div class="row">
                                <div class="col col-lg-4 col-md-4">
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
                                <div class="col col-lg-4 col-md-4">
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