<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>VootageVault</title>
</head>
<body>
  @include('landing.navbar')

  <div class="container my-5">
    <h2 class="text-center mb-4">Free Stock Photos</h2>
    <div class="d-flex justify-content-end mb-3">
      <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Trending
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Popular</a></li>
        <li><a class="dropdown-item" href="#">Newest</a></li>
      </ul>
    </div>

    <!-- Gallery -->
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <div class="photo-card">
          <img src="{{ asset('/storage/cactus (8).jpeg') }}" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/cactus (10).jpeg') }}" alt="Profile">
              <span>Rexzy Febriano</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/cactus (8).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>

        <div class="photo-card">
          <img src="{{ asset('/storage/cactus (9).jpeg') }}" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/cactus (10).jpeg') }}" alt="Profile">
              <span>Rexzy Febriano</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/cactus (9).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>

        <div class="photo-card">
          <img src="{{ asset('/storage/cactus (9).jpeg') }}" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/cactus (10).jpeg') }}" alt="Profile">
              <span>Rexzy Febriano</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/cactus (9).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="photo-card">
          <img src="{{ asset('/storage/iceberg (10).jpeg') }}" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
              <span>Hakim Makarim</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/iceberg (10).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>

        <div class="photo-card">
          <img src="{{ asset('/storage/cloud (19).jpeg') }}" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
              <span>Hakim Makarim</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/cloud (19).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>

        <div class="photo-card">
          <img src="{{ asset('/storage/cactus (1).jpeg') }}" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
              <span>Rexzy Febriano</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/cactus (1).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>

        <div class="photo-card">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" alt="Photo">
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/iceberg (14).jpeg') }}" alt="Profile">
              <span>Rexzy Febriano</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="photo-card">
          <img src="{{ asset('/storage/cloud (16).jpeg') }}" alt="Photo"/>
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/cloud (1).jpeg') }}" alt="Profile">
              <span>Shavalino Fayola</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="{{ asset('/storage/cloud (16).jpeg') }}" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>

        <div class="photo-card">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" alt="Yosemite National Park"/>
          <div class="photo-overlay">
            <div class="profile-info">
              <img src="{{ asset('/storage/cloud (12).jpeg') }}" alt="Profile">
              <span>Shavalino Fayola</span>
            </div>
            <div class="icons">
              @if(Auth::check())
                <a href="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" download class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Download</a>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">Login to Download</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Gallery -->
  </div>

  @include('landing.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/script.js"></script>
</body>
</html>