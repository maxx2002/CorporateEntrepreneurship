@extends('layout.main')

@section('title', 'Webinar - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">WEBINAR FROM BOTTOM TO TOP</h1>
<div class="d-flex justify-content-center">
    <div>
        <h2 class="text-center mb-3">Day 1</h2>
        <div class="card" style="width: 25rem;">
            <img src="img/Junarsyi.png" class="w-100" alt="...">
            <div class="card-body">
              <h2 class="card-title fs-5">Reach Your Dream Company</h2>
              <p>Jumat, 3 Juni 2022 pukul 09.30 WIB - selesai <br> Speaker: Junar Asunyi - HR Content Creator</p>
              <a href="/webinar/alur" class="btn w-100" style="background-color: #FF6E00">Daftar</a>
            </div>
        </div>
    </div>
    
    <div class="ms-5">
        <h2 class="text-center mb-3">Day 2</h2>
        <div class="card" style="width: 25rem;">
            <img src="img/Irwan.png" class="w-100" alt="...">
            <div class="card-body">
              <h2 class="card-title fs-5">Step Up Your Career</h2>
              <p class="card-text">Sabtu, 4 Juni 2022 pukul 09.30 WIB - selesai <br>Speaker: Irwan Prasetyo - Senior Manager Finance Adidas US</p>
              <a href="/webinar/alur" class="btn w-100" style="background-color: #FF6E00">Daftar</a>
            </div>
        </div>
    </div>
</div>

@endsection