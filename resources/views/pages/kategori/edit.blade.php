@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('kategori.update', ['id' => $kategori->id]) }}" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <h4>Form Edit Data Kategori <strong>{{$kategori->nama_kategori}}</strong></h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama Kategori</label>
                      <input id="nama_kategori" type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="{{$kategori->nama_kategori}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Deskripsi</label>
                      <input id="deskripsi" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$kategori->deskripsi}}">
                    </div>
                    <div class="form-group">
                    <label for="name">Foto</label>
                      <input id="foto" type="file" class="form-control" name="foto" placeholder="Foto" value="{{$kategori->foto}}">

                      <img src="{{asset('foto/'.$kategori->foto)}}" alt="" width="100">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                      <i class="fas fa-pen"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection