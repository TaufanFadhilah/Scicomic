@extends('layouts.app')
@section('content')
<div class="container full-height">
  <div class="row" style="margin-top: 20px">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#inti">Kompetensi Inti</a></li>
        <li class="tab col s3"><a href="#dasar">Kompetensi Dasar</a></li>
        <li class="tab col s3"><a href="#indikator">Indikator</a></li>
      </ul>
    </div>
    <div id="inti" class="col s12 l12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content">
              <p>Isi dari kompetensi inti</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="dasar" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content">
              <p>Isi dari kompetensi dasar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="indikator" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content">
              <p>Isi dari indikator</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
    $(document).ready(function(){
     $('ul.tabs').tabs();
    });
  </script>
@endpush
