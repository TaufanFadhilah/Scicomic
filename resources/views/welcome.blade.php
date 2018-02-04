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
  <h1 class="cyan-text">SCICOMIC</h1>
  <h5 class="cyan-text">SELAMAT DATANG DI KOMIK WEB IPA</h5>
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
          <img class="activator" src="{{asset('img/air.png')}}" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Pencemaran Air<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('material.water')}}">Lihat Selengkapnya</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Pencemaran Air<i class="material-icons right"close></i></span>
          <p>
            Para pelaku pencemaran lingkungan di Pemalang akan ditindak secara tegas oleh aparat agar menjadi jera dan menghentikan kegiatannya yang merusak. Ketegasan ini disampaikan Bupati Pemalang H Junaedi usai melantik pengurus Forum Pemalang Sehat (FPS) di gedung Sasana Bakti Praja, akhir pekan lalu.
<br><br>
Menurut Junaedi, perkembangan suatu daerah menimbulkan konsekuensi logis permasalahan dalam bidang kesehatan dan lingkungan yang makin meningkat intensitasnya. Tingkat pencemaran yang semakin tinggi menyebabkan lingkungan semakin tidak nyaman dihuni. Dan kondisinya menjadi parah dengan rendahnya kesadaran masyarakat untuk berpola hidup bersih dan sehat.
<br><br>
Di Kabupaten Pemalang, meski belum sampai pada tingkat yang membahayakan, pencemaran mulai mengalami peningkatan. “Sehingga, sebelum semua terlambat ditangani kita harus bergerak cepat, harus melakukan upaya sistematis, strategis dan komprehensif denganmelibatkan komponen masyarakat maupun dunia usaha,” jelas H Junaedi.
<br><br>
Junaedi menegaskan, upaya yang ditempuh harus menyentuh dua aspek sekaligus, yakni pencegahan dan penindakan. Kesadaran masyarakat untuk hidup bersih dan sehat harus ditumbuhkembangkan.
<br><br>
“Sedangkan yang menyangkut aspek penindakan, Pemkab Pemalang bersama aparat keamanan akan menindak tegas pelaku pencemaran lingkungan,” pungkasnya.
          </p>
        </div>
      </div>
    </div>
    <div class="col l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{asset('img/udara.jpg')}}" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Pencemaran Udara<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('material.air')}}">Lihat Selengkapnya</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Pencemaran Udara<i class="material-icons right"close></i></span>
          <p>
            Asap kebakaran hutan lahan yang menyelimuti sebagian besar Kota Dumai, Provinsi Riau, kini telah masuk hingga ke rumah warga. Warga Dumai pun mengeluhkan asap yang sangat mengganggu tersebut.
<br><br>
"Kasihan anak kecil karena asap sudah masuk ke rumah dan bisa mengancam kesehatan. Kita harapkan asap ini secepatnya diatasi agar tidak ada anak-anak yang sakit," kata Nova, ibu dua anak, warga Jalan Teladan, Dumai Timur seperti dikutip dari Antara, Rabu (19/6).
<br><br>
Seperti Nova, kaum perempuan khawatir bayi dan anak di bawah lima tahun terserang infeksi saluran pernapasan atas. Warga mendesak pemerintah secepatnya melakukan penanggulangan kabut asap yang semakin tebal dan membahayakan kesehatan manusia serta ekosistem kehidupan lainnya.
<br><br>
Agar mengurangi asap di dalam rumah, Nova menghidupkan kipas angin dengan kecepatan tinggi serta menutup rapat-rapat pintu dan jendela. Ia menilai cemaran asap berpotensi besar mengancam kesehatan buah hatinya, dan anak-anak warga lain.
<br><br>
Hal senada juga disampaikan Anastasia, ibu seorang anak warga di Jalan Murni, Dumai Barat Asap. Bahkan Anastasia menyebut asap sudah memasuki rumah sejak kemarin, ditambah lagi abu sisa kebakaran hutan dan lahan yang diterbangkan angin.
<br><br>
"Kemarin siang hingga sore keadaan cuaca Dumai sangat buruk, dan seisi penghuni rumah sudah mulai batuk pilek dan sesak napas. Kami sangat khawatir kalau asap ini tidak secepatnya diatasi," ujar Anas.
<br><br>
Pemerintah Kota Dumai pada Selasa kemarin menyatakan kondisi asap sudah kategori membahayakan kesehatan masyarakat.
<br><br>
Sejauh ini, selain Dinkes yang telah menyebarkan masker gratis, sejumlah perusahaan swasta dan PMI setempat juga telah membagikan masker ke masyarakat pengguna jalan raya.
          </p>
        </div>
      </div>
    </div>
    <div class="col l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{asset('img/tanah.jpeg')}}" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Pencemaran Tanah<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('material.land')}}">Lihat Selengkapnya</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Pencemaran Tanah<i class="material-icons right"close></i></span>
          <p>
            Soil pollution occurs when the presence of toxic chemicals, pollutants or contaminants in the soil is in high enough concentrations to be of risk to plants, wildlife, humans and of course, the soil itself. Arable land is turning to desert and becoming non-arable at ever-increasing rates, due largely in part to global warming and agricultural fertilizers and pesticides, lessening the hope that we can feed our booming population. Within 40 years, there will be over 2 billion more people, which is the equivalent of adding another China and India. Food production will have to increase at least 40% and most of that will have to be grown on the fertile soils that cover just 11% of the global land surface. However, there is little new land that can be brought into production and existing land is being lost and degraded. The United Nations Food and Agricultural Organization states that annually, 75 billion tons of soil, the equivalent of nearly 10 million hectares, which is about 25 million acres, of arable land is lost to erosion, water-logging and salination and another 20 million hectares is abandoned because its soil quality has been degraded. Contact with contaminated soil may be direct, from using parks, schools etc., or indirect by inhaling soil contaminants which have vaporized or through the consumption of plants or animals that have accumulated large amounts of soil pollutants, and may also result from secondary contamination of water supplies and from deposition of air contaminants.
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
