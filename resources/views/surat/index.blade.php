@include('layout.header')
<br>
    <div class="site-section bg-white" id="features-section">
      <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <br>
              <h2 class="section-title mb-3">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
            </div>
          </div>
          <table class="table">
            <tbody>
                @foreach ($quran as $quran)
                <tr>
                    <th scope="row">{{$quran->verseID}}</th>
                    <td style="width: 30%">{{$quran->indoText}}</td>
                    <td style="text-align:right;"><b style="font-size: 3rem; color: black;" class="arab">{{$quran->ayahText}}<b></td>
                  </tr>
                @endforeach

            </tbody>
          </table>
      </div>
    </div>

    @include('layout.footer')


  </div> <!-- .site-wrap -->
@include('layout.js')
