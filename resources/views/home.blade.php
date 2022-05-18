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
    <div class="mt-4 mt-md-5">
        <a href="{{ asset('pdf/proposalkegiatan.pdf') }}" download class="btn px-3 hoverableborder fs-6" style="background-color: #FF6E00">Proposal Kegiatan</a>
        <a href="{{ asset('pdf/proposalsponsor.pdf') }}" download class="btn px-3 mt-2 mt-sm-0 ms-sm-2 hoverableborder" style="background-color: #FF6E00">Proposal Sponsorship</a>
    </div>
</div>
<div class="d-flex justify-content-center mt-5">
    <div class="mb-3 widthpersen">
        <div class="row g-3">
          <div class="col-md-4">
            <div class="d-flex justify-content-center h-100">
              <img src="img/foto/1.jpg" class="img-fluid rounded-start" alt="...">
            </div>            
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
<div class="container mt-5" style="width: 60%">
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

<h2 class="text-center mb-4 mt-5">Testimonial</h2>
<div class="justify-content-center flexhidden">  
  <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" style="width: 90%">
    <div class="d-flex justify-content-center">
      <div class="carousel-inner" style="width: 80%">            
        <div class="carousel-item active">        
          <div class="row">
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/testi/anetta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Anetta TW</h2>
                      <p class="card-text text-center">Menurutku acaranya
                        insightful bgt. Perusahaannya juga
                        variatif jadi aku banyak dapet
                        insight juga tentang perusahaan2
                        yang mungkin sebelumnya aku
                        belum pernah denger. Selain itu
                        acaranya juga interaktif, kita
                        dikasih kesempatan buat tanya2 ke
                        narasumber langsung. Kita juga
                        dibantu sama website virtual
                        career expo buat apply2 ke
                        perusahaan yang kita pengen.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/testi/berliana.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Berliana Fira</h2>
                      <p class="card-text text-center">Menurutku career expo virtual asik
                        dan gak merepotkan untuk antri dll
                        untuk cari kerja dan mendukung
                        kemajuan teknologi. Tapi
                        menurutku kekurangan tahun kmrn
                        adalah keterbatasan untuk
                        mendapatkan info lowongan pada
                        setiap perusahaan karena
                        keterbatasan saat dibagi breakout
                        room itu jadi gak bisa join banyak
                        hehe dan kalo gak salah kmrn
                        untuk ngelamar juga dibatasi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/testi/sukma.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Sukma Jenny</h2>
                      <p class="card-text text-center">UC Virtual Career Expo
                        memperlihatkan saya pada
                        informasi-informasi terkait karir
                        dan hal-hal yang meliputinya.
                        Berbagai korporasi yang terlibat
                        cukup representatif lintas bidang
                        dan orientasi. Tidak sebatas
                        informasi, tetapi tautan yang
                        disediakan Uc Career Expo dirasa
                        dapat mengkatalisasi pergerakan
                        dari rekan-rekan yang sedang
                        mempersiapkan karirnya. Apresiasi
                        tinggi bagi panitia yang telah
                        menyusun acara dengan begitu
                        apik, terstruktur, dan tidak
                        prematur.
                        </p>
                    </div>
                </div>
            </div>
          </div>            
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
          </div>  
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="" style="width: 100%;">
                    <img src="img/dummy.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title text-center">Nama</h2>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
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
  <div id="carouselExampleControls2" class="carousel carousel-dark slide" data-bs-ride="carousel" style="width: 90%">
    <div class="d-flex justify-content-center">
      <div class="carousel-inner" style="width: 80%">            
        <div class="carousel-item active">        
          <div class="" style="width: 100%;">
            <img src="img/dummy.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center">Nama</h2>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>            
        </div>
        <div class="carousel-item">
          <div class="" style="width: 100%;">
            <img src="img/dummy.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center">Nama</h2>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>  
        </div>
        <div class="carousel-item">
          <div class="" style="width: 100%;">
            <img src="img/dummy.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center">Nama</h2>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>   
        </div>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
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
            <div class="row">
              <div class="col">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
              </div>
              <div class="col">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
              </div>
              <div class="col">
                <img src="img/dummy.svg" alt="" style="width: 18rem;">
              </div>
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