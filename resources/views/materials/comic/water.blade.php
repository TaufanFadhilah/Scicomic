<div class="row full-height">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">
      @if (session()->has('class'))
        <div class="row">
          <div class="col l12">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\00 Sampul [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\00 Pengenalan Tokoh [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\01 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\02 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\03 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\04 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\05 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\06 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\07 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\08 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\09 [story 1].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 1] Pencemaran Air\10 [story 1].jpg')}}" class="responsive-img">
          </div>
          <div class="col l12">
            <a href="{{asset('comic/komik1.pdf')}}" class="btn cyan white-text">Download Komik PDF</a>
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
