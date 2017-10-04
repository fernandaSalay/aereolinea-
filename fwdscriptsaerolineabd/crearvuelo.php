
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aerolinea</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    </style>
  </head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Main Menu</a>
    </div>
    </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1></h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
    <h2> Vuelo </h2>

    <form action="addV.php" method="GET">
    <div class="form-inline">
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Fecha de Vuelo</label>
        <INPUT onkeypress="return isNumberKey(event)"  type="time"  name="fecha_v" required><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Precio </label>
      <INPUT onkeypress="return isNumberKey(event)"  type="int"  name="precio" required><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Matricula de Avion </label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="matricula" required><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Numero de Ruta </label>
      <INPUT onkeypress="return isNumberKey(event)" type="int" name="no_ruta" required><br><br>
 <button type="submit" class="btn bt-right btn-primary btn-lg" value="crearvuelo">Crear un nuevo Vuelo</button>
        </form>
      </div>
      
      <div class="col-xs-4">
      <div id="btn-add">
      <a class="btn btn-large btn-info" href="mantenimiento.php"><img src="elim.png" width="75" height="75" class="img-rounded"/></a><br>
    </div>
    </div>

    <div class="col-xs-4">
    <div id="btn-add">
      <a class="btn btn-large btn-info" href="modifyA.php"><img src="edit.png" width="75" height="75" class="img-rounded"/></a><br>
    </div>
    </div>


  <br>
  <hr>
    
    </form>
 
 
</body>
</html>