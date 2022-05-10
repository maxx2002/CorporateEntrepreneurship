<div class="d-flex justify-content-end mt-2 me-2">
    <img src="/img/logouc.png" alt="" class="logo me-2">
    <img src="/img/logoce.png" alt="" class="logo me-2">
    <img src="/img/logocareerexpo.png" alt="" class="logo">
</div>
<ul class="nav justify-content-center flexhidden">
    <li class="nav-item">
      <a class="nav-link text-dark fs-5" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Vacancy</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item text-dark fs-5" href="/companylist">Company List</a></li>
        <li><a class="dropdown-item text-dark fs-5" href="/jobvacancy">Job Vacancy</a></li>
        <li><a class="dropdown-item text-dark fs-5" href="/scholarship">Scholarship Vacancy</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Events</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item text-dark fs-5" href="/careerexpo">Virtual Career Expo 2.0</a></li>
        <li><a class="dropdown-item text-dark fs-5" href="/webinar">Webinar</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Collaborations</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item text-dark fs-5" href="/sponsor">Sponsors</a></li>
        <li><a class="dropdown-item text-dark fs-5" href="/mediapartner">Media Partners</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item text-dark fs-5" href="/about">Corporate Entrepreneurship</a></li>
        <li><a class="dropdown-item text-dark fs-5" href="/gallery">Gallery</a></li>
        <li><a class="dropdown-item text-dark fs-5" href="/blog">Blog</a></li>
      </ul>
    </li>
</ul>

<ul class="nav justify-content-center hiddenflex mt-3">
  <li class="nav-item">
    <a class="nav-link text-dark fs-6" aria-current="page" href="/">Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark fs-6" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Vacancy</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-dark fs-6" href="/companylist">Company List</a></li>
      <li><a class="dropdown-item text-dark fs-6" href="/jobvacancy">Job Vacancy</a></li>
      <li><a class="dropdown-item text-dark fs-6" href="/scholarship">Scholarship Vacancy</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark fs-6" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Events</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-dark fs-6" href="/careerexpo">Virtual Career Expo 2.0</a></li>
      <li><a class="dropdown-item text-dark fs-6" href="/webinar">Webinar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark fs-6" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Collaborations</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-dark fs-6" href="/sponsor">Sponsors</a></li>
      <li><a class="dropdown-item text-dark fs-6" href="/mediapartner">Media Partners</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark fs-6" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-dark fs-6" href="/about">Corporate Entrepreneurship</a></li>
      <li><a class="dropdown-item text-dark fs-6" href="/gallery">Gallery</a></li>
      <li><a class="dropdown-item text-dark fs-6" href="/blog">Blog</a></li>
    </ul>
  </li>
</ul> 

@push('scripts')
<script>
<script>
  $(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>
@endpush
