<nav>
  <div class="nav-wrapper cyan">
    <a href="#!" class="brand-logo">{{ config('app.name') }}</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('kikd')}}">KI & KD</a></li>
      <li><a href="{{route('objective')}}">Tujuan Pembelajaran</a></li>
      <li><a href="{{route('materials')}}">Materi Pembelajaran</a></li>
      <li><a href="evaluasi.html">Evaluasi</a></li>
      <li><a href="{{route('about')}}">Tentang Situs</a></li>
      <li><a href="{{route('profile')}}">Profil</a></li>
      @auth
        <li>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();                                                 document.getElementById('logout-form').submit();">
              Logout
          </a>
        </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
            {{ csrf_field() }}
        </form>
      @else
        <li><a href="{{route('login')}}">Login</a></li>
      @endauth
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('kikd')}}">KI & KD</a></li>
      <li><a href="{{route('objective')}}">Tujuan Pembelajaran</a></li>
      <li><a href="{{route('materials')}}">Materi Pembelajaran</a></li>
      <li><a href="evaluasi.html">Evaluasi</a></li>
      <li><a href="{{route('about')}}">Tentang Situs</a></li>
      <li><a href="{{route('profile')}}">Profil</a></li>
      @auth
        <li>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();                                                 document.getElementById('logout-form').submit();">
              Logout
          </a>
        </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
            {{ csrf_field() }}
        </form>
      @else
        <li><a href="{{route('login')}}">Login</a></li>
      @endauth
    </ul>
  </div>
</nav>
