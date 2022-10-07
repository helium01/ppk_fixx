@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('pedagang.update', ['id' => $pedagang->id]) }}">
            <div class="card">
              <div class="card-header">
                <h4>Form Edit Data Pedagang <strong>{{$pedagang->nama}}</strong></h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama" value="{{$pedagang->nama}}">
                    </div>
                    <div class="form-group">
                      <label for="name">No Telepon</label>
                      <input id="no_telp" type="text" class="form-control" name="no_telp" placeholder="No Telepon" value="{{$pedagang->no_telp}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{$pedagang->email}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Alamat</label>
                      <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$pedagang->alamat}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Sosial Media</label>
                      <input id="sosial_media" type="text" class="form-control" name="sosial_media" placeholder="Sosial Media" value="{{$pedagang->sosial_media}}">
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