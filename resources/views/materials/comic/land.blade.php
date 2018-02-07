<div class="row full-height">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">
      @if (session()->has('class'))
        <div class="row">
          <div class="col l12">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\Sampul_revisi [story 3].png')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\Pengenalan Tokoh [Story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\01 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\02 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\03 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\04 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\05 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\06 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\07 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\08 [story 3].jpg')}}" class="responsive-img">
            <img src="{{asset('comic_img\[Story 3] Pencemaran Tanah\09 [story 3].jpg')}}" class="responsive-img">
            <a href="{{asset('comic/komik3.pdf')}}" class="btn cyan white-text">Download Komik PDF</a>
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
