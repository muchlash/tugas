@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-9">
        <div class="card-header text-center">
            Dashboard
        </div>
        <div class="card-body">
          <p class="text-center">Selamat Datang {{ Auth::user()->name }}!</p>
          <p class="text-center">Silahkan lanjutkan ke menu yang tersedia</p>


          <div class="row justify-content-center">
            <div class="col" style="background-color:lavender;">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <h4 class="card-title text-center">Data Berita</h4>
                <a href="/tampil" class="stretched-link"></a>
              </div>
            </div>
            </div>
            <!--/.col-->
            <div class="col" style="background-color:lavender;">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <h4 class="card-title text-center">Data Kategori</h4>
                <a href="/tampilkategori" class="stretched-link"></a>
              </div>
            </div>
          </div>

          </div>
        </div>
    </div>
</div>
@endsection
