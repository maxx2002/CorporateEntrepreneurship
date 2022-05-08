@extends('layout.main')

@section('title', 'Webinar - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
    <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
    <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<h1 class="text-center my-5">WEBINAR <br> "FROM BOTTOM TO TOP"</h1>

<div class="d-flex justify-content-center">
    <div class="row">
        <div class="col">
            <h2 class="text-center mb-md-3">Day 1</h2>
                <div class="d-flex justify-content-center">
                    <div class="webinarcard">
                        <div class="d-flex align-items-center gambarwebinar">
                            <img src="img/Junarsyi.png" class="w-100" alt="...">
                        </div>            
                        <div class="card-body">
                          <p class="text-center">Jumat, 3 Juni 2022 <br> 09.30 WIB - selesai</p>
                          <a href="/webinar/alur" class="btn w-100 hoverableborder mt-md-2" style="background-color: #FF6E00">Daftar</a>
                        </div>
                    </div>
                </div>                
        </div>
        <div class="col">
            <h2 class="text-center mb-md-3 mt-4 mt-md-0">Day 2</h2>
            <div class="d-flex justify-content-center">
                <div class="webinarcard">                
                    <div class="d-flex align-items-center gambarwebinar">
                        <img src="img/Irwan.png" class="w-100" alt="...">
                    </div>            
                    <div class="card-body">
                      <p class="text-center">Sabtu, 4 Juni 2022 <br> 09.30 WIB - selesai</p>
                      <a href="/webinar/alur" class="btn w-100 hoverableborder mt-md-2" style="background-color: #FF6E00">Daftar</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    
</div>

@endsection