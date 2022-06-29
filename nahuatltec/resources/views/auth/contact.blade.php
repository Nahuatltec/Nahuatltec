@extends('layouts.cont')

@section('title', 'Contacto')

@section('content')
        <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>

        <form action="" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names">

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email">

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje"></textarea>

                <input type="button" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

        </section>

            <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Términos y privacidad</h3>
                                <ul>
                                    <li><a href="#">Términos</a></li>
                                    <li><a href="#">Privacidad</a></li>
                                    <li><a href="#">Normas de la comunidad</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Sobre</h3>
                                <ul>
                                    <li><a href="#">Compañia</a></li>
                                    <li><a href="#">Equipo</a></li>
                                    <li><a href="#">Créditos</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>Gamex</h3>
                                <p>Somos una empresa que se dedica a desarrollar videojuegos, aportando a la sociedad etretenimiento y enseñanza. Ademas de desarrollar sistemas que ayuden a la sociedad a la educación.</p>
                            </div>
                            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                        <p class="copyright">Gamex © 2021</p>
                    </div>
                </footer>
            </div>
            <script src="{{ asset('js/jquery-3.2.1.j')}}"></script>
            <script src="{{ asset('js/scripts.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
@endsection