@extends('client.layout.core')

@section('content')

<section id="contact">
        <div class="container">
            <div class="text-center">
                <h1>Hubungi Kami</h1>
            </div>
            @foreach($kontak as $k)
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="container-card">
                                    <a href="tel: {{$k->no_telp}}">
                                        <img src="Assets/Images/phone.png" alt="Phone">
                                        <p class="text-center">No. Handphone</p>
                                        <h1>{{$k->no_telp}}</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="container-card">
                                    <a href="mailto: {{$k->email}}" target="_blank">
                                        <img src="Assets/Images/email.png" alt="Email">
                                        <p class="text-center">Email</p>
                                        <h2>{{$k->email}}</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="container-card">
                                    <a href="https://wa.me/+62{{$k->no_telp}}" target="_blank">
                                        <img src="Assets/Images/whatssap-icon.png" alt="Whatss app">
                                        <p class="text-center">Whatsap</p>
                                        <h1>{{$k->no_telp}}</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="text-center">
                <h1>sosial media</h1>
            </div>
            @foreach($kontak as $k)
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                       
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="container-card">
                                    <a href="tel: {{$k->no_telp}}">
                                        <img src="Assets/Images/phone.png" alt="Phone">
                                        <p class="text-center">instagram</p>
                                        <h1>{{$k->ak_instagram}}</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="container-card">
                                    <a href="mailto: aghisnariziq24@gmail.com">
                                        <img src="Assets/Images/email.png" alt="Email">
                                        <p class="text-center">facebook</p>
                                        <h2>{{$k->ak_facebook}}</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="container-card">
                                    <a href="https://wa.me/+62{{$k->no_telp}}">
                                        <img src="Assets/Images/whatssap-icon.png" alt="Whatss app">
                                        <p class="text-center">Whatsap</p>
                                        <h1>{{$k->no_telp}}</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Lokasi</h1>
                        <div class="container-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7904.76708695685!2d112.5088176!3d-7.8548672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78875ae41d6dd7%3A0x55274f403c8dc7b6!2sSumberejo%2C%20Batu%2C%20Batu%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1664380670770!5m2!1sen!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection