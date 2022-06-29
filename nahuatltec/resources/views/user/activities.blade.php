@extends('layouts.act')

@section('title', 'Activities')

@section('content')
    
<div class="contenido_v3">
    <div class="act_cont">
        <div class="puntaje" id="puntaje"></div>
        <div class="type_box">
            <div class="categoria" id="categoria">Frutas</div>
            <div class="numero" id="numero">1</div>
        </div>
        <div class="title_box">
          <div class="pregunta" id="pregunta">¿Que es esto?</div>
          <img src="img/leon.png" class="imagen" id="imagen">
        </div>
        <div class="question_box">
            <div class="btn" id="btn1" onclick="oprimir_btn(0)">Perro</div>
            <div class="btn" id="btn2" onclick="oprimir_btn(1)">Gato</div>
            <div class="btn" id="btn3" onclick="oprimir_btn(2)">Caballo</div>
            <div class="btn" id="btn4" onclick="oprimir_btn(3)">Cerdo</div>
        </div>
        <script src="activities.js"></script>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
@endsection