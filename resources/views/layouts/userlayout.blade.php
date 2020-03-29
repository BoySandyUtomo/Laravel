<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Parsa | Portfolio Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('UserAssets/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('UserAssets/plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('UserAssets/plugins/themify-icons/themify-icons.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('UserAssets/css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('UserAssets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('UserAssets/images/favicon.ico') }}" type="image/x-icon">

</head>

<body>
@yield('content')

    </div>
    <div class="row">
      <div class="col-12">
        <nav>

        <ul class="pagination justify-content-center align-items-center">
            <li class="page-item">
              <span class="page-link">{{ $destination->links() }}</span>
            </li>
          </ul>
          <!-- <ul class="pagination justify-content-center align-items-center">

            <li class="page-item">
            {{ $destination->links() }}
            </li>
          </ul> -->
        </nav>
      </div>
    </div>
  </div>
</section>

<footer class="bg-secondary">
    <div class="container">
        <div class="col-md-3 col-sm-3 mb-3 mb-md-0">
      </div>
    </div>
  <div class="text-center mt-5 pb-3">
    <p class="mb-0">Copyright © Kazekuri</a></p>
  </div>
</footer>

<!-- /blog post -->

<!-- jQuery -->
<script src="{{ asset('UserAssets/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('UserAssets/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('UserAssets/plugins/slick/slick.min.js') }}"></script>
<!-- masonry -->
<script src="{{ asset('UserAssets/plugins/masonry/masonry.js') }}"></script>
<!-- instafeed -->
<script src="{{ asset('UserAssets/plugins/instafeed/instafeed.min.js') }}"></script>
<!-- smooth scroll -->
<script src="{{ asset('UserAssets/plugins/smooth-scroll/smooth-scroll.js') }}"></script>
<!-- headroom -->
<script src="{{ asset('UserAssets/plugins/headroom/headroom.js') }}"></script>
<!-- reading time -->
<script src="{{ asset('UserAssets/plugins/reading-time/readingTime.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('UserAssets/js/script.js') }}"></script>

</body>
</html>