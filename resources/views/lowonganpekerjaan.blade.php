@extends('layout.main')

@section('title', 'Sponsors - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">JOB VACANCY</h1>
<div id="myBtnContainer" class="d-flex justify-content-center">
  <a class="btn mx-2 px-2 rounded active" style="background-color: #FF6E00" onclick="filterSelection('all')"> Show all</a>
  <a class="btn mx-2 px-2 rounded" style="background-color: #FF6E00" onclick="filterSelection('Full-time')"> Full-time</a>
  <a class="btn mx-2 px-2 rounded" style="background-color: #FF6E00" onclick="filterSelection('Part-time')"> Animals</a>
  <a class="btn mx-2 px-2 rounded" style="background-color: #FF6E00" onclick="filterSelection('fruits')"> Fruits</a>
  <a class="btn mx-2 px-2 rounded" style="background-color: #FF6E00" onclick="filterSelection('colors')"> Colors</a>
</div>
<div class="row p-5 mx-5">
    @foreach ($lowongan as $item)
        <div class="col-md-4 filterDiv {{$item->bentuk_pekerjaan}}">
            <div class="p-5 rounded text-center mx-2" style="background-color: #FFF351">
                <h2 class="py-2">{{$item->nama_lowongan}}</h2>
                <p class="pb-3">{{$item->perusahaan->nama_perusahaan}}</p>
                <div class="row">
                    <a href="#" class="btn px-2 rounded col mx-2" style="background-color: #ffffff">Daftar</a>
                    <a href="#" class="btn px-2 rounded col mx-2" style="background-color: #ffffff">Persyaratan</a>
                </div>
            </div>
        </div>
    @endforeach
<div>
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
</script>
@endpush