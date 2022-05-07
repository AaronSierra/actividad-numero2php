<?php
if (isset($_GET['second'] ))  {
    $second=$_GET['second'];
    $minute= number_format($second/60);
    $hour= number_format($second/3600);
}
?>
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
                <h1>Ingresar segundos y calcular la cantidad en: <strong>Horas, Minutos y segundos</strong></h1>
              <div class="col-md-8 col-md-offset-2">
                  <form action="">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Ingresar Segundos:</label>
                                    <input type="number" class="form-control" name="second" value=<?= $second ?>>
         </div>
            <button type="submit" value="calcular" class="btn btn-primary pull-right">Enviar</button>
             </div>
             </div>
            </form>
          <div class="alert alert-success">
           <p>Horas: "<?= $hour ?>"</p>
       <p>Minutos: "<?= $minute ?>"</p>
      <p>Segundos: "<?= $second ?>" </p>
           </div>
         <p class="text-center"><a href="../index.php">Ir al inicio</a></p>
              </div>
          </div>


      </div>
</body>
</html>