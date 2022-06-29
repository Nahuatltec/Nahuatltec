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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//code.tidio.co/esxehyukwlr0yncqiksrwj4125uhrdfk.js" async></script>
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        
    </head>
    <body>
    
      @if(auth()->check())
      <div class="conten_user">
            <header>
                        <div class="header-content">
                            <div class="logos">
                                <a class="h1" href="{{ app('router')->has('home') ? route('home') : url('/admin') }}"><h1>Nahuatl<b>Tec</b></h1></a>
                            </div>
                            <li><p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p></li> 
                            <div class="menu" id="show-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ app('router')->has('home') ? route('home') : url('/admin') }}"> <i class="fas fa-headset"></i><span class="icon-color-palette"></span> Actividades</a></li>
                                        <li><a href="/users"> <i class="fas fa-headset"></i><span class="icon-user-group"></span> Usuarios</a></li>
                                        <li><a href="/lecturas"> <i class="fas fa-headset"></i><span class="icon-book"></span> Lecturas</a></li>
                                        <li><a href="{{ route('admin.season')}}"> <i class="fas fa-headset"></i><span class="icon-badge"></span> Temporada</a></li>
                                        <li><a href="{{ route('admin.store')}}"> <i class="fas fa-headset"></i><span class="icon-store-front"></span> Tienda</a></li>
                                        <li><a href="{{ route('login.destroy')}}"> <i class="fas fa-headset"></i><span class="icon-close-outline"></span> Salir</a></li>
                                    </ul>
                                </nav>
                            </div>
                            
                        </div>

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
                                        <li><a href="{{ app('router')->has('home') ? route('home') : url('/') }}"><span class="icon-home"></span><i class="fas fa-search"></i> Inicio</a></li>
                                        <li><a href="{{ route('login.index')}}"> <i class="fas fa-headset"></i> Iniciar sesión</a></li>
                                        <li><a href="{{ route('register.index')}}"> <i class="fas fa-headset"></i> Registrate</a></li>
                                        <li class="menu-selected"><a href="{{ route('faq.index')}}" class="text-menu-selected"> 
                                        <i class="fas fa-file-alt"></i> FAQ</a></li>
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