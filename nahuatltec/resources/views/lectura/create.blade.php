
@extends('layouts.base');

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection
@section('title', 'Lecturas')

@section('contenido')
<div class="h1_style"><h1>CREAR REGISTROS</h1></div>


<form action="/lecturas" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contenido</label>
    <input id="contenido" name="contenido" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Foto</label>
    <input id="foto" name="foto" type="file" class="form-control" tabindex="5">
  </div>
    
  <a href="/lecturas" class="btn btn-danger" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
@section('footer')
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
        @section('js')
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
            <script src="{{ asset('js/loader.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
            <script>$(document).ready(function() {
                $('#lecturas').DataTable();
            } );</script>

        @endsection 
@endsection 