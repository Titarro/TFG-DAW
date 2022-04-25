<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garda</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="../css/estilos_admin.css">
    
</head>
<body>
    <div id="header">
        <div class="logo">
          <a>Cucine d'Italia</a>
        </div>  
        <nav>
          <ul>
            <li>
              <a href="./index_admin.php">Inicio</a>
            </li>
            <li>
              <a href="./usuarios.php">Usuarios</a>     
            <li>
              <a href="./pedidos.php">Pedidos</a>
            </li>
            <li>
              <a href="./lista_pedidos.php">Lista Pedidos</a>
            </li>
            <li>
              <a href="./productos_admin.php">Productos</a>
            </li>
          </ul>
        </nav>
      </div>
    
<section>
  <h1>Productos</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Categoria</th>
          <th>Imagen</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <?php 
        include('../php/conexion_be.php');
        $resultado = $conexion -> query("SELECT * FROM productos");
        while($fila = mysqli_fetch_array($resultado)){ 
    ?>
    <table cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><?php echo $fila['codp'];?></td>
          <td><?php echo $fila['nomp'];?></td>
          <td><?php echo $fila['desp'];?></td>
          <td><?php echo $fila['preciop'];?> €</td>
          <td><?php echo $fila['categoriap'];?></td>
          <td><img src="../images/productos/<?php echo $fila['imagp'];?>" width="50px" height="50px"></td>
        </tr>
        
      </tbody>
    </table>
    <?php } ?>
  </div>
</section>





</body>
</html>