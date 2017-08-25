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


    include_once("DemoCollector.php"); 


$id =1;

$DemoCollectorObj = new DemoCollector();

  echo "<a href='formularioDemoInsert.php'>Nuevo</a>";

  echo "<br><br>";
foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  --> " .$c->getNombre() ." " .$c->getFecha();
  echo "<a href='formularioDemoEditar.php?id=" .$c->getIdDemo()."'>Editar </a><a href='eliminar.php?id=" .$c->getIdDemo() ."'>Eliminar </a>";                                     
  echo "</div>"; 
}



?>






</body>
</html>

