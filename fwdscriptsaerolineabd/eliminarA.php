<!DOCTYPE html>
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
    </nav>
    </div>

<?php
  $matricula = $_GET["matricula"];

  $con = pg_connect("host=localhost dbname=aerolinea user=postgres password=romelia1997") or die('Could not connect: ' . pg_last_error());

  $query = ("SELECT matricula From avion Where matricula=$matricula");
  $result = pg_query($query) or die ('Query failed: ' . pg_last_error());
  $FLAG = true;
 

  while ($line = pg_fetch_array($result, PGSQL_ASSOC)) {
    echo "No se puede eliminar porque esta siendo utilizada.";
    $FLAG = false;
  }

  if($FLAG) {
    $query1 = "DELETE FROM avion WHERE matricula=$matricula";
    $result1 =pg_query($query1) or die('Query failed: ' . pg_last_error());
    echo 'El resultado ha sido eliminado exitosamente';
  }
  pg_close($con);

?>
    <div class="container">
     <center>
         <a href="crear.php">Regresar</a>
     </center>
    </div>
  </body>
</html>
