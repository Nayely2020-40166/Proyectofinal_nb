<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link  rel="stylesheet" href="diseño.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>USARIO</title>
  </head>
  <body>

  
  <a class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  MENÚ
</a>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">BIENVENIDOS</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Aqui podra desplazarse para poder ver mas sobre nuestros productos y tiendas 😊✨
    </div><br><br>
    <div class="d-grid gap-2">
    <a class="btn btn-info btn-lg" href="index.html" type="button">INICIO</a> <br><br>
    <a class="btn btn-warning btn-lg" href="tienda.php" type="button">TIENDAS</a><br><br>
    <a class="btn btn-danger btn-lg" href="contactenos.php" type="button">CONTACTENOS</a>
    <br></br>
       
  
    </div>
  </div>
</div>




      <br><br><br>
    <center> 
        <div class="card" style="width: 18rem;">
          <img src="imagenes/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            
        <form action="validar.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">USUARIO</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user"
              placeholder="&#xf007" style="font-family: 'Font Awesome 5 free'; font-weight: 700;">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CONTRASEÑA</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="&#xf084"
              style="font-family: 'Font Awesome 5 free'; font-weight: 700;">
          </div>
    
          <center>
            <input type="submit" value="Aceptar" class="btn btn-dark">
          </center>
        
      </form>
      </div>
      </div>
      </div>
    </center>


    


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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>