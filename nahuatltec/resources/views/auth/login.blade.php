@extends('layouts.log')

@section('title', 'Login')

@section('content')
            <div class="login_box">
                <form method="post" action="" class="text_box2">
                    @csrf
                    <h1>Iniciar Sesión FB</h1>
                    <label for="">Correo electronico</label>
                    <input type="email" placeholder="Email" id="email" name="email">
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="Contraseña" id="password" name="password">
                    @error('message')
                    <p class="message">{{$message}}</p>
                    @enderror
                    <a class="recupera" href="{{ route('password.request')}}">¿Olvidaste tu contraseña?</a>
                    <a class="verde"><input type="submit" value="Iniciar Sesión"> </a>
                    <div class="formulario__grupos" id="grupo__usuario">
                            
                            <?php
                                session_start();
                                require_once  'vendor/autoload.php'; 
                                $fb = new Facebook\Facebook([
                                    'app_id' => '686166942000947',
                                    'app_secret' => 'e14cad8c152c2a8672de23cb7c93e5fc',
                                    'default_graph_version' => 'v3.2',
                                    ]);
                                  


                                $helper = $fb->getRedirectLoginHelper();

                                $permissions = ['email']; // Optional permissions
                                $redirectURL = "https://".$_SERVER['SERVER_NAME']."/fb-callback.php";
                                $loginUrl = $helper->getLoginUrl($redirectURL, $permissions);
                                echo '<a href="' . $loginUrl . '"><input type="button" class="formulario__input" value="FACEBOOK" id="usuario"></a>';
                            ?>
                            </div>
                    
                    <div class="more_btns">
                        <div class="bar">
                        </div>
                        <h1>O</h1>
                        <div class="bar">
                        </div>
                    </div> 
                </form>
            </div>
            <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Términos y privacidad</h3>
                                <ul>
                                    <li><a href="{{ route('notices.index')}}">Términos</a></li>
                                    <li><a href="{{ route('notices.index')}}">Privacidad</a></li>
                                    <li><a href="{{ route('notices.index')}}">Normas</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Sobre</h3>
                                <ul>
                                    <li><a href="{{ route('faq.index')}}">Contenido</a></li>
                                    <li><a href="{{ route('faq.index')}}">Seguridad</a></li>
                                    <li><a href="{{ route('faq.index')}}">Cuenta</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>Gamex</h3>
                                <p>Somos una empresa que se dedica a desarrollar videojuegos, aportando a la sociedad entretenimiento y enseñanza. Ademas de desarrollar sistemas que ayuden a la sociedad a la educación.</p>
                            </div>
                            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                        <p class="copyright">Gamex © 2021</p>
                    </div>
                </footer>
            </div>

            <script src="{{ asset('js/script.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        </div> 
@endsection