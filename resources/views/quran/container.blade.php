<br>
<div class="site-section bg-light" id="features-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="section-title mb-3" id="quran">Al-Quran</h2>
      </div>
    </div>
    <div class="col mb-4">
      <form action="{{ route('quran') }}" method="get">
        <div class="inner-addon right-addon">
          <input type="text" id="s" name="s" placeholder="Cari Surat" value="{{ Request::get('s') }}" class="form-control rounded-0" autocomplete="off">
          <i class="icon-wrap icon icon-search"></i>
          <div class="autocomplete d-flex flex-column border border-top-0 invisible">
          </div>
        </div>
      </form>
    </div>
    <br>
    <div class="row align-items-stretch">
      @foreach ($surat as $surat )
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
          <div class="unit-4 d-block">
            <div class="unit-4-icon mb-3">
              <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
            </div>
            <div>
              <h3>{{$surat->id}}. {{$surat->surat}}</h3>
              <p>{{$surat->arti}}</p>
              <p><a href="/surat/{{$surat->id}}">Yuk Baca</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

