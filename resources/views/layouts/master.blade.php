
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- Viewport Meta Tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Museu Da Moeda
  </title>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap-4.0.0-beta/css/bootstrap.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/css/main.css">
  <!-- Slicknav Css -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/css/slicknav.css">
  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/css/color-switcher.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/css/responsive.css">
  <!--Fonts-->
  <link rel="stylesheet" media="screen" href="/engage/assets/fonts/font-awesome/font-awesome.min.css">
  <link rel="stylesheet" media="screen" href="/engage/assets/fonts/simple-line-icons.css">

  <!-- Extras -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/extras/owl/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="/engage/assets/extras/owl/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="/engage/assets/extras/animate.css">
  <link rel="stylesheet" type="text/css" href="/engage/assets/extras/normalize.css">
  <link rel="stylesheet" type="text/css" href="/engage/assets/extras/settings.css">

  <!-- lightbox css -->
  <link rel="stylesheet" type="text/css" href="/lightbox/dist/css/lightbox.css">



  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="/engage/assets/css/colors/green.css" media="screen" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background-color: #fcf9fc">

  <!-- Header area wrapper starts -->
  <header id="header-wrap">
    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="/">
            <img src="/engage/assets/img/uem-logo-40x40.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="main-menu">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">

            <li class="nav-item active">
              <a class="nav-link active" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">História</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/historias/museu">Museu</a>
                <a class="dropdown-item" href="/historias/amarela">Casa Amarela</a>
              </div>
            </li>
<!-- 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/exposicoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exposição</a>
            </li> -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/eventos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/servicos/escola">Actividades Com Escolas</a>
                <a class="dropdown-item" href="/servicos/individual">Visitas Guiadas Individual</a>
                <a class="dropdown-item" href="/servicos/patio">Patio para Eventos</a>
              </div>
            </li>


            @if (Route::has('login'))
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="{{ route('logout') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">olá {{ Auth::user()->name }}</a>
              <div class="dropdown-menu">
                <a href="{{ route('home') }}">
                  Home
                </a>

                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </li>
          @else
          <li class="nav-item active">
            <a class="dropdown-item active" href="{{ route('login') }}"><b>Login</b></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('register') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registar</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('register') }}">Singular</a>
              <a class="dropdown-item" href="{{ route('register') }}">Organização</a>
            </div>
          </li>
          @endauth
          @endif
        </ul>

        <form class="form-inline">
          <div class="top_search_con">
            <input class=" mr-sm-2" type="text" placeholder="Search Here ...">
            <span class="top_search_icon"><i class="icon-magnifier"></i></span>
          </div>
        </form>
      </div>



      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">
        <li>
          <a class="active" href="/">Inicio</a>
        </li>
        <li>
          <a href="#">História</a>
          <ul>
            <li><a class="dropdown-item" href="/historias/museu">Museu</a></li>
            <li><a class="dropdown-item" href="/historias/amarela">Casa Amarela</a></li>
          </ul>
        </li>
        <li>
          <a href="url(exposicoes)">Exposição</a>
        </li>
        <li>
          <a href="/eventos">Eventos</a>
        </li>
        <li>
          <a href="/contactos">Contacto</a>
        </li>

        @if (Route::has('login'))
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="{{ route('logout') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">olá {{ Auth::user()->name }}</a>
          <div class="dropdown-menu">
            <a href="{{ route('home') }}">
              Home
            </a>

            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
      @else
      <li class="nav-item active">
        <a class="dropdown-item active" href="{{ route('login') }}"><b>Login</b></a>
      </li>

      <li class="nav-item active">
        <a class="dropdown-item" href="{{ route('register') }}"><b>Registar</b></a>
      </li>
      @endauth
      @endif
    </ul>
    <!-- Mobile Menu End -->
  </div>
</nav>

</header>
<!-- Header-wrap Section End -->


<!-- Page Header -->
<div class="page-header-section">
  <div class="container">
    <div class="row">
      <div class="page-header-area">
        <div class="page-header-content">
          <h2 class="section-title wow fadeInDown" data-wow-delay=".5s">
            @yield('title')
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->


