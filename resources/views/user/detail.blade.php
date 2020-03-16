@extends('layouts/header2')
@section('title', 'Detail')

@section('content')
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
    </div>
  </nav>
</header>

<!-- page-title -->
<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4>{{ $destination->name }}</h4>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

<!-- blog single -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <ul class="list-inline d-flex justify-content-between py-3">
          <li class="list-inline-item"><i class="ti-user mr-2"></i>{{ $destination->location}}</li>
          <li class="list-inline-item"><i class="ti-calendar mr-2"></i>{{ $destination->created_at}}</li>
        </ul>
        <img src="{{ url('image/'.$destination->image) }}" alt="post-thumb" class="w-100 img-fluid mb-4">
        <div class="content">
          <p>{{ $destination->description}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
<!-- /blog single -->