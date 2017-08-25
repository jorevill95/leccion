<?php
include_once("DemoCollector.php"); //Include one solo incluye una sola vez
				/*El demoCollector.php es el que envía
				el arreglo d demos*/


$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  && " .$c->getNombre();                                     
  echo "</div>"; 
}


?>
