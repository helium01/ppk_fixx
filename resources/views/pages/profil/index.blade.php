@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Profil</h1>
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
            @if($jumlah<1)
              <a href="{{route("profil.create")}}" class="ml-1 btn btn-primary"><i class="fas fa-plus"></i></a>
            @else
            <a href="#" class="ml-1 btn btn-danger"><i class="fas fa-minus"></i></a>
            @endif
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Profil</th>
                    <th>Motto</th>
                    <th>foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;
                  @endphp
                  @forelse ($profils as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->moto}}</td>
                    <td><img src="{{asset('foto/'.$item->foto_1)}}" alt="" width="100"></td>
                    <td><img src="{{asset('foto/'.$item->foto_2)}}" alt="" width="100"></td>
                    <td><img src="{{asset('foto/'.$item->foto_3)}}" alt="" width="100"></td>
                    <td>
                      <a href="{{route('profil.edit',['id' => $item->id])}}" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="{{route('profil.delete',['id' => $item->id])}}" class="ml-1 btn btn-danger"><i
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
                    <th>Nama</th>
                    <th>Motto</th>
                    <th>Foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
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