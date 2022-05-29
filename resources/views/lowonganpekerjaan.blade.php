@extends('layout.main')

@section('title', 'Job Vacancy - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">JOB VACANCY</h1>
<div id="myBtnContainer" class="row mx-0 row-cols-auto justify-content-center">
  <a class="btn m-2 px-2 rounded active hoverableborder col" style="background-color: #FF6E00" onclick="filterSelection('all')"> Show all</a>
  <a class="btn m-2 px-2 rounded hoverableborder col" style="background-color: #FF6E00" onclick="filterSelection('Full-time')"> Full-time</a>
  <a class="btn m-2 px-2 rounded hoverableborder col" style="background-color: #FF6E00" onclick="filterSelection('Part-time')"> Part-time</a>
  <a class="btn m-2 px-2 rounded hoverableborder col" style="background-color: #FF6E00" onclick="filterSelection('Internship')"> Internship</a>
  <a class="btn m-2 px-2 rounded hoverableborder col" style="background-color: #FF6E00" onclick="filterSelection('Freelance')"> Freelance</a>
</div>
<div class="row mx-0 p-lg-5 mx-lg-5 p-5">
    @foreach ($lowongan as $item)
        <div class="col-lg-4 col-md-6 filterDiv {{$item->bentuk_pekerjaan}}">
            <div class="p-5 rounded text-center mx-2 my-5" style="background-color: #FFF351">
            <div class="mb-4">
              <a href="/companylist/{{$item->perusahaan->id_perusahaan}}">
                <img src="{{$item->perusahaan->logo_path}}" class="img-fluid hoverableborder"/>
              </a>
            </div>  
              <h2 class="py-2">{{$item->nama_lowongan}}</h2>
                <p class="pb-3">{{$item->perusahaan->nama_perusahaan}}</p>
                <div class="row justify-content-center">
                    <a href="#" class="btn px-2 rounded col m-2 hoverableborder" style="background-color: #ffffff">Daftar</a>
                    <a href="#" id="setmodal-persyaratan" class="btn px-2 rounded col m-2 hoverableborder" data-toggle="modal" data-target="#modal-persyaratan" style="background-color: #ffffff"
                    data-namalowongan="<?=$item->nama_lowongan?>"
                    data-daerah="<?=$item->daerah_penempatan?>"
                    data-bentukpekerjaan="<?=$item->bentuk_pekerjaan?>"
                    data-jobdesk="{!!$item->job_desk!!}"
                    data-requirement="<?=$item->requirement?>">Persyaratan</a>
                </div>
            </div>
        </div>

    @endforeach
</div>
  
<div id="modal-persyaratan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFF4DD">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">PERSYARATAN</h1>
        
        <img class="img-fluid close zoom" width="20" data-dismiss="modal" aria-label="Close" src="img/closebtn.png"/>
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
@endsection
@push('scripts')
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "showfilter");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "showfilter");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

$(document).ready(function(){
  $(document).on('click', '#setmodal-persyaratan', function(){
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

</script>
@endpush