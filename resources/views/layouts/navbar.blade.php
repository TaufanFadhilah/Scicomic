<nav>
  <div class="nav-wrapper cyan">
    <a href="#!" class="brand-logo">{{ config('app.name') }}</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('kikd')}}">KI & KD</a></li>
      <li><a href="{{route('objective')}}">Tujuan Pembelajaran</a></li>
      <li><a href="{{route('materials')}}">Materi Pembelajaran</a></li>
      <li><a href="sass.html">Evaluasi</a></li>
      <li><a href="{{route('about')}}">Tentang Situs</a></li>
      <li><a href="{{route('profile')}}">Profil</a></li>
      <li><a href="{{route('login')}}">Login</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      <li><a href="mobile.html">Mobile</a></li>
    </ul>
  </div>
</nav>
