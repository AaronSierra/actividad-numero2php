<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Apartir de una fecha de nacimiento calcular la edad actual de la persona. </h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Fecha nacimiento:</label>
                                    <input type="date" class="form-control" name="fecha">
                                </div>
                            
                                <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                      </div>
                  </form>

                  <div class="alert alert-success">
                         <p>Tu tienes "0" Años</p>
                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio</a></p>
              </div>
          </div>


      </div>
</body>
</html>