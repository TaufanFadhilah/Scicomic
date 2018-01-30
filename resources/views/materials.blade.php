@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col l12">
      <h4 class="cyan-text">Materi Pembelajaran</h4>
    </div>
    <div class="col l12 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col l4 s12">
              <img src="{{asset('img/air.jpg')}}" class="responsive-img">
            </div>
            <div class="col l8 s12">
              <h5 class="cyan-text">Pencemaran Air</h5> <br>
              <p>
                TEXT
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col l12 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col l4 s12">
              <img src="{{asset('img/udara.jpg')}}" class="responsive-img">
            </div>
            <div class="col l8 s12">
              <h5 class="cyan-text">Pencemaran udara</h5> <br>
              <p>
                TEXT
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col l12 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col l4 s12">
              <img src="{{asset('img/tanah.jpeg')}}" class="responsive-img">
            </div>
            <div class="col l8 s12">
              <h5 class="cyan-text">Pencemaran Tanah</h5> <br>
              <p>
                TEXT
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
