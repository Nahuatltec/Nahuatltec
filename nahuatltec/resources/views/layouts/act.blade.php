<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') -Nahuatltec</title>
        
        <script src="//code.tidio.co/esxehyukwlr0yncqiksrwj4125uhrdfk.js" async></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
        <style>
    * {
      transition: all 0.3s;
    }

    body {
      background: cadetblue;
      padding: 0;
      margin: 0;
      text-align: center;
      font-family: calibri;
      font-size: 120%;
    }

    .contenedor {
      width: 98vw;
      height: 97vh;
      display: inline-flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .encabezado {
      position: relative;
      background: white;
      min-width: 300px;
      width: 70%;
      max-width: 600px;
      padding: 10px;
    }

    .categoria {
      opacity: 0.3;
      text-align: left;
    }

    .pregunta {
      padding: 10px;
    }

    .imagen {
      object-fit: cover;
      height: 0px;
      width: 0px;
    }

    .btn {
      background: white;
      width: 60%;
      max-width: 550px;
      padding: 10px;
      margin: 5px;
      cursor: pointer;
    }

    .btn:hover {
      transform: scale(1.05);
    }
    
    .numero{
      position: absolute;
      opacity:0.3;
      top: 10px;
      right: 10px;
    }
    
    .puntaje{
      padding:10px;
      color:white;
    }
  </style>
        @yield('content')
    </body>
</html>