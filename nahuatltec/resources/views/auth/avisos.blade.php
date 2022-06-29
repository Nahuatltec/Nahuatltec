@extends('layouts.app')

@section('title', 'Avisos')

@section('content')
            <div class="login_box">
                <div class="text_box3">
                <h1>Avisos y privacidad</h1>
                En Nahuátltec, nos preocupamos por sus datos personales, por eso hemos preparado esta Política de privacidad para explicar cómo los recopilamos, usamos y compartimos.<br>
                    Esta Política de privacidad detalla los datos personales que Nahuátltec, recibe sobre usted, cómo los procesamos y sus derechos y obligaciones en relación con sus datos personales. Nahuátltec, una empresa registrada con domicilio de la Universidad Tecnológica de la Huasteca Hidalguense, Huejutla de Reyes Hidalgo C.P. 43000, Mexico, con el controlador de datos a los efectos del Reglamento general de protección de datos ("GDPR") y cualquier legislación local pertinente (" Leyes de protección de datos ”).<br><br>
                    I. Información que recopilamos <br>
                    Esta Política de privacidad explica cómo recopilamos, usamos y compartimos sus datos personales.<br><br>
                    II. Información que proporcionas<br>
                    A través del proceso de registro, nos proporcionará su nombre, dirección de correo electrónico (o dirección de correo electrónico de sus padres) y edad. También nos proporcionará la información de su transacción de pago si elige pagar por los servicios de Nahuátltec.<br><br>
                    III. Datos de actividad <br>
                    Cuando utilice el Servicio, enviará información y contenido a su perfil. También generaremos datos sobre su uso de nuestros Servicios, incluida su participación en actividades educativas en el Servicio, o su envío de mensajes y la transmisión de información a otros usuarios ("Datos de actividad"). También recopilamos datos técnicos sobre cómo interactúa con nuestros Servicios; para obtener más información, consulte Cookies.<br><br>
                    Solo recopilamos los datos que necesitamos, lo que significa que no registramos:<br>
                    Nombres de usuario<br>
                    Nombres<br>
                    Imágenes de perfil<br>
                    Correos electrónicos<br>
                    Ubicaciones o biografías en la página de perfil<br>
                    Contraseñas<br><br>

                    Registramos los siguientes datos:<br><br>
                    Patrones de uso<br>
                    Clicks<br>
                    Movimientos del raton<br>
                    Desplazamiento<br>
                    Mecanografía<br><br>
                    Especificaciones técnicas<br>
                    Navegador<br>
                    Tipo de dispositivo<br>
                    Sistema operativo<br>
                    Tamaño del visor<br>
                    Errores de secuencia de comandos<br>
                    dirección IP<br><br>
                    Navegación<br>
                    Páginas visitadas<br>
                    Remitentes<br>
                    Parámetros de URL<br>
                    Duración de la sesión<br><br>
                    Actividad de aprendizaje<br>
                    Progreso de la sesión<br>
                    Respuestas<br>
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