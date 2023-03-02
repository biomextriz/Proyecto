<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];

$conexion = mysqli_connect('localhost', 'usuario', 'contraseña', 'formulario');

if (mysqli_connect_errno()) {
  echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
  exit();
}

$sql = "INSERT INTO datos_formulario (nombre, correo, edad, ciudad) VALUES ('$nombre', '$correo', $edad, '$ciudad')";

if (mysqli_query($conexion, $sql)) {
  echo "Datos insertados correctamente";
} else {
  echo "Error al insertar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
