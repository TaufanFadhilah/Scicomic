<div class="row">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">
      @auth
        
      @else
        <a href="{{route('login')}}">Maaf, anda harus login terlebih dahulu</a>
      @endauth
    </div>
  </div>
</div>
</div>
