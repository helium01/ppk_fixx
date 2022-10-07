@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('pelatihan.update', ['id' => $pelatihan->id]) }}">
            <div class="card">
              <div class="card-header">
                <h4>Form Edit Data Pelatihan <strong>{{$pelatihan->nama_kegiatan}}</strong></h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama Kegiatan</label>
                      <input id="nama_kegiatan" type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{$pelatihan->nama_kegiatan}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Tanggal</label>
                      <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{$pelatihan->tanggal}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Jenis Kegiatan</label>
                      <input id="jenis_kegiatan" type="text" class="form-control" name="jenis_kegiatan" placeholder="Jenis Kegiatan" value="{{$pelatihan->jenis_kegiatan}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Deskripsi</label>
                      <input id="deskripsi" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$pelatihan->deskripsi}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Foto</label>
                      <input id="foto" type="text" class="form-control" name="foto" placeholder="Foto" value="{{$pelatihan->foto}}">
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