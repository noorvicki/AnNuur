@include('layout.header')
<div class="site-section text-dark bg-white" id="features-section">
    <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{$post->judul}}</h1>
        <!-- Author -->
        <p class="lead">
          kategori :
          <a href="/kategori/{{$post->Kategori->kategori}}">{{$post->Kategori->kategori}}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on {{$post->updated_at}}</p>
        <hr>
        @if($post->gambar)
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        <hr>
        @endif

        <!-- Post Content -->
        <div class="arab">
        {!!$post->body!!}
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        {{-- <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Baru Ditambahkan</h5>
          <div class="card-body">
            <ul class="list-group list-group-flush">
            @foreach ($artikelterkait as $terkait)
                <li class="list-group-item"><a href="/post/{{$terkait->Kategori->kategori}}/{{$terkait->judul}}">{{$terkait->judul}}</a></li>
            @endforeach
            </ul>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


    @include('layout.footer')


  </div> <!-- .site-wrap -->
@include('layout.js')
