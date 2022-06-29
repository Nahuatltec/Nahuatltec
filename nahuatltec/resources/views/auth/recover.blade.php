@extends('layouts.log')

@section('title', 'Recuperar')

@section('content')
            <div class="login_box">
                <form method="post" action="" class="text_box2">
                    @csrf
                    <h1>Recuperar contraseña</h1>
                    <label for="">Email</label>
                    <input type="email" placeholder="Ingresa tu Email" id="email" name="email" value="{{ old('email')}}">
                    @error('email')
                    <p class="message">{{$message}}</p>
                    @enderror
                    <a class="verde"><input type="submit" value="Enviar"> </a>
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
                                    <li><a href="{{ route('notices.index')}}">Normas de la comunidad</a></li>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
@endsection