@extends('layout.main')

@section('title', 'Sponsors - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
  <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
</div>

<h1 class="text-center my-5">SPONSORS</h1>
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner mx-auto">            
      <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <img src="img/dummy.svg" alt="" style="width: 18rem;">
            <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
            <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
          </div>            
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection