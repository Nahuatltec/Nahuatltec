@extends('layouts.faq')

@section('title', 'FAQ')

@section('content')
            <div class="login_box">

            <style type="text/css">
                :root {
                --primario: #4091EC;
                --gris-claro: #B8B8B8;
                --sombra: 0 0 13px 0 rgba(185,185,185, .25);
                }

                * {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                }

                body {
                    background: #f8fafb;
                    font-family: 'Roboto', sans-serif;
                }

                main {
                    max-width: 1000px;
                    width: 90%;
                    margin: 40px auto;
                }

                .titulo {
                    color: #3a3a3a;
                    font-weight: 650;
                    text-align: center;
                    margin: 40px 0;
                }

                /*! =================================================*/
                /*! ============= Categorias ============= */
                /*! =================================================*/
                .categorias {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 20px;
                    margin-bottom: 40px;
                }

                .categoria {
                    cursor: pointer;
                    text-align: center;
                    padding: 20px;
                    border-radius: 10px;
                    background: #fff;
                    font-weight: 700;
                    color: var(--gris-claro);
                    border: 2px solid transparent;
                    transition: .3s ease all;
                }

                .categoria:hover {
                    box-shadow: var(--sombra);
                    color: #4D77FF;
                }

                .categoria:hover path {
                    fill: var(--primario);
                }

                .categoria svg {
                    width: 64px;
                    margin-bottom: 10px;
                }

                .categoria path {
                    fill: var(--gris-claro);
                    transition: .3s ease all;
                }

                .categoria.activa {
                    border: 2px solid var(--primario);
                    color: #4D77FF;
                }

                .categoria.activa path {
                    fill: var(--primario);
                }

                /*! =================================================*/
                /*! ============= Contenedor Preguntas ============= */
                /*! =================================================*/
                .contenedor-preguntas {
                    display: none;
                    grid-template-columns: 1fr;
                    gap: 40px;
                }

                .contenedor-preguntas.activo {
                    display: grid;
                }

                .contenedor-pregunta {
                    background: #fff;
                    padding: 40px;
                    border: 2px solid transparent;
                    border-radius: 10px;
                    overflow: hidden;
                    transition: .3s ease all;
                    cursor: pointer;
                }

                .contenedor-pregunta:hover {
                    box-shadow: var(--sombra);
                }

                .contenedor-pregunta.activa {
                    border: 2px solid var(--primario);
                }

                /*! =================================================*/
                /*! ============= Preguntas ============= */
                /*! =================================================*/
                .pregunta {
                    font-weight: 700;
                    font-size: 20px;
                    line-height: 20px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .pregunta img {
                    width: 14px;
                }

                .respuesta {
                    color: #808080;
                    line-height: 30px;
                    max-height: 0;
                    opacity: 0;
                    transition: .3s ease all;
                }

                .contenedor-pregunta.activa .respuesta {
                    opacity: 1;
                    margin-top: 20px;
                }

                .contenedor-pregunta.activa img {
                    transform: rotate(45deg);
                }

                /*! =================================================*/
                /*! ============= Responsive Design ============= */
                /*! =================================================*/
                @media screen and (max-width: 820px){
                    .categorias {
                        grid-template-columns: 1fr 1fr;
                    }

                    .categoria {
                        padding: 10px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 5px;
                    }

                    .categoria svg {
                        width: 30px;
                        margin-right: 10px;
                        margin-bottom: 0;
                    }
                }

                @media screen and (max-width: 500px){
                    .categorias {
                        grid-template-columns: 1fr;
                    }
                }
            </style>

            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
            
            <main>
            <h1 class="titulo">Preguntas Frecuentes</h1>
            <div class="categorias" id="categorias">
			<div class="categoria activa" data-categoria="metodos-pago">
            <img src="https://i.ibb.co/g7xQHpt/info.png" alt="info">
				<p>Informacion General</p>
			</div>
			<div class="categoria" data-categoria="entregas">
            <img src="https://i.ibb.co/Xjsdg1H/contenido.png" alt="contenido">
				<p>Contenido</p>
			</div>
			<div class="categoria" data-categoria="seguridad">
            <img src="https://i.ibb.co/yfz0SBc/seguridad.png" alt="seguridad">
                <p>Seguridad</p>
			</div>
			<div class="categoria" data-categoria="cuenta">
                <img src="https://i.ibb.co/ZdPGZCp/cuenta.png" alt="cuenta" >
				<p>Cuenta</p>
			</div>
		</div>

		<div class="preguntas">

			<div class="contenedor-preguntas activo" data-categoria="metodos-pago">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Que es Nahuatltec? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec es una plataforma de aprendizaje del lenguaje nahuatl la cual mediante diferentes métodos y estrategias como actividades de lectura, escritura, audios, videos, etc, te harán disfrutar del mejor contenido para que tu aprendizaje sea  muy entretenido y sobre todo adecuado para cualquier tipo de usuario. </p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Puedes aprender a hablar Nahuatl con fluidez? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec se caracteriza por ser una plataforma que mediante diferente información que respalda la validez del idioma nahuatl en la plataforma, asegura una lectura base y avanzada, además de poder incluso pronunciar correctamente las palabras y oraciones que se presenten, teniendo una libertad de aprender los temas que sean mas de agrado para el usuario.</p>
				</div>
                <div class="contenedor-pregunta">
					<p class="pregunta">¿Cuanto cuesta Nahuatltec? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec actualmente tiene un valor indefinido, por lo que esta en procesos y fases de prueba, la cual tiene pensado en lanzarse al mercado en una fecha próxima y además contara con una temporada gratuita y otra de paga. </p>
				</div>
			</div>

			<div class="contenedor-preguntas" data-categoria="entregas">
            <div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo aprender con Nahuatltec? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">En nahuatltec tenemos varias formas entretenidas y divertidas de aprender, contamos con métodos y estrategias para que el usuario mediante la temporada pueda ir aprendiendo conforme a su nivel, existen lecturas, escritura, audios, videos. Etc. </p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Cuales son los metodos y estrategias de aprendizaje? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Existen diferentes formas de aprender y obtener un nivel en nahuatltec, conforme a algun tema elegido por el usuario, se pueden presentar diferentes actividades y  pruebas para obtener puntos en la temporada. </p>
				</div>
                <div class="contenedor-pregunta">
					<p class="pregunta">¿Que se obtiene al finalizar una temporada en Nahuatltec? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">El usuario obtiene una calificación conforme a los puntos que obtuvo en la temporada actual, y además dependiendo el tiempo invertido o aprendido en la plataforma puede tener regalos como vidas u oportunidades que podrían ser de gran ayuda. </p>
				</div>
			</div>

			<div class="contenedor-preguntas" data-categoria="seguridad">
                <div class="contenedor-pregunta">
					<p class="pregunta">¿Mi informacion esta segura? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">La informacion que Nahuatltec administra de cada usuario, es completamente para fines de obtener una descripción de los usuarios que ingresan a la plataforma y el uso de estos datos no presentan un riesgo para los mismos usuarios.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Las suscripciones son seguras? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">.Las suscripciones se realizaran mediante las temporadas, la cual depende del tipo de temporada, gratuita o de paga, esta ultima no teniendo un precio de compra definido.</p>
				</div>
                <div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo tener acceso a mis datos personales? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec en el modulo de editar el usuario, tiene la información personal, de domicilio y de usuario, para poder modificar y consultar cuando el usuario lo requiera.</p>
				</div>
			</div>

			<div class="contenedor-preguntas" data-categoria="cuenta">
                <div class="contenedor-pregunta">
					<p class="pregunta">¿Como me registro e inicio sesión? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec en el modulo de iniciar sesión y regístrate, se pueden realizar los procesos que requiera el usuario.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo recuperar mi contraseña? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec en el modulo de iniciar sesión, al iniciar sesion, si el usuario no recuerda su contraseña, tiene la opcion de poder recuper la contraseña, ingresando los datos necesarios para poder recuperarla.</p>
				</div>
                <div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo cambiar mi nombre de usuario? <img src="https://i.ibb.co/Q8L6m9s/mas.png" alt="mas"></p>
					<p class="respuesta">Nahuatltec en el modulo de editar el usuario, se puede modificar y consultar la información cuando el usuario lo requiera.</p>
				</div>
			</div>




            </div>
            </main>

            <script >
                const categorias = document.querySelectorAll('#categorias .categoria');
                const contenedorPreguntas = document.querySelectorAll('.contenedor-preguntas');
                let categoriaActiva = null;

                categorias.forEach((categoria) => {
                    categoria.addEventListener('click', (e) => {
                        categorias.forEach((elemento) => {
                            elemento.classList.remove('activa');
                        });

                        e.currentTarget.classList.toggle('activa');
                        categoriaActiva = categoria.dataset.categoria;


                        // Activamos el contenedor de preguntas que corresponde
                        contenedorPreguntas.forEach((contenedor) => {
                            if(contenedor.dataset.categoria === categoriaActiva){
                                contenedor.classList.add('activo');
                            } else {
                                contenedor.classList.remove('activo');
                            }
                        });
                    });
                });
            </script>
            <script>
                const preguntas = document.querySelectorAll('.preguntas .contenedor-pregunta');
                preguntas.forEach((pregunta) => {
                    pregunta.addEventListener('click', (e) => {
                        e.currentTarget.classList.toggle('activa');

                        const respuesta = pregunta.querySelector('.respuesta');
                        const alturaRealRespuesta = respuesta.scrollHeight;
                        
                        if(!respuesta.style.maxHeight){
                            // Si esta vacio el maxHeight entonces ponemos un valor.
                            respuesta.style.maxHeight = alturaRealRespuesta + 'px';
                        } else {
                            respuesta.style.maxHeight = null;
                        }

                        // [Opcional] Reiniciamos las demas preguntas
                        preguntas.forEach((elemento) => {
                            // Solamente queremos ejecutar el codigo para las preguntas que no 
                            // sean la pregunta a la que le dimos click.
                            if(pregunta !== elemento){
                                elemento.classList.remove('activa');
                                elemento.querySelector('.respuesta').style.maxHeight = null;
                            }
                        });


                    });
                });
            </script>
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