@extends('layout.main')

@section('title', 'Alur Pendaftaran Webinar - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">ALUR PENDAFTARAN WEBINAR</h1>
<div class="d-flex justify-content-center">
    <div style="width: 70%">
        <p>Peserta berkunjung pada link http://bit.ly/PendaftaranVirtualCareerExpoUC
            <br><br>
            Peserta mengisi pertanyaan-pertanyaan yang sudah tertera di dalam G-form. Jika peserta ingin mengikuti seluruh kegiatan Virtual Career Expo 2.0 (2 hari berturut-turut) maka dapat mencentang (checklist) Day 1 & Day 2 kemudian peserta mengklik “submit”.
            <br><br>
            Peserta memilih link untuk dapat bergabung dalam grup WhatsApp sesuai dengan hari yang telah dipilih oleh peserta (bila mendaftar dua hari maka dapat bergabung ke grup Day 1 sekaligus grup Day 2).
            <br><br>
            Informasi lebih lanjut akan diinformasikan oleh pihak penyelenggara di dalam grup Whatsapp (ID & password zoom, pengumuman, dll).</p>
        <a href="" class="btn px-3" style="background-color: #FF6E00">Daftar Sekarang</a>
        <h1 class="my-5 text-center">ALUR</h1>
        <div class="container">
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/web.svg') }}" alt="" style="height: 100px">
                </div>                
                <h2 class="text-center mt-3 fs-5">Berkunjung ke Website Pendaftaran</h2>
              </div>
              <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/form.svg') }}" alt="" style="height: 100px">
                </div>                
                <h2 class="text-center mt-3 fs-5">Mengisi Formulir Pendaftaran</h2>
              </div>
              <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/whatsapp.svg') }}" alt="" style="height: 100px">
                </div>                
                <h2 class="text-center mt-3 fs-5">Join Grup Whatsapp</h2>
              </div>
            </div>
          </div>
    </div>
    
</div>

@endsection