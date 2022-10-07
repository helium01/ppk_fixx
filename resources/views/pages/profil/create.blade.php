@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{route('profil.store')}}" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <h4>Form Profil</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama Profil</label>
                      <select class="form-control  p-1" id="type" name="id_tentang">
                        @foreach ($tentang as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Motto</label>
                      <input id="moto" type="text" class="form-control" name="moto" placeholder="Motto">
                    </div>
                    <div class="form-group">
                      <label for="name">Foto 1</label>
                      <input id="foto_1" type="file" class="form-control" name="foto_1" placeholder="Foto 1">
                    </div>
                    <div class="form-group">
                      <label for="name">Foto 2</label>
                      <input id="foto_2" type="file" class="form-control" name="foto_2" placeholder="Foto 2">
                    </div>
                    <div class="form-group">
                      <label for="name">Foto 3</label>
                      <input id="foto_3" type="file" class="form-control" name="foto_3" placeholder="Foto 3">
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