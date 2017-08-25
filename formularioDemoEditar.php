 <div class="container">
  <h2>Editar</h2>


<?php 
  $id = $_GET["id"];
  echo "valor de Demo es: " .$id;
  include_once('Demo.php');
  include_once('DemoCollector.php');
  $demoCollectorObj = new DemoCollector();
  $objDemo = $demoCollectorObj->showDemo($id);


  print_r($objDemo);
?>

    <form action="actualizar.php" method="post"> 
    
      <fieldset>
        <label>ID: </label>
           <input type="text" name="iddemo" value="<?php echo $objDemo->getIdDemo();?>"readonly />
        <label>Nombre:</label>
           <input type="text" name="nombre" value="<?php echo $objDemo->getNombre();?>" autofocus required>

           <label>Fecha:</label>
           <input type="text" name="fecha" value="<?php echo $objDemo->getFecha();?>" autofocus required>
    <a href="">Cancelar </a>
     <button type="submit">Guardar</button>
     </fieldset>
    </form> 
    </div>