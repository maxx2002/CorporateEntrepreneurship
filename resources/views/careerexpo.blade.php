@extends('layout.main')

@section('title', 'Career Expo - UC Virtual Career Expo')

@section('content')
<h1 class="text-center my-5">VIRTUAL CAREER EXPO 2.0</h1>

<div class="d-flex justify-content-center my-5">
    <a href="" class="btn" style="background-color: #FF6E00">Day 1</a>
    <a href="" class="btn ms-4" style="background-color: #FF6E00">Day 2</a>
</div>

<h1 class="text-center my-5">Hari, Tanggal</h1>

<div class="d-flex justify-content-center">
    <div style="width: 70%">
        <h2>Rundown</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Waktu</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Media</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry the Bird</td>
                <td>Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <a href="" class="btn px-5 my-3" style="background-color: #FF6E00">Daftar Sekarang</a>          
    </div>
</div>

@endsection