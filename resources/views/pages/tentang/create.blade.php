@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{route('tentang.store')}}">
            <div class="card">
              <div class="card-header">
                <h4>Form Tentang</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="name">Alamat</label>
                      <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="name">No Telepon</label>
                      <input id="no_telp" type="text" class="form-control" name="no_telp" placeholder="No Telepon">
                    </div>
                    <div class="form-group">
                      <label for="name">Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="name">Deskripsi</label>
                      <input id="deskripsi" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                      <label for="name">Kode Pos</label>
                      <input id="kode_pos" type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                    </div>
                    <div class="form-group">
                      <label for="name">Logo</label>
                      <input id="logo" type="text" class="form-control" name="logo" placeholder="Logo">
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