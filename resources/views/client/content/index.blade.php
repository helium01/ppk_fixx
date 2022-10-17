@extends('client.layout.core')

@section('content')


<section id="about-seledri">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5">
                    @foreach($profil as $p)
                        <div class="image-about-seledri">
                            <img class="img-fluid" src="{{asset('foto/'.$p->foto_2)}}" alt="Seledri">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="justify-content-end">
                            <div class="text-about-seledri">
                                
                                <h1>{{$p->nama}}</h1>
                                <p>{{$p->deskripsi}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection