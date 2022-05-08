@extends('layout.main')

@section('title', 'Scholarship Vacancy - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">SCHOLARSHIP VACANCY</h1>
<div class="row mx-0 p-lg-5 mx-lg-5 p-5">
    @foreach ($beasiswa as $scholarship)
        <div class="col-lg-4 col-md-6">
            <div class="p-5 rounded text-center mx-2 my-5" style="background-color: #FFF351">
            <div class="mb-4">
              <a href="/companylist/{{$scholarship->perusahaan->id_perusahaan}}">
                <img src="{{$scholarship->perusahaan->logo_path}}" class="img-fluid hoverableborder"/>
              </a>
            </div>
                <h2 class="py-2">{{$scholarship->nama_beasiswa}}</h2>
                <p class="pb-3">{{$scholarship->jurusan_dibutuhkan}}</p>
                <div class="row justify-content-center">
                    <a href="#" class="btn px-2 rounded col m-2 hoverableborder" style="background-color: #ffffff">Daftar</a>
                    <a href="#" id="setmodal-persyaratan" class="btn px-2 rounded col m-2 hoverableborder" data-toggle="modal" data-target="#modal-persyaratan" style="background-color: #ffffff"
                    data-namalowongan="<?=$scholarship->nama_beasiswa?>"
                    data-jurusan="<?=$scholarship->jurusan_dibutuhkan?>"
                    data-requirement="<?=$scholarship->requirement?>">Persyaratan</a>
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
        
        <img class="img-fluid close zoom" width="20" data-dismiss="modal" aria-label="Close" src="/img/closebtn.png"/>
      </div>
      <div class="modal-body">
        <div class="py-2">
        <h2 class="h5 d-inline">Nama Beasiswa: </h2>
        <p class="d-inline" id="nama_beasiswa"></p>
        </div>
        <div class="py-2">
        <h2 class="h5 d-inline">Major: </h2>
        <p class="d-inline" id="jurusan_dibutuhkan"></p>
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
    var nama_beasiswa = $(this).data('namalowongan');
    var jurusan_dibutuhkan = $(this).data('jurusan');
    var requirement = $(this).data('requirement');
    $('#nama_beasiswa').html(nama_beasiswa);
    $('#jurusan_dibutuhkan').html(jurusan_dibutuhkan);
    $('#requirement').html(requirement);
  })
})
</script>
@endpush