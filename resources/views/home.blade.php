@extends('layout.main')

@section('title', 'Home - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
  <img src="{{ asset('img/hiasan/kanan.svg') }}" alt="" class="samping1">
  <img src="{{ asset('img/hiasan/kiri.svg') }}" alt="" class="samping2">
  <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
  <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<div class="jumbotron">
    <img src="img/logobesar.svg" alt="" class="logohome">
    <div class="mt-5">
        <a href="{{ asset('pdf/proposalkegiatan.pdf') }}" download class="btn px-3 hoverableborder" style="background-color: #FF6E00">Proposal Kegiatan</a>
        <a href="{{ asset('pdf/proposalsponsor.pdf') }}" download class="btn px-3 ms-2 hoverableborder" style="background-color: #FF6E00">Proposal Sponsorship</a>
    </div>
</div>
<div class="d-flex justify-content-center mt-5">
    <div class="mb-3" style="max-width: 60%;">
        <div class="row g-3">
          <div class="col-md-4">
            <img src="img/dummy.svg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="d-flex align-items-center h-100">
              <div class="card-body">              
                <h2 class="card-title">About Us</h2>
                <p class="card-text">Virtual Career Expo 2.0 adalah acara tahunan yang di selenggarakan oleh mata kuliah Corporate Entrepreneurship Universitas Ciputra Surabaya. Kegiatan Virtual Career Expo 2.0 merupakan kegiatan yang mempertemukan para calon intrapreneur dengan berbagai perusahaan-perusahaan yang menjadi impiannya. </p>
                <a href="/about" class="btn px-3 hoverableborder" style="background-color: #FF6E00">Read More</a>
              </div>
            </div>            
          </div>
        </div>
    </div>
</div>
<div class="container mt-5" style="max-width: 60%;">
    <div class="row">
      <div class="col">
        <h2>Pelaksanaan Acara</h2>
      </div>
      <div class="col">
        <div>
            <h2>Waktu</h2>
            <p>24-25 Mei 2022</p>
        </div>
      </div>
      <div class="col">
        <div>
            <h2>Tempat</h2>
            <p>Zoom Meeting</p>
        </div>
      </div>
    </div>
</div>
<div class="mt-5">
    <h2 class="text-center mb-4">Testimonial</h2>
    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner mx-auto">            
          <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <div class="" style="width: 18rem;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="ms-5" style="width: 18rem;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="ms-5" style="width: 18rem;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
              </div>            
          </div>
          <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="" style="width: 18rem;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="ms-5" style="width: 18rem;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="ms-5" style="width: 18rem;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
              </div>            
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
</div>
<div class="mt-5">
    <h2 class="text-center mb-4">Sponsors</h2>
    <div id="carouselExampleControlss" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner mx-auto">            
          <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
              </div>            
          </div>
          <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
              </div>            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</div>
<div class="mt-5">
    <h2 class="text-center mb-4">Media Partner</h2>
    <div id="carouselExampleControlsss" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner mx-auto">            
          <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
              </div>            
          </div>
          <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
                <img src="img/dummy.svg" alt="" class="ms-5" style="width: 18rem;">
              </div>            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsss" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsss" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</div>

@endsection