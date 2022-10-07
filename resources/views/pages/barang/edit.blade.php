@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('barang.update', ['id' => $barang->id]) }}" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <h4>Form Edit Data Barang</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Kategori</label>
                      <select class="form-control  p-1" id="type" name="id_kategori">
                        @foreach ($kategori as $item)
                        <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Nama Pedagang</label>
                      <select class="form-control  p-1" id="type" name="id_pedagang">
                        @foreach ($pedagang as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Harga</label>
                      <input id="harga" type="number" class="form-control" name="harga" placeholder="Harga" value="{{$barang->harga}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Deskripsi</label>
                      <input id="deskripsi" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$barang->deskripsi}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Berat</label>
                      <input id="berat" type="number" class="form-control" name="berat" placeholder="Berat" value="{{$barang->berat}}">
                    </div>
                    <img src="{{asset('foto/'.$barang->foto)}}" alt="" width='100' height="100">
                    <div class="form-group">
                      <label for="name">Foto</label>
                      <input id="foto" type="file" class="form-control" name="foto" placeholder="Berat">
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