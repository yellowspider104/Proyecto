<?php 

  include_once('controller/proyecto.php');

  $proyecto = new Proyecto();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Vista Proyecto</title>
</head>
<body>

<h1>Proyectos</h1>
<h4>Vista de los avances de proyectos.</h4>

<table border="2px;">
  <th>Proyectos</th>
  <tr>
    <th>Numero Proyecto</th>  
    <th>Nombre Proyeto</th>  
    <th>Descripcion Proyecto</th>  
    <th>Fecha Inicio</th>  
    <th>Fecha Termino</th>  
    <th>Estado</th>  
    <th>Encargado</th>  
  </tr> 

        <?=$proyecto->get_proyectos();?>

</table>

</body>
</html>