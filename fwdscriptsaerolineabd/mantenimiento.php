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
  <h1 class="text-center"></h1><hr>


  <div class="panel panel-default col-sm-7">
    <div class="panel-heading">
    </div>
  <div class="panel-body"> 

<?php

$con = pg_connect("host=localhost dbname=aerolinea user=postgres password=romelia1997") or die('Could not connect: ' . pg_last_error());

$query = "select * from avion order by matricula";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$CodigoJ=0;
$NombreJ="";
$HoraEntrada="";
$HoraSalida="";


$marca = "";
$modelo = "";
$capacidadcombustible = 0;
$capacidadpeso = 0;
$millasrecorridas = 0;
$matricula = "";

echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Marca</b></th>\n";
echo "\t\t<th>Modelo</th>\n";
echo "\t\t<th>Capacidad de Combustible</th>\n";
echo "\t\t<th>Capacidad Peso</th>\n";
echo "\t\t<th>Millas Recorridas</th>\n";
echo "\t\t<th>matricula</th>\n";
echo '<th></th>';
echo "\t</tr>\n";

while ($line = pg_fetch_array($result, PGSQL_ASSOC)) {


$marca = $line["marca"];
$modelo = $line["modelo"];
$capacidadcombustible = $line["capacidadcombustible"];
$capacidadpeso = $line["capacidadpeso"];
$millasrecorridas = $line["millasrecorridas"];
$matricula = $line["matricula"];

   

   echo "\t<tr>\n";
   echo "\t\t<td>$marca</td>\n";
   echo "\t\t<td>$modelo</td>\n";
   echo "\t\t<td>$capacidadcombustible</td>\n";
   echo "\t\t<td>$capacidadpeso</td>\n";  
   echo "\t\t<td>$millasrecorridas</td>\n";  
   echo "\t\t<td>$matricula</td>\n";  
   echo "\t\t<td><a href=eliminarA.php?matricula=$matricula>Eliminar</a></td>\n";
   echo "\t\t<td><a href=modificarA.php?marca=$marca&modelo=$modelo&capacidadcombustible=$capacidadcombustible&capacidadpeso=$capacidadpeso&millasrecorridas=$millasrecorridas&matricula=$matricula>Modificar</a></td>\n";
   echo "\t</tr>";
}



pg_close(con);


?>
<!-- 
</div>
</div>
</div>

<?php

//$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

//$query = "select * from departamento order by CodigoD";
///$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error($link));

//$CodigoD=0;
//$NombreD="";

//echo "<table class=\"table\">\n";
// echo "\t<tr>\n";
//echo "\t\t<th><b>Codigo de departamento</b></th>\n";
//echo "\t\t<th>Nombre de departamento</th>\n";
//echo '<th></th>';
//echo '<th></th>';
//echo "\t</tr>\n";

//while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   //$CodigoD=$line["codigoD"];
   //$NombreD=$line["nombreD"];

   //echo "\t<tr>\n";
   //echo "\t\t<td>$CodigoD</td>\n";
   //echo "\t\t<td>$NombreD</td>\n";
   //echo "\t\t<td><a href=eliminarD.php?CodigoD=$CodigoD>Eliminar</a></td>\n";
   //echo "\t\t<td><a href=modificarD.php?CodigoD=$CodigoD&NombreD=$NombreD>Modificar</a></td>\n";
   //echo "\t</tr>\n";
}
//echo "</table>\n";

//mysqli_close($link);

?>

<?php

//$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

//$query = "select * from empleado order by CodigoE";
//$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error($link));

//$CodigoD=0;
//$NombreD="";

//echo "<table class=\"table\">\n";
//echo "\t<tr>\n";
//echo "\t\t<th><b>Codigo de empleado</b></th>\n";
//echo "\t\t<th>Nombre de empleado</th>\n";
//echo "\t\t<th>Codigo de departamento</th>\n";
//echo "\t\t<th>Nombre de jornada</th>\n";
//echo '<th></th>';
//echo '<th></th>';
//echo "\t</tr>\n"; 

//while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   //$CodigoE=$line["codigoE"];
   //$NombreE=$line["nombreE"];
   //$CodigoD=$line["codigoD"];
   //$NombreJ=$line["nombreJ"];

   //echo "\t<tr>\n";
   //echo "\t\t<td>$CodigoE</td>\n";
   //echo "\t\t<td>$NombreE</td>\n";
   ///echo "\t\t<td>$CodigoD</td>\n";
   //echo "\t\t<td>$NombreJ</td>\n";

   //echo "\t\t<td><a href=eliminarE.php?CodigoE=$CodigoE>Eliminar</a></td>\n";
   //echo "\t\t<td><a href=modificarE.php?CodigoE=$CodigoE&NombreE=$NombreE&CodigoD=$CodigoD&NombreJ=$NombreJ>Modificar</a></td>\n";
   //echo "\t</tr>\n";
}
//echo "</table>\n";

///mysqli_close($link);

?> -->

  </body>
  </html>