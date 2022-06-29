
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server error</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/articulos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <!--Header - menu-->
    <header>

        <div class="header-content">

            <div class="logo">
                <h1>Nahuatl<b>Tec</b></h1>
            </div>

            <div class="menu" id="show-menu">
                
            </div>
            
        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>

    <!--Portada-->

    <div class="container-all" id="move-content">

        <div class="articles-container-cover500">
        <h1>¡ERROR !</h1>
        <h1>EN EL SERVIDOR!</h1>
        <a href="{{ app('router')->has('home') ? route('home') : url('/') }}"><input type="submit" value="Regresar" class="log"></a>
        
        
        </div>

    <div class="container-content">
        
    </div>

    <div class="container-footer">	

        <footer>
            <div class="logo-footer">
                <img src="img/logo.jpeg" alt="">
            </div>

            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>

            <hr>
            <h4>© 2022 Gustavo Amador - Todos los Derechos Reservados</h4>

        </footer>

    </div>

</div>

    <script src="js/script.js"></script>
</body>
</html>
