@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Barang</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </section>

  <!-- Main content Start -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a>
              <a href="{{route("barang.create")}}" class="ml-1 btn btn-primary"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Nama Pedagang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Berat</th>
                    <th>foto</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;
                  @endphp
                  @forelse ($barangs as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama_kategori}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->berat}}</td>
                    <td><img src="{{asset('foto/'.$item->foto)}}" alt="" width="200"></td>
                    <td>
                      <a href="{{route('barang.edit',['id' => $item->id])}}" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="{{route('barang.delete',['id' => $item->id])}}" class="ml-1 btn btn-danger"><i
                          class="fas fa-trash"></i></a>
                    </td>
                    @empty
                  <tr>
                    <td colspan="100%" class="text-center">
                      <h5>Data Tidak Ditemukan</h5>
                    </td>
                  </tr>
                  @endforelse
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Nama Pedagang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Berat</th>
                    <th>foto</th>
                    <th>Tindakan</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content End -->
</div>

@endsection