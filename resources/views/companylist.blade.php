@extends('layout.main')

@section('title', 'Company List - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">COMPANY LIST</h1>
<div class="row mx-0 p-lg-5 mx-lg-5 p-5">
    @foreach ($perusahaan as $company)
    <div class="col-lg-4 col-md-6">
        <div class="p-2 rounded text-center mx-2 my-5" style="width: 100%;">
            <div class="d-flex align-items-center justify-content-center" style="height: 200px">
                <img class="img-fluid mb-5 mh-100" src="{{$company->logo_path}}" />
            </div>            
            <div class="card-body">
                <h2 class="py-2 mb-4">{{$company->nama_perusahaan}}</h2>
                <a href="companylist/{{$company->id_perusahaan}}" class="btn px-2 rounded col mx-2 hoverableborder" style="background-color: #FF6E00">JOIN US</a>
            </div>
        </div>
        {{-- <div class="p-2 rounded text-center mx-2 my-5">
            <div>
                <img class="img-fluid mb-5" src="{{$company->logo_path}}" />
            </div>
            <h2 class="py-2 mb-4">{{$company->nama_perusahaan}}</h2>
            <a href="companylist/{{$company->id_perusahaan}}" class="btn px-2 rounded col mx-2 hoverableborder" style="background-color: #FF6E00">JOIN US</a>
        </div> --}}

    </div>
    @endforeach
</div>
@endsection