
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- Estilos personal CSS -->
     <link rel="stylesheet" href="css/materialize/css/materialize.min.css">
     <link rel="stylesheet" href="../sistema/css/login/animations.css">
     <link rel="stylesheet" href="../sistema/css/login/a_estilo.css" >
  
     <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  </head>
  <style>
  body {
    background-image: url('./img/thumb-1920-3827.jpg');
    background-size: cover;
  }
  .derecha{
    background-image: url('./img/thumb-1920-373.jpg');
    background-size: cover;
  }

  </style>
<body>
    <form class="slideUp" method="POST" action="auntenticando.php">
    <div id="login"class="z-depth-5"  >
            <div id="sistema" >
                <h2>Jorinacha</h2>
                <div class="row">
                    <div class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          
                          <input type="text" id="autocomplete-input" name="user" class="autocomplete">
                          <label for="autocomplete-input">Usuario</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          
                          <input type="password" name="pass" id="autocomplete-input" class="autocomplete">
                          <label for="autocomplete-input" >Contraseña</label>
                        </div>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn ">Entrar</button>
                <br>
               <!--  <a href="../resumen.php" class="btn blue darken-1 ">Ver Resumen Diario</a>
                <a href="../monitoreo_remotos/usuarios_remotos.php" class="btn blue darken-1">Usuarios Conectado</a> -->
            </div>

            
           <div class="derecha">
                <div id="invitado">
                    <h4>Ver Resumen Diario</h4>
                  
                    
                   </div>
                </div>
            </div>
 
        
            
            </div>
    </form>


        

    </div>
    
    

    <script src="css/materialize/js/materialize.min.js"></script>

  </body>
</html>

