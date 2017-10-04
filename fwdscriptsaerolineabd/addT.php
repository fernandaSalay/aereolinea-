<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>aerolinea</title>

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
    </nav>
    </div>

<?php
 

$idiomas = $_GET["idiomas"];
$estudios_realizados = $_GET["estudios_realizados"];
$experiencia = $_GET["experiencia"];
$horas_vuelo = $_GET["horas_vuelo"];
$nombre_t = $_GET["nombre_t"];
$nacionalidad = $_GET["nacionalidad"];
$email = $_GET["email"];
$contacto_emergencia = $_GET["contacto_emergencia"];
$tiempo_pertenecer = $_GET["tiempo_pertenecer"];
$nombre_p = $_GET["nombre_p"];

 $con = pg_connect("host=localhost dbname=aerolinea user=postgres password=romelia1997");  


$query = "INSERT INTO tripulantes VALUES ('$idiomas', '$estudios_realizados', '$experiencia',$horas_vuelo,'$nombre_t', '$nacionalidad','$email',$contacto_emergencia,$tiempo_pertenecer,'$nombre_p')";  

$result = pg_query($query) or die('Query failed: ' . pg_last_error());
echo 'El registro fue insertado exitosamente<br>';

pg_close($con);

?>
    <div class="container">
     <center>
         <a href="index.html">Regresar</a>
     </center>
    </div>
  </body>
</html>
