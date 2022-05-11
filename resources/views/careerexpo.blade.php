@extends('layout.main')

@section('title', 'Career Expo - UC Virtual Career Expo')

@section('content')
<div style="z-index: -1">
  <img src="{{ asset('img/hiasan/assetkiri.svg') }}" alt="" class="assetkiri">
  <img src="{{ asset('img/hiasan/assetkanan.svg') }}" alt="" class="assetkanan">  
</div>

<h1 class="text-center my-5 mx-5">VIRTUAL CAREER EXPO 2.0</h1>

<div class="d-flex justify-content-center my-5">
    <a id="btnday1" class="btn border border-dark" style="background-color: #FF6E00">Day 1</a>
    <a id="btnday2" class="btn ms-4 border" style="background-color: #FF6E00">Day 2</a>
</div>

<div id="day1">
  <h1 class="text-center my-5">Jumat, 3 Juni 2022</h1>

  <div class="d-flex justify-content-center">
      <div class="widthpersen2">
          <h2>Rundown</h2>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Start</th>
                  <th scope="col">End</th>
                  <th scope="col">Durasi</th>
                  <th scope="col">Kegiatan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>09.30</td>
                  <td>10:00</td>
                  <td>30'</td>
                  <td>Open Gate</td>
                </tr>
                <tr>
                  <td>10:00</td>
                  <td>10:10</td>
                  <td>10'</td>
                  <td>Opening</td>
                </tr>
                <tr>
                  <td>10:10</td>
                  <td>10:15</td>
                  <td>5'</td>
                  <td>Doa Pembuka</td>
                </tr>
                <tr>
                  <td>10:15</td>
                  <td>12:15</td>
                  <td>120'</td>
                  <td>Webinar "Reach Your Dream Company"</td>
                </tr>
                <tr>
                  <td>12:15</td>
                  <td>13:00</td>
                  <td>45'</td>
                  <td>ISHOMA</td>
                </tr>
                <tr>
                  <td>13:00</td>
                  <td>13:05</td>
                  <td>5'</td>
                  <td>Opening Expo</td>
                </tr>
                <tr>
                  <td>13:05</td>
                  <td>13:10</td>
                  <td>5'</td>
                  <td>Kata Sambutan Ketua Acara</td>
                </tr>
                <tr>
                  <td>13:10</td>
                  <td>13:15</td>
                  <td>5'</td>
                  <td>Kata Sambutan Koordinator Corporate Entrepreneurship</td>
                </tr>
                <tr>
                  <td>13:15</td>
                  <td>13:20</td>
                  <td>5'</td>
                  <td>Kata Sambutan Mentri/Individu yang berkaitan</td>
                </tr>
                <tr>
                  <td>13:20</td>
                  <td>13:40</td>
                  <td>20'</td>
                  <td>Talk Session 1 : "How to Strike an Opportunity on Dream Company"</td>
                </tr>
                <tr>
                  <td>13:40</td>
                  <td>14:50</td>
                  <td>70'</td>
                  <td>Company Session</td>
                </tr>
                <tr>
                  <td>14:50</td>
                  <td>15:20</td>
                  <td>30'</td>
                  <td>Talk Session 2 : "CV ATS Friendly: Rahasia Bisa Dapat Panggilan Kerja?"</td>
                </tr>
                <tr>
                  <td>15:20</td>
                  <td>15:35</td>
                  <td>15'</td>
                  <td>BREAK</td>
                </tr>
                <tr>
                  <td>15:35</td>
                  <td>15:40</td>
                  <td>5'</td>
                  <td>MC Greetings Back</td>
                </tr>
                <tr>
                  <td>15:40</td>
                  <td>16:50</td>
                  <td>70'</td>
                  <td>Company Session</td>
                </tr>
                <tr>
                  <td>16:50</td>
                  <td>16:55</td>
                  <td>5'</td>
                  <td>Doa Penutup</td>
                </tr>
                <tr>
                  <td>16:55</td>
                  <td>17:00</td>
                  <td>5'</td>
                  <td>Closing</td>
                </tr>
                
              </tbody>
            </table>
            <a href="/alur" class="btn px-5 my-3 hoverableborder" style="background-color: #FF6E00">Daftar Sekarang</a>          
      </div>
  </div>
</div>

<div id="day2" class="visually-hidden">
  <h1 class="text-center my-5">Sabtu, 4 Juni 2022</h1>

  <div class="d-flex justify-content-center">
      <div class="widthpersen2">
          <h2>Rundown</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Durasi</th>
                <th scope="col">Kegiatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>09:30</td>
                <td>10:00</td>
                <td>30'</td>
                <td>Open Gate</td>
              </tr>
              <tr>
                <td>10:00</td>
                <td>10:10</td>
                <td>10'</td>
                <td>Opening</td>
              </tr>
              <tr>
                <td>10:10</td>
                <td>10:15</td>
                <td>5'</td>
                <td>Doa Pembuka</td>
              </tr>
              <tr>
                <td>10:15</td>
                <td>12:15</td>
                <td>120'</td>
                <td>Webinar "Step Up Your Career"</td>
              </tr>
              <tr>
                <td>12:15</td>
                <td>13:00</td>
                <td>45'</td>
                <td>ISHOMA</td>
              </tr>
              <tr>
                <td>13:00</td>
                <td>13:05</td>
                <td>5'</td>
                <td>Opening Expo</td>
              </tr>
              <tr>
                <td>13:05</td>
                <td>13:35</td>
                <td>30'</td>
                <td>Talk Session 3 : "How to Align Your Major for Internship and Find Your Career"</td>
              </tr>
              <tr>
                <td>13:35</td>
                <td>13:50</td>
                <td>15'</td>
                <td>Quiz Time</td>
              </tr>
              <tr>
                <td>13:50</td>
                <td>15:00</td>
                <td>70'</td>
                <td>Company Session</td>
              </tr>
              <tr>
                <td>15:00</td>
                <td>15:30</td>
                <td>30'</td>
                <td>Talk Session 4 : "Having an Analytical Thinking Skill"</td>
              </tr>
              <tr>
                <td>15:30</td>
                <td>15:45</td>
                <td>15'</td>
                <td>BREAK</td>
              </tr>
              <tr>
                <td>15:45</td>
                <td>15:50</td>
                <td>5'</td>
                <td>MC Greetings Back</td>
              </tr>
              <tr>
                <td>15:50</td>
                <td>16:50</td>
                <td>60'</td>
                <td>Company Session</td>
              </tr>
              <tr>
                <td>16:50</td>
                <td>16:55</td>
                <td>5'</td>
                <td>Doa Penutup</td>
              </tr>
              <tr>
                <td>16:55</td>
                <td>17:00</td>
                <td>5'</td>
                <td>Closing</td>
              </tr>
              
            </tbody>
          </table>
            <a href="/alur" class="btn px-5 my-3 hoverableborder" style="background-color: #FF6E00">Daftar Sekarang</a>          
      </div>
  </div>
</div>

@endsection