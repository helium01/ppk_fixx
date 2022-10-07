@extends('layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{route('kontak.store')}}">
            <div class="card">
              <div class="card-header">
                <h4>Form Kontak</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Nama Tentang</label>
                      <select class="form-control  p-1" id="type" name="id_tentang">
                        @foreach ($tentang as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Akun Instagram</label>
                      <input id="ak_instagram" type="text" class="form-control" name="ak_instagram" placeholder="Akun Instagram">
                    </div>
                    <div class="form-group">
                      <label for="name">Akun Facebook</label>
                      <input id="ak_facebook" type="text" class="form-control" name="ak_facebook" placeholder="Akun Facebook">
                    </div>
                    <div class="form-group">
                      <label for="name">Akun Youtube</label>
                      <input id="ak_youtube" type="text" class="form-control" name="ak_youtube" placeholder="Akun Youtube">
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