<div class="row full-height">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">
      @if (session()->has('class'))
        <div class="hide-on-med-and-down">
          <iframe src = "/js/ViewerJS/#../../comic/komik2.pdf" width='900' height='1000' allowfullscreen webkitallowfullscreen></iframe>
        </div>
        <div class="hide-on-large-only">
          <iframe src = "/js/ViewerJS/#../../comic/komik2.pdf" width='200' height='1000' allowfullscreen webkitallowfullscreen></iframe>
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
