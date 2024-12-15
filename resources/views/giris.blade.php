<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Giriş Admin Paneli</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/userupload/8579202/file/original-f41faa8ac879146ccc929975ad15630b.png?resize=752x">


    
    <!-- Custom styles for this template -->
  </head>
  <body>
    @csrf
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-4" href="giris">CodeNight Admin Paneli</a>
            <form method="POST" action="{{ route('admin.logout') }}">
       @csrf
        <button type="submit" class="btn btn-danger" style="margin-right: 10px;">Çıkış</button>
      </form>

    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
             <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                SINIFLAR
              </button>
              <div class="collapse show" id="dashboard-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="{{route('getCreateSinif')}}" class="link-dark d-inline-flex text-decoration-none rounded">Sınıf Ekle</a></li>
                  <li><a href="{{route('getEditSinif')}}" class="link-dark d-inline-flex text-decoration-none rounded">Sınıfı Düzenle</a></li>
                  <li><a href="{{route('getAllSinif')}}" class="link-dark d-inline-flex text-decoration-none rounded">Tüm Sınıflar</a></li>
                </ul>
              </div>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                KATEGORİ
              </button>
              <div class="collapse show" id="dashboard-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="{{route('getCreateCategory')}}" class="link-dark d-inline-flex text-decoration-none rounded">Kategori Ekle</a></li>
                  <li><a href="{{route('getEditCategory')}}" class="link-dark d-inline-flex text-decoration-none rounded">Kategoriyi Düzenle</a></li>
                  <li><a href="{{route('getAllCategory')}}" class="link-dark d-inline-flex text-decoration-none rounded">Tüm Kategoriler</a></li>
                </ul>
              </div>
 
            </li>
          </div>
        </nav>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">PANEL</h1>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <img src="https://cdn.dribbble.com/userupload/8579202/file/original-f41faa8ac879146ccc929975ad15630b.png?resize=752x">
          </div>
          @yield('content')

        </main>
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <section class= "navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-4 shadow" style="margin-top: 10px;">
      <footer class="fot">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4 style="color: white;">CodeNight Team®</h4>
          </div>
      </footer>
    </section>
  </body>
</html>