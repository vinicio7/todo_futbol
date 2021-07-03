<!DOCTYPE html>
<html lang="en" style="border-color: rgb(255,255,255);color: rgb(255,253,253);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Outline">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oranienbaum">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


</head>

<body style="background: rgb(0,0,0);">
    <section id="loading">
        <div style="margin-top: 20%">
            <center>
                <lottie-player src="{{ asset('assets/lottie/soccer_loading.json') }}"  background="transparent"  speed="1"  style="width: 400px; "  loop autoplay></lottie-player>
                <lottie-player src="{{ asset('assets/lottie/loading.json') }}"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop autoplay></lottie-player>
            </center>
        </div>
    </section>
  
   <section id="body-home" style="display: none">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container">
            <a class="navbar-brand" >
                <img src="assets/img/TF.png">
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: #ff0038;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" id="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" id="nav-link" href="#" >Destacados</a></li>
                    <li class="nav-item"><a class="nav-link" id="nav-link" href="#" >Promociones</a></li>
                    <li class="nav-item"><a class="nav-link" id="nav-link" href="#" >Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" id="nav-link" href="#" >Afiliación</a></li>
                    <li class="nav-item"><a class="nav-link" id="nav-link" href="#" >Contacto</a></li>
                </ul>
                <span class="navbar-text actions">
                    <a class="login" href="#" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;">Iniciar Sesión</a>
                    <a class="btn btn-light action-button" role="button" href="#" style="background: #ff0038;font-family: Montserrat, sans-serif;">Registrate</a>
                </span>
            </div>
        </div>
    </nav>

        @yield('content')
        
    <footer class="footer-basic" style="background: rgb(0,0,0);">
     <div class="social">
         <a href="#" style="color: rgb(255,255,255);">
            <i class="icon ion-social-facebook" id="icon" style="color: rgb(255,255,255);"></i>
        </a>
        <a href="#" style="color: rgb(255,255,255);">
            <i class="icon ion-social-instagram" id="icon" style="color: rgb(255,255,255);"></i>
        </a>
        <a href="#" style="color: rgb(255,255,255);">
            <i class="icon ion-social-whatsapp-outline" id="icon" style="color: rgb(255,255,255);"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Inicio</a></li>
            <li class="list-inline-item"><a href="#">Destacados</a></li>
            <li class="list-inline-item"><a href="#">Promociones</a></li>
            <li class="list-inline-item"><a href="#">Reservas</a></li>
            <li class="list-inline-item"><a href="#">Afiliación</a></li>
            <li class="list-inline-item"><a href="#">Contacto</a></li>
        </ul>
        <p class="copyright">Todo Fut© {{date('Y')}}</p>
    </footer>
   </section>
   <script type="text/javascript">
        var a =  document.getElementById("body-home");
        var b =  document.getElementById("loading");

        window.onload = function() {    
            a.style.display ="";
            b.style.display = "none"
        }
    </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/header.js') }}"></script>

</body>

</html>