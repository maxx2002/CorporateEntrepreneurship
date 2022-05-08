@extends('layout.main')

@section('title', 'Blog - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
    <img src="{{ asset('img/hiasan/kanan.svg') }}" alt="" class="samping1">
    <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
    <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<h1 class="text-center mt-5 mb-3">5 Hal Yang Dinilai HRD Saat Interview</h1>
<div class="d-flex justify-content-center">
    <div class="widthpersen2">
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/logouc.png') }}" alt="" style="width: 40px; height: 40px">
            <p class="ms-3 mt-3">Corporate Entrepreneurship - May 14, 2021 - 1 min read</p>
        </div>
        <div class="d-flex justify-content-center my-3">
            <img class="widthpersen" src="https://static.wixstatic.com/media/325aa0_9f2f7da218a74084a3f12d25db292eb3~mv2.jpg/v1/fill/w_556,h_371,fp_0.50_0.50,q_90,enc_auto/325aa0_9f2f7da218a74084a3f12d25db292eb3~mv2.jpg" alt="">
        </div>
        <p>Kamu sudah pernah melamar kerja dimana-mana tetapi gagal terus? Kamu tidak tau kesalahan kamu dimana saat melakukan interview?  Mungkin kamu melakukan kesalahan yang tidak sengaja. Ada beberapa hal yang dinilai oleh HRD saat kamu wawancara / interview kerja. Berikut beberapa hal yang dinilai oleh HRD saat wawancara.</p>
        <br>
        <h2 class="fs-4">1. Kompetensi Calon Karyawan</h2>
        <p>Kompetensi seorang calon karyawan biasanya dilihat dari pendidikan yang ditempuh, pengalaman kerja, dan skill yang dimiliki. Apakah latar belakang pendidikan kamu & pengalaman kerja telah sesuai dengan kualifikasi yang menjadi persyaratan posisi kamu? Jika iya, maka kesempatan kamu akan menjadi lebih terbuka.</p>
        <h2 class="fs-4">2. Etika</h2>
        <p>Proses wawancara, sikap sopan dan ramah juga menjadi penilaian bagi HRD sendiri. Setiap wawancara pasti akan dilihat gerak-gerik yang dilakukan calon. Oleh karena itu, kamu harus menjaga perilaku dan sikap kamu pada saat proses wawancara yaa.</p>
        <h2 class="fs-4">3. Penampilan Diri</h2>
        <p>Penampilan diri adalah penilaian awal bagi seorang HRD. Dari penampilan dapat terlihat kamu orangnya seperti apa. Maka dari itu, gunakan pakaian yang pantas dan rapi agar kamu terlihat profesional. </p>
        <h2 class="fs-4">4. Komunikasi</h2>
        <p>Pasti saat wawancara kamu akan berbicara dengan pewawancara. Kamu harus memperhatikan gaya bicara kamu dengan mengatur intonasi, volume suara yang jelas dan yakin dengan apa yang kamu katakan kepada pewawancara. Jadi, kamu harus pastikan cara komunikasi kamu jelas & tegas. Sebelum melakukan wawancara cobalah berbicara didepan cermin dan latihan agar lancar.</p>
        <h2 class="fs-4">5. Pengalaman</h2>
        <p>Jika kamu memiliki pengalaman di bidang yang kamu daftarkan tersebut. Ceritakanlah pengalaman kamu sebelum kamu mendaftar di perusahaan tersebut. Jika sesuai dengan kualifikasi perusahaan maka kesempatan kamu diterima akan menjadi lebih besar. </p>
    </div>
</div>

@endsection