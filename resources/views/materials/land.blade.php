@extends('layouts.app')
@push('css')
  <style media="screen">
  .tabs {
   display:-webkit-flex;
   display: -ms-flexbox;
   display: flex
  }
  </style>
@endpush
@section('content')
<div class="container" style="margin-top: 20px">
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Pendahuluan</a></li>
        <li class="tab col s3"><a href="#test2">Petunjuk</a></li>
        <li class="tab col s3"><a href="#test3">Komik</a></li>
        <li class="tab col s3"><a href="#test4">Glossarium</a></li>
        <li class="tab col s3"><a href="#test5">Daftar Pustaka</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      @include('materials.preliminary.land')
    </div>
    <div id="test2" class="col s12">
      @include('materials.instruction.land')
    </div>
    <div id="test3" class="col s12">
      @include('materials.comic.land')
    </div>
    <div id="test4" class="col s12">
      @include('materials.comic.land')
    </div>
    <div id="test5" class="col s12">
      @include('materials.bibliography.land')
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
