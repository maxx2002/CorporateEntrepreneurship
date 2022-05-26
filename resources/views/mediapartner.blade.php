@extends('layout.main')

@section('title', 'Media Partner - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
  <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
</div>

<h1 class="text-center my-5">MEDIA PARTNERS</h1>

<div class="justify-content-center flexhidden">
  <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" style="width: 90%">
    <div class="d-flex justify-content-center">
      <div class="carousel-inner" style="width: 80%">            
        <div class="carousel-item active">        
          <div class="row">
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/infoevent.jpg" alt="" style="width: 100%;">
              </div>              
            </div>
            <div class="col">
              <img src="img/mp/mediaevent.png" alt="" style="width: 100%;">
            </div>
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/eventaja.webp" alt="" style="width: 100%;">
              </div> 
            </div>
          </div>            
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/eventsuroboyo.png" alt="" style="width: 100%;">
              </div> 
            </div>
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/himman.png" alt="" style="width: 100%;">
              </div> 
            </div>
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/mahasiswa.png" alt="" style="width: 100%;">
              </div> 
            </div>
          </div>  
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/seputar.JPG" alt="" style="width: 100%;">
              </div> 
            </div>
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/surabaya.jpg" alt="" style="width: 100%;">
              </div> 
            </div>
            <div class="col">
              <div class="d-flex align-items-center h-100">
                <img src="img/mp/surabaya.jpg" alt="" style="width: 100%;">
              </div> 
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

<div class="justify-content-center hiddenflex">
  <div id="carouselExampleControlss" class="carousel carousel-dark slide" data-bs-ride="carousel" style="width: 90%">
    <div class="d-flex justify-content-center">
      <div class="carousel-inner" style="width: 80%">            
        <div class="carousel-item active">        
          <img src="img/dummy.svg" alt="" style="width: 100%;">          
        </div>
        <div class="carousel-item">
          <img src="img/logobesar.svg" alt="" style="width: 100%;">  
        </div>
        <div class="carousel-item">
          <img src="img/dummy.svg" alt="" style="width: 100%;">  
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


@endsection