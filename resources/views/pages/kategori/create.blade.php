@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{route('kategori.store')}}" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <h4>Form Kategori</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama Kategori</label>
                      <input id="nama_kategori" type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
                    </div>
                    <div class="form-group">
                      <label for="name">Deskripsi</label>
                      <input id="deskripsi" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                      <label for="name">Foto</label>
                      <input id="foto" type="file" class="form-control" name="foto" placeholder="Foto">
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