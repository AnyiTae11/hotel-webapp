<?php
include_once('bdhotel'); // Conectamos a la base de datos
$consulta = laConsulta();  // Ejecutamos la función que llama la consulta
?>
 
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Listar Tabla</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  
  <body>
    <div class="main">
      <header>
        <div class="row">
          <div class="col-xs-12">
            <h1><img src="./img/logo.png"/></h1>
          </div>
        </div>
      </header>

     
      <div class="row">
        <div class="col-xs-12">
          <h3>Listar una Tabla de Base de Datos en PHP</h3>
              <!-- Tabla donde se listará la consulta --> 
              <table class="table table-striped"> 
                <thead>
                  <tr>
                    <th width="100">correo</th>
                    <th width="250">Telefono</th>
                    <th width="200">HoradeEntrada</th>
                    <th width="200">HoradeSalida</th>
                    <th width="200">Formadepago</th>

                  </tr>
                </thead>
                <tbody>
                <!-- Generamos el listado vaciando las variables de la consulta en la tabla -->
                  <?php 
                  while($persona = $consulta->fetch_assoc()) //Creamos un array asociativo con fetch_assoc 
                  {
                  ?>
                    <tr>
                      <td><?php echo $persona['correo']; ?></td>
                      <td><?php echo $persona['Telefono']; ?></td>
                      <td><?php echo $persona['HoradeEntrada']; ?></td>
                      <td><?php echo $persona['HoradeSalida']; ?></td>
                      <td><?php echo $persona['Formadepago']; ?></td>

                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
        </div>
    </div>
    

    <footer class="row">
      <div class="col-xs-12">
        <div>
          Derechos Reservados 2107
        </div>
      </div>
    </footer>
    <div>
  </body>
    
</html>