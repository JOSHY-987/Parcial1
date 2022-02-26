<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AJAX</title>
    <?php require_once "Menu.php"?>
  </head>
  <body>

  <br>

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                <h2>Nuevo Cliente con AJAX</h2>

                    <hr>

                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input id="codigo" class="form-control" type="text" name="codigo">
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" class="form-control" type="text" name="nombres">
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos">
                    </div>

                    <div class="form-group">
                        <label for="dui">DUI</label>
                        <input id="dui" class="form-control" type="text" name="dui">
                    </div>

                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input id="direccion" class="form-control" type="text" name="direccion">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input id="telefono" class="form-control" type="int" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <button class="btn btn-primary" id="enviar" type="button">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <br>
        <div id="Msg">
        </div>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="Ajax/Funcion.js"></script> 
  </body>
</html>