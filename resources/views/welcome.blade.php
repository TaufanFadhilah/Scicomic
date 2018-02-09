@extends('layouts.app')
@push('css')
  <style media="screen">
  .parallax-container {
      height: 600px;
    }
  .parallax-container2 {
      height: 300px;
    }
  </style>
@endpush
@section('content')
<div class="parallax-container" style="padding-top: 20%">
  <div class="parallax">
    <img src="{{asset('img/header.jpg')}}">
  </div>
  <div class="hide-on-small-only">
    <h1 class="cyan-text">SCICOMIC</h1>
    <h5 class="cyan-text">SELAMAT DATANG DI KOMIK WEB IPA</h5>
  </div>
  <div class="hide-on-med-and-up" style="margin-top: 50%">
    <h4 class="cyan-text">SCICOMIC</h4>
    <h6 class="cyan-text">SELAMAT DATANG DI KOMIK WEB IPA</h6>
  </div>
</div>
<div class="container-fluid white half-height">
  <div class="row" style="padding-top: 10%; padding-bottom: 10%">
    <div class="col l5 s12 center">
      <h3>Scicomic.web.id</h3>
    </div>
    <div class="col l7 s12">
      <p>
        Scicomic adalah media belajar IPA berupa komik <i>web</i> berisi rangkaian cerita bergambar yang memuat konten edukasi
dengan tulisan untuk memperjelas sajian gambar, dan diterbitkan melalui <i>web</i> dengan memanfaatkan jaringan internet.
Tema yang disajikan dalam Scicomic berkaitan dengan permasalahan lingkungan yang terjadi di lingkungan sekitar
kita. Scicomic dirancang dengan berorientasi pada pendekatan <i>problem solving</i>.
      </p>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{asset('intro_comic\1.jpg')}}" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Sungaiku yang Malang<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('material.water')}}">Lihat Selengkapnya</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Sungaiku yang Malang<i class="material-icons right"close></i></span>
          <p>
            Air merupakan sumber daya alam yang sangat penting bagi makhluk hidup. Dalam
  kehidupan sehari-hari, makhluk hidup selalu membutuhkan air, termasuk manusia. Manusia
  sangat membutuhkan air bersih dalam aktivitas sehari-hari, antara lain minum, mandi,
  mencuci, memasak, dan sebagainya. Akan tetapi air juga termasuk sumber daya alam yang
  paling terancam di dunia. Selain semakin meningkatnya ancaman kekeringan karena
  perubahan iklim, dimana sumber air di seluruh dunia menghadapi ancaman yang berpotensi
  kekeringan saat iklim kemarau, setiap tahunnya air juga menjadi semakin tercemar. Air yang
  tercemar dapat menjadi penyebab utama penyakit dan kematian makhluk hidup.
          </p>
        </div>
      </div>
    </div>
    <div class="col l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{asset('intro_comic\2.png')}}" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Ke Rumah Paman Hasan<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('material.air')}}">Lihat Selengkapnya</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Ke Rumah Paman Hasan<i class="material-icons right"close></i></span>
          <p>
            Udara merupakan salah satu faktor abiotik yang memengaruhi kehidupan makhluk
  hidup. Udara mengandung senyawa-senyawa berwujud gas, diantaranya adalah oksigen.
  Oksigen berperan dalam proses pembakaran senyawa di dalam tubuh organisme melalui
  pernapasan. Jika populasi makhluk hidup semakin meningkat, maka proses pembakaran pun
  semakin meningkat. Akibatnya, konsentrasi senyawa karbon di udara meningkat. Semakin
  meningkatnya populasi manusia juga menyebabkan kebutuhan akan tempat tinggal
  meningkat. Hal ini membuat pembukaan ladang atau hutan untuk pemenuhan permintaan
  tempat tinggal. Pembukaan ladang atau hutan yang biasanya dilakukan dengan pembakaran
  akan menghasilkan produk samping berupa senyawa karbon (CO 2 dan CO) yang akan
  dibuang ke udara. Pembukaan ladang atau hutan merupakan salah satu kegiatan yang dapat
  menimbulkan masalah lingkungan yang sangat menganggu aktivitas makhluk hidup di bumi
  karena dapat menyebabkan tercemarnya udara.
          </p>
        </div>
      </div>
    </div>
    <div class="col l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{asset('intro_comic\3.png')}}" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Sawahku Tak Lagi Subur<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('material.land')}}">Lihat Selengkapnya</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Sawahku Tak Lagi Subur<i class="material-icons right"close></i></span>
          <p>
            Pencemaran tanah dapat disebabkan oleh bahan kimia beracun, polutan atau
  kontaminan di dalam tanah pada konsentrasi yang cukup tinggi sehingga berisiko terhadap
  kelangsungan hidup tanaman, satwa liar, manusia, dan tentu saja, tanah itu sendiri. Salah satu
  kasus pencemaran tanah adalah pencemaran pada lahan pertanian. Penyebab pencemaran
  yang terjadi pada lahan pertanian digolongkan ke dalam: (1) kegiatan nonpertanian, yaitu
  industri dan pertambangan dan (2) kegiatan pertanian, yaitu penggunaan bahan-bahan
  agrokimia seperti pestisida, herbisida, dan pupuk yang kurang terkendali. Banyaknya industri
  industri atau pabrik tekstil yang dibangun di sekitar lahan pertanian dapat menyebabkan
  tercemarnya lahan sawah akibat limbah industri yang dibuang ke badan air atau sungai
  sumber pengairan sawah yang selanjutnya akan menyendap di dalam tanah.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="{{asset('img/header2.jpg')}}"></div>
</div>
<div class="section white">
  <div class="row container center">
    <p class="grey-text text-darken-3 lighten-3 flow-text"><i>Bersihkanlah sesuatu meskipun ia bukan tugas anda. kebersihan itu menenangkan jiwa.</i> </p>
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax();
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    });
  </script>
@endpush
