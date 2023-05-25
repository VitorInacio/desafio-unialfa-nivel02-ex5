<?php
  if ($_POST){
    require "recupera-dados.php";
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <form class="row g-3" method="POST">
          <label for="nome" class="form-label">Nome:</label>
          <input type="text" name="nome" id="nome" class="form-control" minlength="6" required >
          
          <br>

          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" required >

          <br>

          <label for="idade">Idade:</label>
          <input type="number" name="idade" id="idade" class="form-control" required >

          <br>

          <label for="hobbie">Hobbie:</label>
          <input type="text" name="hobbie" id="hobbie" class="form-control" required >

          <br>

          <button type="submit" class="btn btn-success mb-3">Enviar</button>

      </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  </body>
  </body>
</html>