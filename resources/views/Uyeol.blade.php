<!DOCTYPE html>
<html>
	<head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>CodeNight-Door To The Future</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/userupload/8579202/file/original-f41faa8ac879146ccc929975ad15630b.png?resize=752x">
        <style>
            .fa:hover {
        opacity: 0.7;
        }   

        .fa-linkedin {
         background: #327aff;
            color: white;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        .fa-snapchat-ghost {
            background: #fffc00;
            color: white;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }
        </style>
    </head>
    <body>
        <header class="sticky-top" style="background-color: yellow; box-shadow: 5px 5px 5px #999;">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/anasayfa" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                  <img src="https://cdn.dribbble.com/userupload/8579202/file/original-f41faa8ac879146ccc929975ad15630b.png?resize=752x" style="width: 150px; height: 100px;">
                </a>

                <ul class="nav col-12 col-lg-4 me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="{{route('kategory')}}" class="nav-link px-2 link-body-emphasis">Kategoriler</a></li>
                  <li><a href="{{route('siniflar')}}" class="nav-link px-2 link-body-emphasis">Sınıflar</a></li>
                  <li><a href="{{route('hakkimizda')}}" class="nav-link px-2 link-body-emphasis">Hakkımızda</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                  <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                  <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn.dribbble.com/userupload/8579202/file/original-f41faa8ac879146ccc929975ad15630b.png?resize=752x" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small" style="">
                    <li><a class="dropdown-item" href="{{route('Kullanici')}}">Kullanıcı Girişi</a></li>
                    <li><a class="dropdown-item" href="{{route('getCreateUye')}}">Üye ol</a></li>
                    <li><a class="dropdown-item" href="#">Profilim</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#" style="background-color: red;">Çıkış Yap</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </header>
        <form action="{{route('postCreateUye')}}" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="form-group" style="margin-top: 10px;">
                    <label>Adınız</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label>Emailiniz</label>
                    <input type="email" name="email" placeholder="E-posta" required class="form-control">
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label>Parolanız</label>
                    <input type="password" name="password" placeholder="Şifre" required class="form-control">
                </div>
                <button class="btn btn-sm btn-warning col-lg-4" style="margin-top: 10px;" type="submit">Üye Ol</button>
            </div>
        </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
        <footer style="background-color: yellow; box-shadow: 5px -5px 8px 2px; margin: 2px; margin-top: 300px;">
            <section class="md-4" id="section-footer">
                <div class="container" align="center">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Adres</h3>
                            <p><strong>Şehitkamil/Gaziantep</strong></p>
                        </div>
                        <div class="col-md-6">
                            <h3>Web Sayfalarımız</h3>
                            <a href="#" class="fa fa-facebook" style="width: 20px;"></a>
                            <a href="#" class="fa fa-snapchat-ghost" style="width: 20px;"></a>
                            <a href="#" class="fa fa-linkedin" style="width: 20px;"></a>
                        </div>
                        <div class="container" style="text-align: center;">
                            <p style="color: white;">
                                Copyright © CodeNight 2024
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>       
    </body>
</html>