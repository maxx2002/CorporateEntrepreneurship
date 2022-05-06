@extends('layout.main')

@section('title', 'Webinar - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
    <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
    <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<h1 class="text-center my-5">WEBINAR <br> "FROM BOTTOM TO TOP"</h1>

{{-- <div class="d-flex justify-content-center">

</div> --}}

<div class="d-flex justify-content-center">
    <div class="h-100">
        <h2 class="text-center mb-3">Day 1</h2>
        <div class="" style="width: 25rem;">
            <div style="height: 27rem" class="d-flex align-items-center">
                <img src="img/Junarsyi.png" class="w-100" alt="...">
            </div>            
            <div class="card-body mt-2">
              <a href="/webinar/alur" class="btn w-100 hoverableborder" style="background-color: #FF6E00">Daftar</a>
            </div>
        </div>
    </div>
    
    <div class="ms-5">
        <h2 class="text-center mb-3">Day 2</h2>
        <div class="" style="width: 25rem;">
            <div style="height: 27rem" class="d-flex align-items-center">
                <img src="img/Irwan.png" class="w-100" alt="...">
            </div>            
            <div class="card-body mt-2">
              <a href="/webinar/alur" class="btn w-100 hoverableborder" style="background-color: #FF6E00">Daftar</a>
            </div>
        </div>
    </div>
</div>

@endsection