<?php
session_start();
?>
<html>
<head>

<title>sesion php cookie</title>
<script type="text/javascript" src="js/java.js"></script>

</head>

<body>
<div id="main">

<?php

$id=$_GET["id"];

include_once('DemoCollector.php');

$DemoCollectorObj = new DemoCollector();

$DemoCollectorObj->deleteDemo($id);

echo "valor id". htmlspecialchars($id)." ha sido eliminado.";

?>

<div> <a href="index.php">Volver Inicio </a> </div>

</div>

</body>
</html>
