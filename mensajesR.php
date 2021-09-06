<?php include('conexion.php'); ?>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link  rel="stylesheet" href="diseññ.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>MENSAJES_RECIBIDOS</title>
  </head>
  <body>

  <div class="btn-group w-100" role="group" aria-label="Basic example">
      <a class="btn btn-outline-warning" href="index.html" role="button">Inicio</a>
      <a class="btn btn-outline-info" href="tienda.php" role="button">Tienda</a>
      <a class="btn btn-outline-danger" href="contactenos.php" role="button">Contáctenos</a>
    </div>

    <br><br><br>
    <div class="container"><font color="#FDFEFE " size=10 face="Candara">Mensajes Recibidos</font></div>
    <br><br>
  


    <div class="container">
    <table class="table table-secondary table-hover">
    <thead>
    <tr>
      <th scope="col">NO.MENSAJE</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">TELEFONO / CELULA</th>
      <th scope="col">CORREO ELECTRONICO</th>
      <th scope="col">MENSAJE</th>
    </tr>
  </thead>
  </tbody>
              <?php
              $query = "SELECT * FROM mensajes ";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td> <?php echo $row ['nomensaje'] ?></td>
                  <td> <?php echo $row ['nombre'] ?></td>
                  <td> <?php echo $row ['telefono'] ?> </td>
                  <td> <?php echo $row ['correo'] ?> </td>
                  <td> <?php echo $row ['mensaje'] ?> </td>
              
                
                  </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        </div>
        


<br><br><br>
<table class="table table-dark table-striped" style="text-align:center;">
  <thead>
    <tr>
      <th  scope="col" align="center">PBX:59777301 DIRECCIÓN:3Ave. 0-007 Col.Tamarindos 2 ZONA 21 </th>
      <th align="center" scope="col">CARNÉ: 2020-40166</th>
       <th scope="col" align="center">NOMBRE: NAYELY BANESSA BARRIENTOS DE LEÓN</th>
    </tr>
  </thead>
</table>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    
</body>
</html>