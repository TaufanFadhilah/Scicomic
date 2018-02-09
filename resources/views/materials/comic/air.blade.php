<div class="row full-height">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">
      @if (session()->has('class'))
        <div class="row">
          <div class="col l12">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\0 Sampul.png')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\00 Pengenalan Tokoh.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\1.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\2.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\3.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\4.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\5.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\6.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\7.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\8.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\9.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\10.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\11.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\12.jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 2] Pencemaran Udara\13.jpg')}}" class="responsive-img">
            <a href="{{asset('comic/komik2.pdf')}}" class="btn cyan white-text">Download Komik PDF</a>
          </div>
        </div>
      @else
        <form action="{{route('absent.store')}}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="type" value="water">
          <legend>Absen lah terlebih dahulu sebelum membaca atau mengunduh komik.</legend>
          <div class="col l6 s12">
            <div class="input-field">
              <select name="number">
                @for ($i=1; $i <= 40; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
              <label>Absen</label>
            </div>
          </div>
          <div class="col l6 s12">
            <div class="input-field">
              <select name="class">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
              </select>
              <label>Kelas</label>
            </div>
          </div>
          <button type="submit" class="btn blue">Masukan</button>
        </form>
      @endif
    </div>
  </div>
</div>
</div>
