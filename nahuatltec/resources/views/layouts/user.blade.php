<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
        
        <title>@yield('title') -Nahuatltec PRU</title>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/icon.css')}}">
        <link rel="stylesheet" href="{{ asset('css/stylef.css')}}">
        <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
        <script src="//code.tidio.co/esxehyukwlr0yncqiksrwj4125uhrdfk.js" async></script>1
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
      @if(auth()->check())
        <div class="conten_user">
            <header>
                        <div class="header-content">
                            <div class="logos">
                                <a class="h1" href="{{ app('router')->has('home') ? route('home') : url('/user') }}"><h1>Nahuatl<b>Tec</b></h1></a>
                            </div>
                            <li><p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p></li> 
                            <div class="menu" id="show-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ app('router')->has('home') ? route('home') : url('/user') }}"> <i class="fas fa-headset"></i><span class="icon-color-palette"></span> Actividades</a></li>
                                        <li><a href="{{ route('lecrud.index')}}"> <i class="fas fa-headset"></i><span class="icon-book"></span> Lecturas</a></li>
                                        <li><a href="{{ route('login.season')}}"> <i class="fas fa-headset"></i><span class="icon-badge"></span> Temporada</a></li>
                                        <li><a href=""> <i class="fas fa-headset"></i><span class="icon-store-front"></span> Tienda</a></li>
                                        <li><a href="{{ route('login.destroy')}}"> <i class="fas fa-headset"></i><span class="icon-close-outline"></span> Salir</a></li>
                                    </ul>
                                </nav>
                            </div>
                            
                        </div>

            </header>
        </div>
            
        @endif

        @yield('content')
    </body>
</html>