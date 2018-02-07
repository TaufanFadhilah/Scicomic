@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Selamat Datang {{Auth::user()->name}}</span>
            <p>Terima kasih karena telah bergabung dengan website ini. Selamat belajar</p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
