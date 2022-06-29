@extends('layouts.act')

@section('title', 'Activity')

@section('content')

<div class="contenedor">
    <div class="puntaje" id="puntaje"></div>
    <div class="encabezado">
      <div class="categoria" id="categoria">
      </div>
      <div class="numero" id="numero"></div>
      <div class="pregunta" id="pregunta">
      </div>
      <img src="#" class="imagen" id="imagen">
    </div>
    <div class="btn" id="btn1" onclick="oprimir_btn(0)"></div>
    <div class="btn" id="btn2" onclick="oprimir_btn(1)"></div>
    <div class="btn" id="btn3" onclick="oprimir_btn(2)"></div>
    <div class="btn" id="btn4" onclick="oprimir_btn(3)"></div>
    
</div>
<script src="{{ asset('js/activities_animales.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
@endsection