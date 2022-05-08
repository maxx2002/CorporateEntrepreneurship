@extends('layout.main')

@section('title', 'Gallery - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
    <img src="{{ asset('img/hiasan/kanan.svg') }}" alt="" class="samping1">
    <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
    <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<h1 class="text-center my-5">GALLERY</h1>
<div class="d-flex justify-content-center">
    <iframe src="https://drive.google.com/file/d/1M-fehIcbdrbdpKeXGrwyvU0vzLmw-OJy/preview" class="videogallery" allow="autoplay"></iframe>
</div>

<div class="blockhidden">
    <div class="d-flex justify-content-center mt-5">
        <div class="row widthpersen">
            <div class="col">
              <img src="img/dummy.svg" alt="" style="width: 100%;">
            </div>
            <div class="col">
              <img src="img/dummy.svg" alt="" style="width: 100%;">
            </div>
            <div class="col">
              <img src="img/dummy.svg" alt="" style="width: 100%;">
            </div>
        </div>
    </div> 
</div>

<div class="hiddenblock">
    <div class="d-flex justify-content-center mt-3">
        <img src="img/dummy.svg" alt="" class="imggallery">
    </div> 
</div>

@endsection