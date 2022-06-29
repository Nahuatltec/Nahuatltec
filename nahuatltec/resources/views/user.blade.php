@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="contenedor">
        <div class="contenido">
                <div class="logo">
                    <img src="img/logo.jpeg">
                </div>
                <div class="texto">
                    <div class="eslogan">
                        <h1>¡Ven y disfruta aprendiendo Náhuatl</h1>
                        <h1>de manera divertida y gratuita!</h1>
                    </div>
                    <div class="botones">
                        <a class="azul" href="{{ route('login.index')}}"><input  type="button" value="Ya tengo una cuenta"></a>
                        <a class="verde" href="{{ route('register.index')}}"><input  type="button" value="Empieza Ahora"></a>
                    </div>
                </div>
                
         </div>
            <div class="ini_box">
                <div class="gale-3">
                    <div class="btn btn-three" id="show">
                        <span>GALERIA</span>
                        </div>
                    </div>
                <div class="text_boxin" id="button">
                    
                    <section class="galeria">
                    <center>
                    <h1>Acerca de</h1>
                    <h2>¿Quienes somos?</h2>
                    
                        En Nahuátltec, nos preocupamos por sus datos personales, por eso hemos preparado esta Política de privacidad para explicar cómo los recopilamos, usamos y compartimos.<br>
                        Esta Política de privacidad detalla los datos personales que Nahuátltec, recibe sobre usted, cómo los procesamos y sus derechos y obligaciones en relación con sus datos personales. Nahuátltec, una empresa registrada con domicilio de la Universidad Tecnológica de la Huasteca Hidalguense, Huejutla de Reyes Hidalgo C.P. 43000, Mexico, con el controlador de datos a los efectos del Reglamento general de protección de datos ("GDPR") y cualquier legislación local pertinente (" Leyes de protección de datos ”).<br><br>

                    <h2>Misión</h2>
                    Desarrollar y comercializar productos y servicios de buena calidad a base tecnológica que satisfagan las necesidades de nuestros clientes.<br><br>

                    <h1>Visión</h1>
                    Ser una buena empresa en el desarrollo de aplicaciones , utilizando las ultimas tecnologías , con un buen conocimiento humano para el desarrollo de estas aplicaciones alcanzando un buen servicio y calidad de productos.<br><br>
                    
                
                    </center>
                            <div class="carrusel">
                                <img src="img/img3.jpg" alt="Imagen 1" class="img">
                                <img src="img/img5.jpeg" alt="Imagen 2" class="img">
                                <img src="img/img8.jpg" alt="Imagen 3" class="img">
                            </div>
                            <ul class="puntos">
                                <li class="punto activo"></li>
                                <li class="punto"></li>
                                <li class="punto"></li>
                    
                            </ul>

                    
                    </section>
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
                <script>
                    $('#button').hide();
                    $(function(){
                      $('#show').click(function(){
                        $('#button').toggle();
                      });
                    })
                </script>
            <script src="{{ asset('js/script.js')}}"></script>
            <script src="{{ asset('js/carrucel.js')}}"></script>
            <script src="{{ asset('js/loader.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
            </div> 
    @endsection
