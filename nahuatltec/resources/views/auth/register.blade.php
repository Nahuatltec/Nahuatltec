@extends('layouts.reg')

@section('title', 'Registro')

@section('content')
            <div class="login_box">
                <form method="post" action="" class="text_box">
                    @csrf
                    <h1>Crear Cuenta</h1>
                    <label for="">Edad</label>
                    <input type="text" placeholder="Edad" id="age" name="age" value="{{ old('age')}}">
                    @error('age')
                    <p class="message">{{$message}}</p>
                    @enderror
                    <label for="">Nombre</label>
                    <!-- @php
                        $input ="<script>alert('hola mundo');</script>"
                    @endphp -->
                    <input type="text" placeholder="Nombre" id="name" name="name" value="{{ old('name')}}" oninput="validar(this)">
                    <!-- {!!Purify::clean($input)!!} -->
                    @error('name')
                    <p class="message">{{$message}}</p>
                    @enderror
                    <label for="">Email</label>
                    <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email')}}">
                    @error('email')
                    <p class="message">{{$message}}</p>
                    @enderror
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="Contraseña" id="password" name="password" value="{{ old('password')}}" oninput="copy(this)">
                    @error('password')
                    <p class="message">{{$message}}</p>
                    @enderror
                    <label for="">Confirmar contraseña</label>
                    <input type="password" placeholder="Confirmar Contraseña" id="password_confirmation" name="password_confirmation" oninput="copy(this)">
                    @error('password_confirmation')
                    <p class="message">{{$message}}</p>
                    @enderror
                    
                    <a class="verde"><input type="submit" value="Crear Cuenta"> </a> 
                    <a class="aviso" href="{{ route('notices.index')}}">Avisos de privacidad</a>
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