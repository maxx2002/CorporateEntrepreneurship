@extends('layout.main')

@section('title', 'Blog - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">BLOG</h1>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
        <img src="img/dummy.svg" class="w-100" alt="...">
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
    <div class="card ms-5" style="width: 25rem;">
        <img src="img/dummy.svg" class="card-img-top" alt="...">
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
<div class="d-flex justify-content-center my-5">
    <div class="card" style="width: 25rem;">
        <img src="img/dummy.svg" class="card-img-top" alt="...">
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
    <div class="card ms-5" style="width: 25rem;">
        <img src="img/dummy.svg" class="card-img-top" alt="...">
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

@endsection