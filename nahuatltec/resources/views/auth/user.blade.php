@extends('layouts.user')

@section('title', 'Temas')

@section('content')

            <div class="contenido_v3">
                <div class="actividades">
                        <h1>Actividades</h1>
                        <div class="Act_box">
                            <div class="Act">
                                <h2>Frutas</h2>
                                <a href="{{ route('activity.index')}}">
                                <img src="img/fresa.jpg" alt="">
                                </a>
                            </div>
                            <div class="Act">
                                <h2>Animales</h2>
                                <a href="{{ route('activity2.index')}}">
                                <img src="img/leon.png" alt="">
                                </a>
                            </div>
                            <div class="Act">
                                <h2>Sujetos</h2>
                                <a href="{{ route('activity3.index')}}">
                                <img src="img/familia.jpg" alt="">
                                </a>
                            </div>
                        </div>
                </div>
                <div class="extras">
                    <div class="progreso">
                        <h1>Agregar</h1>
                    </div>
                    <div class="amigos">
                        <h1>Amigos</h1>
                    </div>                 
                </div>
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