<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Ejercicios Estructuras</title>
  </head>
  <body>

  <div class="container"><br>
    <div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
        
    <h2> INICIO DE SESION </h2>
    <hr>
    <form method="post" action="">
        
   
    <div class="form-group">
        <label for="usuario">Usuario: </label>
        <input id="usuario" class="form-control" type="text" name="usuario" value="angie" required>
    </div>
    <div class="form-group">
        <label for="password"> Password: </label>
        <input id="password" class="form-control" type="password" name="password" value="luna" required>

        <a href="https://"> ¿Olvido la contraseña? </a>
        <br>
        <div class="form-group">
    <input class="btn btn-success" type="submit" name="submit" value="ENVIAR"></button>
    </form>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>