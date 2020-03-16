@extends('layouts/userlayout')
@section('title', 'Detail')

@section('content')
  <!-- preloader -->
  <div class="preloader">
    <div class="loader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- /preloader -->

<header class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand"><img class="img-fluid" src="{{ asset('UserAssets/images/logo.png') }}" alt="parsa"></a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
      aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navogation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="/login">Login</a>
        </li>
      </ul>
      <form class="form-inline position-relative ml-lg-4" method="GET">
        <input class="form-control px-0 w-100" name="search" type="search" placeholder="Search" value="{{ request()->get('search') }}">
        <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
        <button class="search-icon"><i class="ti-search text-dark"></i></button>
      </form>
    </div>
  </nav>
</header>

<!-- featured post -->
<section>
  <div class="container-fluid p-sm-0">
    <div class="row featured-post-slider">
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('UserAssets/images/featured-post/1.jpg') }}" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">LifeStyle</p>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('UserAssets/images/featured-post/2.jpg') }}" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Philosophy</p>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('UserAssets/images/featured-post/3.jpg') }}" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Fashion</p>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('UserAssets/images/featured-post/4.jpg') }}" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Article</p>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('UserAssets/images/featured-post/5.jpg') }}" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Nature</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- /featured post -->

<!-- blog post -->
<section class="section">
  <div class="container">
    <div class="row masonry-container">
    @foreach( $destination as $dst)
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="{{ url('image/'.$dst->image) }}" alt="post-thumb">
          <p class="text-uppercase mb-2" >{{$dst->Category->nama_cat}}</p>
          <h4 class="title-border"><a class="text-dark">{{$dst->name}}</a></h4>
          <p>{{ $dst->description}}</p>
            <a href="{{ url('/detail', $dst->id) }}" class="btn btn-transparent">read more</a>
        </article>
      </div>
      @endforeach

@endsection