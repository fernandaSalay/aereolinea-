
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
    <h2> Tripulantes </h2>

    <form action="addT.php" method="GET">
    <div class="form-inline">
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Idiomas que domina</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="idiomas" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Estudios Realizados</label>
      <INPUT onkeypress="return isNumberKey(event)"  type="text"  name="estudios_realizados" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Experiencia</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="experiencia" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Horas de vuelo Realizadas</label>
      <INPUT onkeypress="return isNumberKey(event)" type="int" name="horas_vuelo" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Nombre del Tripulante </label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="nombre_t" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Nacionalidad</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="nacionalidad" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Correo Electronico</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="email" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Contacto de Emergencia</label>
      <INPUT onkeypress="return isNumberKey(event)" type="int" name="contacto_emergencia" required><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Tiempo de Pertenecer en la Empresa</label>
      <INPUT onkeypress="return isNumberKey(event)" type="int" name="tiempo_pertenecer" required><br><br><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Puesto</label>


      <select class="form-horizontal" name="nombre_p" >
        
        <option value="0">Selección:</option>
        <?php
                    
          $nombre_p = $_GET["nombre_p"];
          $con = pg_connect("host=localhost dbname=aerolinea user=postgres password=romelia1997");  
          $query = "select * from puesto";

       

pg_close($con);

        ?>



      </select><br><br>

      
<br>
<br>
 <button type="submit" class="btn bt-right btn-primary btn-lg" value="crear"> Crear nuevo tripulante</button>
        </form>
      </div>
<br>
<br>

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
<br>
<br>

<br>
<hr>
<hr>
<hr>
<br>
<br>
<br>
<br>


    <h2> Puesto </h2>

    <form action="addP.php" method="GET">
    <div class="form-inline">
      
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Puesto</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="nombre_p" required><br><br>
<br>
<br>
 <button type="submit" class="btn bt-right btn-primary btn-lg" value="crear"> Crear nuevo puesto</button>
        </form>
      </div>


<br>
<br>


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
    

 
 
</body>
</html>