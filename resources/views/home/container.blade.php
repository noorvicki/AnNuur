<div class="row mb-5">
    <div class="col-12 text-center">
      <h2 class="section-title mb-3" id="quran">Al-Quran</h2>
    </div>
  </div>

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


