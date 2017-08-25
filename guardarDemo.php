<?php
  session_start();


?>

<!--  Por método POST se env{an varibles de tama{o ilimitado-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sesión con PHP y Cookies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  
  $nombre=$_POST["user"];
  $dia=$_POST["dia"];
  $mes=$_POST["mes"];
  $anio=$_POST["anio"];
  echo("hola ".htmlspecialchars($nombre).'!');




 
  include_once("DemoCollector.php");
  $DemoCollectorObj = new DemoCollector();
  $DemoCollectorObj->createDemo($nombre, $anio, $mes, $dia);

  echo "<a href='index.php'>Volver</a>";
?>





</body>
</html>