@include('layout.header')
<br>
<div class="site-section bg-light" id="features-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
            <h2 class="section-title mb-3">Kategori</h2>
            </div>
        </div>

            <div class="row align-items-stretch">
                @foreach ($kategori as $kategori )
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
                        </div>
                        <div>
                        <h3>{{$kategori->kategori}}</h3>
                        <p><a href="/kategori/{{$kategori->kategori}}">Yuk Baca</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('layout.footer')


  </div> <!-- .site-wrap -->
@include('layout.js')
