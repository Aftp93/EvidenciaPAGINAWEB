<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='../imgs/imagesofspace.ico' type='image/x-icon' sizes="16x16" />

    <link rel="stylesheet" href="../plugins/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    </head>
<body>

<?php

$usuario = $_POST["idusuario"];
$nombre = $_POST["idnombre"];
$apellido = $_POST["idapellido"];
$edad = $_POST["idedad"];
$correo = $_POST["idcorreo"];
?>

<div>
<table class="table">
  <thead class="thead-light">
    <tr>
    <th scope="col">Número</th>
      <th scope="col">Tipo de dato</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td> Usuario</td>
      <td><?php echo $usuario; ?></td>
    </tr>
    <tr>
      
    <th scope="row">2</th>
    <td>Nombre</td>
      <td><?php echo $nombre; ?></td>
    </tr>
    <th scope="row">3</th>
    <td>Apellido</td>
      <td><?php echo $apellido; ?></td>
    </tr>
    <th scope="row">4</th>
    <td>Edad</td>
      <td><?php echo $edad; ?></td>
    </tr>
    <th scope="row">5</th>
    <td>Correo</td>
     
      <td><?php echo $correo; ?></td>
    </tr>
  </tbody>
</table>
</div>


<form action="index.html" class="form-box animated fadeInup">
        <button type="submit">Volver</button>
    </form>

<script type="text/javascript" src="../plugins/jQuery/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../plugins/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>