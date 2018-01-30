<!DOCTYPE html>
  <html lang="{{ app()->getLocale() }}">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name') }}</title>
      <!--Let browser know website is optimized for mobile-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      @stack('css')
    </head>
    <body class="grey lighten-3">
      @include('layouts.navbar')
      @yield('content')
      <footer class="page-footer cyan">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Scicomic</h5>
              <p class="grey-text text-lighten-4">Tagline</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            © 2018 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">About Developer</a>
          </div>
        </div>
      </footer>
      <!--Import jQuery before materialize.js-->
      {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/hammer.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/jquery.easing.1.4.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/jquery.hammer.js')}}"></script>
      <script type="text/javascript">
        $( document ).ready(function(){
          $(".button-collapse").sideNav();
        })
      </script>
      @stack('js')
    </body>
  </html>
