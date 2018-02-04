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
              <img src="{{asset('img/air.png')}}" class="responsive-img material-img">
            </div>
            <div class="col l8 s12">
              <a href="{{route('material.water')}}"><h5 class="cyan-text">Pencemaran Air</h5> <br></a>
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
      </div>
    </div>
    <div class="col l12 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col l4 s12">
              <img src="{{asset('img/udara.jpg')}}" class="responsive-img material-img">
            </div>
            <div class="col l8 s12">
              <a href="{{route('material.air')}}"><h5 class="cyan-text">Pencemaran udara</h5> <br></a>
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
      </div>
    </div>
    <div class="col l12 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col l4 s12">
              <img src="{{asset('img/tanah.jpeg')}}" class="responsive-img material-img">
            </div>
            <div class="col l8 s12">
              <a href="{{route('material.land')}}"><h5 class="cyan-text">Pencemaran Tanah</h5> <br></a>
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
  </div>
</div>
@endsection
