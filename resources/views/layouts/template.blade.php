<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prueba Inxait</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="https://www.linkedin.com/in/oscar-fiscal-277a741a6/">Feria<span>Autos</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
          <div class="text w-100 text-center mb-md-5 pb-md-5">
            <h1 class="mb-4">Campaña De Automoviles</h1>
            <p style="font-size: 18px;">Puedes Ser uno de nuestros ganadores</p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12	featured-top">
          <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
              <form action="{{route('users')}}" method="post" class="request-form ftco-animate bg-primary">
                @csrf
                <h2>Registro de clientes</h2>

                <div class="form-group">
                  <label for="" class="label">Nombre</label>
                  <input name="name" type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Escriba su nombre">
                </div>
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">
                  <label for="" class="label">Apellido</label>
                  <input type="text" name="last_name" class="form-control  @error('last_name') is-invalid @enderror" placeholder="Escriba su apelido">
                </div>
                @error('last_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">
                  <label for="" class="label">Cedula</label>
                  <input type="number" name="identification" class="form-control  @error('identification') is-invalid @enderror" placeholder="CC">
                </div>
                @error('identification')
                <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="form-group">
                  <label for="" class="label">Departamento</label>
                  <input name="department" class="form-control" placeholder="Tolima,Cundinamarca, etc">
                </div>
                @error('department')
                <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="form-group">
                  <label for="" class="label">Ciudad</label>
                  <input name="city" type="text" class="form-control" placeholder="Ibague,Bogota etc">
                </div>
                @error('city')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">
                  <label for="" class="label">Celular</label>
                  <input name="phone" type="number " class="form-control" placeholder="NUmero de contacto">
                </div>
                @error('phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">
                  <label for="" class="label">Correo</label>
                  <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com">
                </div>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">


                  <div class="form-group">
                    <input type="submit" value="Guardar cliente" class="btn btn-secondary py-3 px-4">
                  </div>
              </form>
            </div>
            <div class="col-md-8 d-flex align-items-center">
              <div class="services-wrap rounded-right w-100">
                <h3 class="heading-section mb-4">Ganador</h3>
                <div class="row d-flex mb-4">


                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">

                      <div class="text w-100">
                      </div>
                    </div>
                  </div>
                </div>

                <p><button onclick="objective(event, {{$userWin}})" class="btn btn-primary py-3 px-4">Revelar ganador</button></p>

                <a href="{{route('users.excel')}}" class="btn btn-primary py-3 px-4">Exportar Archivo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>



  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">

          <h2 class="mb-3">Clientes Registrados</h2>
        </div>
      </div>

      <div class="row">
        @foreach ($users as $user)
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">{{$user->name}}</h3>
              </h3>
              <p>{{$user->last_name}}</p>
              <p>{{$user->city}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>



  <section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="60">0</strong>
              <span>AÑOS <br>Experiencia</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="1090">0</strong>
              <span>Total <br>Autos</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="2590">0</strong>
              <span>Clientes <br>Felices</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text d-flex align-items-center">
              <strong class="number" data-number="67">0</strong>
              <span>Total <br>Sucursales</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo">FERIA<span>AUTOS</span></a></h2>

            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>


        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Tienes preguntas ?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">iBAGUE,TOLIMA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">3103195434</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">OSCARFISCALCP@GMAIL.COM</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script>
    /* abrir alerta cuando de click en el boton con la clase detalle */
    function objective(event, userWin) {

      event.preventDefault();

      Swal.fire({
        position: 'center',
        icon: "sucess",
        title: "Felicidades " + userWin.name + " " + userWin.last_name + " Has sido el ganador",
        confirmButtonText: 'Aww',

        showConfirmButton: true,
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "/";
        }
      });
    }
  </script>


</body>

</html>