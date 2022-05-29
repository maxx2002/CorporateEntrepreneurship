@extends('layout.main')

@section('title', 'Company Detail - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">{{$perusahaan->nama_perusahaan}}</h1>
<div class="d-flex justify-content-center mt-5">
    <div class="mb-3" style="max-width: 60%;">
        <div class="row g-3">
          <div class="col-md-4 pt-3">
            <img src="/{{$perusahaan->logo_path}}" class="img-fluid rounded-start" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title">Deskripsi Singkat</h2>
              <p class="card-text">{{$perusahaan->deskripsi_singkat}}</p>
            </div>
            <div class="card-body">
              <h2 class="card-title">Visi & Misi</h2>
              <p class="card-text">{{$perusahaan->visi_misi}}</p>
            </div>
            <div class="card-body">
              <h2 class="card-title">Website Resmi</h2>
              <p class="card-text">{{$perusahaan->website_resmi}}</p>
            </div>
          </div>
        </div>
    </div>
    
</div>
<div class="row mx-0 p-lg-5 mx-lg-5 p-5">
    @foreach ($lowongan as $item)
        <div class="col-lg-4 col-md-6">
            <div class="p-5 rounded text-center mx-2 my-5" style="background-color: #FFF351">
                <h2 class="py-2">{{$item->nama_lowongan}}</h2>
                <p class="pb-3">{{$item->perusahaan->nama_perusahaan}}</p>
                <div class="row justify-content-center">
                    <a href="#" class="btn px-2 rounded col m-2 hoverableborder" style="background-color: #ffffff">Daftar</a>
                    <a href="#" id="setmodal-persyaratan-lowongan" class="btn px-2 rounded col m-2 hoverableborder" data-toggle="modal" data-target="#modal-persyaratan-lowongan" style="background-color: #ffffff"
                    data-namalowongan="<?=$item->nama_lowongan?>"
                    data-daerah="<?=$item->daerah_penempatan?>"
                    data-bentukpekerjaan="<?=$item->bentuk_pekerjaan?>"
                    data-jobdesk="<?=$item->job_desk?>"
                    data-requirement="<?=$item->requirement?>"
                    data-idlowongan="<?=$item->id?>">Persyaratan</a>
                </div>
            </div>
        </div>
    @endforeach
    @foreach ($beasiswa as $scholarship)
    <div class="col-lg-4 col-md-6">
            <div class="p-5 rounded text-center mx-2 my-5" style="background-color: #FFF351">
            
                <h2 class="py-2">{{$scholarship->nama_beasiswa}}</h2>
                <p class="pb-3">{{$scholarship->jurusan_dibutuhkan}}</p>
                <div class="row justify-content-center">
                    <a href="#" class="btn px-2 rounded col m-2 hoverableborder" style="background-color: #ffffff">Daftar</a>
                    <a href="#" id="setmodal-persyaratan-beasiswa" class="btn px-2 rounded col m-2 hoverableborder" data-toggle="modal" data-target="#modal-persyaratan-beasiswa" style="background-color: #ffffff"
                    data-namabeasiswa="<?=$scholarship->nama_beasiswa?>"
                    data-jurusanbeasiswa="<?=$scholarship->jurusan_dibutuhkan?>"
                    data-requirementbeasiswa="<?=$scholarship->requirement?>">Persyaratan</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div id="modal-persyaratan-lowongan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFF4DD">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">PERSYARATAN</h5>
        
        <img class="img-fluid close zoom" width="20" data-dismiss="modal" aria-label="Close" src="/img/closebtn.png"/>
      </div>
      <div class="modal-body">
        <div class="py-2">
        <h2 class="h5 d-inline">Lowongan: </h2>
        <p class="d-inline" id="nama_lowongan"></p>
        <p class="d-inline">(<span id="bentuk_pekerjaan"></span>)</p>
        </div>
        
        <div class="py-2">
        <h2 class="h5">Deskripsi Pekerjaan: </h2>
        <p id="job_desk"></p>
        
        </div>
        <div class="py-2">
        <h2 class="h5">Kriteria/Requirements: </h2>
        <p id="requirement"></p>
        </div>
        <div class="py-2">
        <h2 class="h5 d-inline">Daerah Penempatan: </h2>
        <p class="d-inline" id="daerah_penempatan"></p>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div id="modal-persyaratan-beasiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFF4DD">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">PERSYARATAN</h5>
        
        <img class="img-fluid close zoom" width="20" data-dismiss="modal" aria-label="Close" src="/img/closebtn.png"/>
      </div>
      <div class="modal-body">
        <div class="py-2">
        <h2 class="h5 d-inline">Nama Beasiswa: </h2>
        <p class="d-inline" id="nama_beasiswa"></p>
        </div>
        <div class="py-2">
        <h2 class="h5 d-inline">Major: </h2>
        <p class="d-inline" id="jurusan_dibutuhkan_beasiswa"></p>
        </div>
        <div class="py-2">
        <h2 class="h5">Requirement: </h2>
        <p id="requirement_beasiswa"></p>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
  $(document).on('click', '#setmodal-persyaratan-lowongan', function(){
    var nama_lowongan = $(this).data('namalowongan');
    var daerah_penempatan = $(this).data('daerah');
    var bentuk_pekerjaan = $(this).data('bentukpekerjaan');
    var job_desk = $(this).data('jobdesk');
    var requirement = $(this).data('requirement');
    $('#nama_lowongan').html(nama_lowongan);
    $('#daerah_penempatan').html(daerah_penempatan);
    $('#bentuk_pekerjaan').html(bentuk_pekerjaan);
    $('#job_desk').html(job_desk);
    $('#requirement').html(requirement);
  })
})
$(document).ready(function(){
  $(document).on('click', '#setmodal-persyaratan-beasiswa', function(){
    var nama_beasiswa = $(this).data('namabeasiswa');
    var jurusan_dibutuhkan_beasiswa = $(this).data('jurusanbeasiswa');
    var requirement_beasiswa = $(this).data('requirementbeasiswa');
    $('#nama_beasiswa').html(nama_beasiswa);
    $('#jurusan_dibutuhkan_beasiswa').html(jurusan_dibutuhkan_beasiswa);
    $('#requirement_beasiswa').html(requirement_beasiswa);
  })
})
</script>
@endpush