@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{route('pelatihan.store')}}">
            <div class="card">
              <div class="card-header">
                <h4>Form Pelatihan</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama Kegiatan</label>
                      <input id="nama_kegiatan" type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan">
                    </div>
                    <div class="form-group">
                      <label for="name">Tanggal</label>
                      <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                    </div>
                    <div class="form-group">
                      <label for="name">Jenis Kegiatan</label>
                      <input id="jenis_kegiatan" type="text" class="form-control" name="jenis_kegiatan" placeholder="Jenis Kegiatan">
                    </div>
                    <div class="form-group">
                      <label for="name">Deskripsi</label>
                      <input id="deskripsi" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                      <label for="name">Foto</label>
                      <input id="foto" type="text" class="form-control" name="foto" placeholder="Foto">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                      <i class="fas fa-plus"></i>
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