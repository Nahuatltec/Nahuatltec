<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') -Nahuatltec</title>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/icon.css')}}">
        <link rel="stylesheet" href="{{ asset('css/stylef.css')}}">
        <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
        <script src="//code.tidio.co/esxehyukwlr0yncqiksrwj4125uhrdfk.js" async></script>1
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    @yield('css')
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
            
    @endif
      <div class="container">
          @yield('contenido')
      </div>
    </div>
    <br>
    @yield('js')
    @yield('footer')
    
  </body>
</html>