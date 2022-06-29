<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') -Nahuatltec</title>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/icon.css')}}">
        <link rel="stylesheet" href="{{ asset('css/stylef.css')}}">
        <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
        <script src="//code.tidio.co/esxehyukwlr0yncqiksrwj4125uhrdfk.js" async></script>
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
      @if(auth()->check())
      <div class="contenedor_v3">
            <header class="header_v3">
                <div class="titulo_v2">
                    <a class="h1" href="{{ route('admin.index')}}"><h1>Nahuatltec</h1></a>
                </div>
                        <nav class="nav">
                        <li><p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p></li> 
                        <li><a href=""><input class="azul" type="button" value="Temas"></a></li>
                        <li><a href="{{ route('admin.user')}}"><input class="azul" type="button" value="Usuarios"></a></li>
                        <li><a href=""><input class="azul" type="button" value="Temporada"></a></li>
                        <li><a href=""><input class="azul" type="button" value="Tienda"></a></li>
                        <li><a href="{{ route('login.destroy')}}"><input class="rojo"  type="submit" value="Salir"></a></li>
                        </nav>
            </header>
      </div>
        @else

                <header>
                        <div class="header-content">
                            <div class="logos">
                                <a class="h1" href="{{ app('router')->has('home') ? route('home') : url('/') }}"><h1>Nahuatl<b>Tec</b></h1></a>
                            </div>

                            <div class="menu" id="show-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ app('router')->has('home') ? route('home') : url('/') }}"><span class="icon-home"></span> <i class="fas fa-headset"></i> Inicio</a></li>
                                        <li><a href="{{ route('login.index')}}"> <i class="fas fa-headset"></i> Iniciar sesión</a></li>
                                        <li class="menu-selected"><a href="{{ route('register.index')}}" class="text-menu-selected"> 
                                        <i class="fas fa-file-alt"></i>Registrate</a></li>
                                        <li><a href="{{ route('faq.index')}}"><i class="fas fa-search"></i>FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                            
                            <div id="ctn-icon-search">
                                <i class="fas fa-search" id="icon-search"></i>
                            </div>

                        </div>

                        <div id="icon-menu">
                            <i class="fas fa-bars"></i>
                        </div>
                        
                </header>
                 
                <!--Busqueda-->

                <div id="ctn-bars-search">
                    <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
                </div>
                        <ul id="box-search">
                            <li><a href="{{ route('notices.index')}}"><i class="fas fa-search"></i>Avisos de privacidad</a></li>
                            <li><a href="{{ route('contact.index')}}"><i class="fas fa-search"></i>Contactanos</a></li>
                            <li><a href="{{ app('router')->has('home') ? route('home') : url('/404') }}"><i class="fas fa-search"></i>Error 404</a></li>
                            <li><a href="{{ route('faq.index')}}"><i class="fas fa-search"></i>Faq</a></li>
                            <li><a href="{{ app('router')->has('home') ? route('home') : url('/') }}"><i class="fas fa-search"></i>Inicio</a></li>
                            <li><a href="{{ route('login.index')}}"><i class="fas fa-search"></i>Login</a></li>
                            <li><a href="{{ route('register.index')}}"><i class="fas fa-search"></i>Validaciones</a></li>  
                        </ul>
            <div id="cover-ctn-search"></div>  
        

          @endif
    
            
  

        @yield('content')
        
    </body>
</html>