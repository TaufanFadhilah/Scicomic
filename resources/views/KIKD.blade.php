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
              <table>
                <tr>
                  <td>K.I.1</td>
                  <td>Menghayati dan mengamalkan ajaran agama yang dianutnya.</td>
                </tr>
                <tr>
                  <td>K.I.2</td>
                  <td>Menghargai dan menghayati perilaku jujur, disiplin, tanggungjawab, peduli (toleransi,
              gotong royong), santun, percaya diri, dalam berinteraksi secara efektif dengan
              lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya.</td>
                </tr>
                <tr>
                  <td>K.I.3</td>
                  <td>Memahami pengetahuan (faktual, konseptual, dan prosedural) berdasarkan rasa ingin
tahunya tentang ilmu pengetahuan, teknologi, seni, budaya terkait fenomena dan
kejadian tampak mata</td>
                </tr>
                <tr>
                  <td>K.I.4</td>
                  <td>Mencoba, mengolah, dan menyaji dalam ranah konkret (menggunakan, mengurai,
merangkai, memodifikasi,dan membuat) dan ranah abstrak (menulis, membaca,
menghitung, menggambar, dan mengarang) sesuai dengan yang dipelajari di sekolah
sumber lain yang dalam sudut pandang/teori.</td>
                </tr>
              </table>
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
              <table>
                <tr>
                  <td>3.8</td>
                  <td>Menganalisis terjadinya pencemaran lingkungan dan dampaknya bagi ekosistem</td>
                </tr>
                <tr>
                  <td>4.8</td>
                  <td>Membuat tulisan tentang gagasan penyelesaian masalah pencemaran di lingkungannya
berdasarkan hasil pengamatan</td>
                </tr>
              </table>
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
              <table>
                <tr>
                  <td>3.8.1</td>
                  <td>Menjelaskan pengertian pencemaran lingkungan</td>
                </tr>
                <tr>
                  <td>3.8.2</td>
                  <td>Menjelaskan macam-macam Pencemaran Lingkungan</td>
                </tr>
                <tr>
                  <td>3.8.3</td>
                  <td>Menjelaskan pengertian pencemaran air</td>
                </tr>
                <tr>
                  <td>3.8.4</td>
                  <td>Menyelidiki pengaruh air jernih dari tercemar terhadap kondisi (pergerakan) ikan</td>
                </tr>
                <tr>
                  <td>3.8.6</td>
                  <td>Menjelaskan pengertian pencemaran udara</td>
                </tr>
                <tr>
                  <td>3.8.7</td>
                  <td>Menyebutkan faktor-faktor penyebab pencemaran udara</td>
                </tr>
                <tr>
                  <td>3.8.8</td>
                  <td>Menjelaskan dampak pencemaran udara</td>
                </tr>
                <tr>
                  <td>3.8.9</td>
                  <td>Menjelaskan pengertian pencemaran tanah</td>
                </tr>
                <tr>
                  <td>3.8.10</td>
                  <td>Menjelaskan dampak pencemaran tanah</td>
                </tr>
                <tr>
                  <td>4.8.1</td>
                  <td>Menyajikan beberapa contoh pencemaran air yang ada di lingkungan sekitar</td>
                </tr>
              </table>
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