@yield('content')

<!-- Footer Section -->
<footer>
  <!-- Container Starts -->
  <div class="container">
    <!-- Row Starts -->
    <div class="row section">
      <!-- Footer Widget Starts -->
      <div class="footer-widget col-md-4 col-xs-12 wow fadeIn">
        <h3 class="small-title">
          CONTACTO
        </h3>
        <p>
          Museu da Moeda Rua Consiglieri Pedroso Maputo
          Contacto 84 533 6565
          De 3ª a 6ª feiras: das 11:00h às 17:00h;
          Sábado: das 9:00h às 15:00h;
          Domingo e Feriados: das 14:00h às 17:00h;
          2ª feira: Encerrada.
        </p>
        <div class="social-footer">
          <a href="#"><i class="fa fa-facebook icon-round"></i></a>
          <a href="#"><i class="fa fa-twitter icon-round"></i></a>
          <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
          <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
        </div>
      </div><!-- Footer Widget Ends -->
      <!-- Footer Widget Starts -->
      <div class="footer-widget col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".5s">
        <h3 class="small-title">
          Localização
        </h3>
        <div class="plain-flicker-gallery">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14348.154694117433!2d32.56303131580354!3d-25.966771980171107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3433553a713d269!2sMuseu+da+Moeda!5e0!3m2!1spt-PT!2smz!4v1508504507925" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div><!-- Footer Widget Ends -->
      <!-- Footer Widget Starts -->
      <div class="footer-widget col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".8s">
        <h3 class="small-title">
          SOBRE
        </h3>
        <div class="horizontal-menu">
          <a href="/historias/museu" class="active">Museu da Moeda</a>
          <br><br>
          <a href="/historias/amarela">História da Casa Amarela</a>
          <br><br>
          <a href="#">Quem Somos</a>
        </div>
      </div><!-- Footer Widget Ends -->
    </div><!-- Row Ends -->
  </div><!-- Container Ends -->
  <!-- Copyright -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <p class="copyright-text">
            ©  2017. Todos Direitos Reservados. Developers <a href="#">MacHuMac</a>
          </p>
        </div>
        <div class="col-md-6  col-sm-6">
          <ul class="nav nav-inline  justify-content-end ">
            <li class="nav-item">
              <a class="nav-link active" href="/">Início -</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Sitemap -</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Políticas De Privacidade -</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Termos de Serviço</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright  End-->
</footer>

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
  <i class="fa fa-angle-up">
  </i>
</a>

<!-- JavaScript & jQuery Plugins -->
<script src="/engage/assets/js/jquery-min.js"></script>
<!-- Tether Js -->
<script src="/engage/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/engage/assets/js/bootstrap.min.js"></script>
<!-- Color Switcher Js -->
<!-- <script src="/engage/assets/js/color-switcher.js"></script> -->
<!--Text Rotator-->
<script src="/engage/assets/js/jquery.mixitup.js"></script>
<!--WOW Scroll Spy-->
<script src="/engage/assets/js/wow.js"></script>
<!-- OWL Carousel -->
<script src="/engage/assets/js/owl.carousel.js"></script>
<!-- WayPoint -->
<script src="/engage/assets/js/waypoints.min.js"></script>
<!-- CounterUp -->
<script src="/engage/assets/js/jquery.counterup.min.js"></script>
<!-- Slicknav -->
<script src="/engage/assets/js/jquery.counterup.min.js"></script>
<!-- ScrollTop -->
<script src="/engage/assets/js/jquery.slicknav.js"></script>
<!-- Appear -->
<script src="/engage/assets/js/jquery.appear.js"></script>
<!-- Vide js -->
<script src="/engage/assets/js/jquery.vide.js"></script>
<!-- All JS plugin Triggers -->
<script src="/engage/assets/js/main.js"></script>


<script src="bootstrap-4.0.0-beta/js/jquery.min.js"></script>

<script type="text/javascript" src="/lightbox/dist/js/lightbox.js"></script>
<script src="/lightbox/dist/js/lightbox-plus-jquery.js" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
  @yield('ajax')
</script>
  @yield('script')
</body>
</html>