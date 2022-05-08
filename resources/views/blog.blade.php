@extends('layout.main')

@section('title', 'Blog - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
  <img src="{{ asset('img/hiasan/kanan.svg') }}" alt="" class="samping1">
  <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
  <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<h1 class="text-center mt-5">BLOG</h1>

<div class="d-flex justify-content-center">
  <div class="row">
    <div class="col">
      <div class="card cardblog mx-auto mt-5">
        <img src="https://static.wixstatic.com/media/325aa0_9f2f7da218a74084a3f12d25db292eb3~mv2.jpg/v1/fill/w_556,h_371,fp_0.50_0.50,q_90,enc_auto/325aa0_9f2f7da218a74084a3f12d25db292eb3~mv2.jpg" class="w-100" alt="...">
        <div class="card-body">
          <div class="d-flex">
            <img src="img/logouc.png" alt="" style="width: 50px; height: 50px">
            <p class="ms-3">Corporate Entrepreneurship <br> May 14, 2021</p>
          </div>
          <h2 class="card-title fs-5">5 Hal Yang Dinilai HRD Saat Interview</h2>
          <p class="card-text">Kamu sudah pernah melamar kerja dimana-mana tetapi gagal terus? Kamu tidak tau kesalahan kamu dimana saat melakukan interview? Mungkin...</p>
          <a href="/blog/1" class="btn w-100" style="background-color: #FF6E00">Lihat Artikel</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card cardblog mx-auto mt-5">
        <img src="https://static.wixstatic.com/media/325aa0_a5e7bb066e9147d1800ce26367a03ae5~mv2.jpg/v1/fill/w_925,h_617,al_c,q_90/325aa0_a5e7bb066e9147d1800ce26367a03ae5~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="d-flex">
            <img src="img/logouc.png" alt="" style="width: 50px; height: 50px">
            <p class="ms-3">Corporate Entrepreneurship <br> May 14, 2021</p>
          </div>
          <h2 class="card-title fs-5">4 Tips Mencari Magang Buat Fresh Graduate & Mahasiswa</h2>
          <p class="card-text">Kamu fresh graduate? mahasiswa tingkat akhir? pasti kamu sedang mencari-cari program kerja magang. Buat kamu mahasiswa tingkat akhir...</p>
          <br><a href="/blog/2" class="btn w-100" style="background-color: #FF6E00">Lihat Artikel</a>
        </div>
      </div>
    </div>
  </div>  
</div>

<div class="d-flex justify-content-center">
  <div class="row">
    <div class="col">
      <div class="card cardblog mx-auto mt-5">
        <img src="https://static.wixstatic.com/media/325aa0_08c335379dbf4de991c5428b3d377413~mv2.png/v1/fill/w_750,h_500,al_c,q_90/325aa0_08c335379dbf4de991c5428b3d377413~mv2.webp" class="card-img-top w-100" alt="...">
        <div class="card-body">
          <div class="d-flex">
            <img src="img/logouc.png" alt="" style="width: 50px; height: 50px">
            <p class="ms-3">Corporate Entrepreneurship <br> May 14, 2021</p>
          </div>
          <h2 class="card-title fs-5">Cara Membuat Curriculum Vitae (CV) Yang Baik dan Benar</h2>
          <p class="card-text">Banyak sekali perusahaan menemukan calon kandidat yang menulis riwayat hidup atau curriculum vitae (CV) yang salah saat melakukan...</p>
          <br><a href="/blog/3" class="btn w-100" style="background-color: #FF6E00">Lihat Artikel</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card cardblog mx-auto mt-5">
        <img src="https://static.wixstatic.com/media/325aa0_ea9fdd8319a346489565f1daf14a14a1~mv2.jpg/v1/fill/w_925,h_617,al_c,q_90/325aa0_ea9fdd8319a346489565f1daf14a14a1~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="d-flex">
            <img src="img/logouc.png" alt="" style="width: 50px; height: 50px">
            <p class="ms-3">Corporate Entrepreneurship <br> May 14, 2021</p>
          </div>
          <h2 class="card-title fs-5">7 Keterampilan Yang Harus Dimiliki Oleh Seorang Karyawan Perusahaan</h2>
          <p class="card-text">Karyawan harus memiliki keterampilan yang baik dalam bekerja. Keterampilan yang kompeten harus dimiliki oleh setiap karywan untuk karir...</p>
          <a href="/blog/4" class="btn w-100" style="background-color: #FF6E00">Lihat Artikel</a>
        </div>
      </div>
    </div>
  </div>  
</div>


@endsection