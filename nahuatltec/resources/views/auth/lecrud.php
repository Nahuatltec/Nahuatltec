<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
        <title>Lecturacrud</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fonts/icon.css">
        <link rel="stylesheet" href="css/stylef.css">
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/estilos.css'">
        <link rel="stylesheet" href="css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//code.tidio.co/esxehyukwlr0yncqiksrwj4125uhrdfk.js" async></script>
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        
    </head>
    <body>
      
    <div class="conten_user">
            <header>
                        <div class="header-content">
                            <div class="logos">
                                <a class="h1" href="/user"><h1>Nahuatl<b>Tec</b></h1></a>
                            </div>
                            <li><p class="text-xl">Bienvenido</p></li> 
                            <div class="menu" id="show-menu">
                                <nav>
                                    <ul>
                                        <li><a href="/user"> <i class="fas fa-headset"></i><span class="icon-color-palette"></span> Actividades</a></li>
                                        <li><a href="/lecrud"> <i class="fas fa-headset"></i><span class="icon-book"></span> Lecturas</a></li>
                                        <li><a href="/season"> <i class="fas fa-headset"></i><span class="icon-badge"></span> Temporada</a></li>
                                        <li><a href=""> <i class="fas fa-headset"></i><span class="icon-store-front"></span> Tienda</a></li>
                                        <li><a href="/logout"> <i class="fas fa-headset"></i><span class="icon-close-outline"></span> Salir</a></li>
                                    </ul>
                                </nav>
                            </div>
                            
                        </div>

            </header>
        </div>
      

  <div id="app">
    <v-app>
      <v-main>   
       <!--<h2 class="text-center">CRUD usando APIREST con Node JS</h2>-->
       <!-- Botón CREAR -->  
       <v-flex class="text-center align-center">
       <v-btn class="mx-2 mt-4"  fab dark color="#6BCF33" @click="formNuevo()"><v-icon dark>mdi-plus</v-icon></v-btn>           
       </v-flex>              
         
        <v-card class="mx-auto mt-5" color="transparent" max-width="1350" elevation="8">                    
      
        <!-- Tabla y formulario -->
        <v-simple-table class="mt-8">
            <template v-slot:default>
                <thead>
                    <tr class="indigo darken-4">
                      <th class="white--text">ID</th>
                        <th class="white--text">CODIGO</th>
                        <th class="white--text">TITULO</th>
                        <th class="white--text">DESCRIPCIÓN</th>
                        <th class="white--text">FOTO</th>
                        <th class="white--text text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="lectura in lecturas" :key="lectura.id">
                    <td>{{ lectura.id }}</td>
                    <td>{{ lectura.codigo }}</td>
                    <td>{{ lectura.titulo }}</td>
                    <td>{{ lectura.descripcion }}</td>
                    <td>{{ lectura.foto }}</td>
                    <td>
                        <v-btn fab dark color="#2F9FF1" small @click="formEditar(lectura.id, lectura.codigo, lectura.titulo, lectura.descripcion, lectura.foto)"><v-icon>mdi-pencil</v-icon></v-btn>
                        <v-btn fab dark color="#F1442F" small @click="borrar(lectura.id)"><v-icon>mdi-delete</v-icon></v-btn>
                    </td>
                    </tr>
                </tbody>
            </template>
        </v-simple-table>
        </v-card>        
      <!-- Componente de Diálogo para CREAR y EDITAR -->
      <v-dialog v-model="dialog" max-width="500">        
        <v-card>
          <v-card-title class="green darken-2 white--text">Lecturas</v-card-title>    
          <v-card-text>            
            <v-form>             
              <v-container>
                <v-row>
                  <input v-model="lectura.id" hidden></input>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="lectura.codigo" label="Codigo" solo required>{{lectura.codigo}}</v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="lectura.titulo" label="Titulo" solo required>{{lectura.titulo}}</v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="lectura.descripcion" label="Descripción" solo required>{{lectura.descripcion}}</v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="lectura.foto" label="Foto" solo required>{{lectura.foto}}</v-text-field>
                  </v-col>
                </v-row>
              </v-container>            
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click="dialog=false" color="blue-grey" dark>Cancelar</v-btn>
            <v-btn @click="guardar()" type="submit" color="blue darken-2" dark>Guardar</v-btn>
          </v-card-actions>
          </v-form>
        </v-card>
      </v-dialog>
      </v-main>
    </v-app>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vuetify/2.5.7/vuetify.min.js" integrity="sha512-BPXn+V2iK/Zu6fOm3WiAdC1pv9uneSxCCFsJHg8Cs3PEq6BGRpWgXL+EkVylCnl8FpJNNNqvY+yTMQRi4JIfZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>

    let url = 'http://localhost:8000/api/lecturas/';

    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
       data() {
        return {            
            lecturas: [],
            dialog: false,
            operacion: '',            
            lectura:{
                id: null,
                codigo:'',
                titulo:'',
                descripcion:'',
                foto:''
            }          
        }
       },
       created(){               
            this.mostrar()
       },  
       methods:{          
            //MÉTODOS PARA EL CRUD
            mostrar:function(){
              axios.get(url)
              .then(response =>{
                this.lecturas = response.data;                   
              })
            },
            crear:function(){
                let parametros = {codigo:this.lectura.codigo, titulo:this.lectura.titulo, descripcion:this.lectura.descripcion, foto:this.lectura.foto };                
                axios.post(url, parametros)
                .then(response =>{
                  this.mostrar();
                }); 
                this.lectura.codigo="";
                this.lectura.titulo="";
                this.lectura.descripcion="";
                this.lectura.foto="";
            },                        
            editar: function(){
              let parametros = {codigo:this.lectura.codigo,titulo:this.lectura.titulo,descripcion:this.lectura.descripcion, foto:this.lectura.foto, id:this.lectura.id };
            //console.log(parametros);                   
                 axios.put(url+this.lectura.id, parametros)                            
                  .then(response => {                                
                     this.mostrar();
                  })                
                  .catch(error => {
                      console.log(error);            
                  });
            },
            borrar:function(id){
             Swal.fire({
                title: '¿Confirma eliminar el registro?',   
                confirmButtonText: `Confirmar`,                  
                showCancelButton: true,                          
              }).then((result) => {                
                if (result.isConfirmed) {      
                      //procedimiento borrar
                      axios.delete(url+id)
                      .then(response =>{           
                          this.mostrar();
                       });      
                      Swal.fire('¡Eliminado!', '', 'success')
                } else if (result.isDenied) {                  
                }
              });              
            },

            //Botones y formularios
            guardar:function(){
              if(this.operacion=='crear'){
                this.crear();                
              }
              if(this.operacion=='editar'){ 
                this.editar();                           
              }
              this.dialog=false;                        
            }, 
            formNuevo:function () {
              this.dialog=true;
              this.operacion='crear';
              this.lectura.codigo='';
              this.lectura.titulo='';
              this.lectura.descripcion='';
              this.lectura.foto='';
            },
            formEditar:function(id, codigo, titulo, descripcion, foto){
              //capturamos los datos del registro seleccionado y los mostramos en el formulario
              this.lectura.id = id;
              this.lectura.codigo = codigo;
              this.lectura.titulo = titulo;
              this.lectura.descripcion = descripcion;                            
              this.lectura.foto = foto;                      
              this.dialog=true;                            
              this.operacion='editar';
            }
       }      
    });
  </script>
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
</body>
</html> 