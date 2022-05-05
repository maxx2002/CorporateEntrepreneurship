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
<div class="row p-5 mx-5">
    @foreach ($lowongan as $item)
        <div class="col-md-4">
            <div class="p-5 rounded text-center mx-2 my-5" style="background-color: #FFF351">
                <h2 class="py-2">{{$item->nama_lowongan}}</h2>
                <p class="pb-3">{{$item->perusahaan->nama_perusahaan}}</p>
                <div class="row">
                    <a href="#" class="btn px-2 rounded col mx-2 hoverableborder" style="background-color: #ffffff">Daftar</a>
                    <a href="#" id="setmodal-persyaratan" class="btn px-2 rounded col mx-2 hoverableborder" data-toggle="modal" data-target="#modal-persyaratan" style="background-color: #ffffff"
                    data-namalowongan="<?=$item->nama_lowongan?>"
                    data-jurusan="<?=$item->jurusan_dibutuhkan?>"
                    data-bentukpekerjaan="<?=$item->bentuk_pekerjaan?>"
                    data-jobdesk="<?=$item->job_desk?>"
                    data-requirement="<?=$item->requirement?>"
                    data-idlowongan="<?=$item->id?>">Persyaratan</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div id="modal-persyaratan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFF4DD">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">PERSYARATAN</h5>
        <p class="h5">(<span id="bentuk_pekerjaan"></span>)</p>
        <img class="img-fluid close zoom" width="20" data-dismiss="modal" aria-label="Close" src="/img/closebtn.png"/>
      </div>
      <div class="modal-body">
        <div class="py-2">
        <h2 class="h5 d-inline">Lowongan: </h2>
        <p class="d-inline" id="nama_lowongan"></p>
        </div>
        <div class="py-2">
        <h2 class="h5 d-inline">Major: </h2>
        <p class="d-inline" id="jurusan_dibutuhkan"></p>
        </div>
        <div class="py-2">
        <h2 class="h5">Job Desk / Responsibilities: </h2>
        <p id="job_desk"></p>
        
        </div>
        <div class="py-2">
        <h2 class="h5">Requirement: </h2>
        <p id="requirement"></p>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
  $(document).on('click', '#setmodal-persyaratan', function(){
    var nama_lowongan = $(this).data('namalowongan');
    var jurusan_dibutuhkan = $(this).data('jurusan');
    var bentuk_pekerjaan = $(this).data('bentukpekerjaan');
    var job_desk = $(this).data('jobdesk');
    var requirement = $(this).data('requirement');
    $('#nama_lowongan').html(nama_lowongan);
    $('#jurusan_dibutuhkan').html(jurusan_dibutuhkan);
    $('#bentuk_pekerjaan').html(bentuk_pekerjaan);
    $('#job_desk').html(job_desk);
    $('#requirement').html(requirement);
  })
})
</script>
@endpush