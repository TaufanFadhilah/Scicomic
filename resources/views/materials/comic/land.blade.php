<div class="row">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">
      @auth
        <div class="hide-on-med-and-down">
          <iframe src = "/js/ViewerJS/#../../comic/komik3.pdf" width='900' height='1000' allowfullscreen webkitallowfullscreen></iframe>
        </div>
        <div class="hide-on-large-only">
          <iframe src = "/js/ViewerJS/#../../comic/komik3.pdf" width='200' height='1000' allowfullscreen webkitallowfullscreen></iframe>
        </div>
      @else
        <a href="{{route('login')}}">Maaf, anda harus login terlebih dahulu</a>
      @endauth
    </div>
  </div>
</div>
</div>
