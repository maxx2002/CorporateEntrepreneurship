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
    <iframe src="https://drive.google.com/file/d/1M-fehIcbdrbdpKeXGrwyvU0vzLmw-OJy/preview" width="640" height="360" allow="autoplay"></iframe>
</div>


@endsection