<?php
include('conexion.php');

$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Correo = $_POST['correo'];
$Telefono = $_POST['telefono'];
$Ciudad = $_POST['ciudad'];
$Mensaje = $_POST['mensaje'];

$insertar = "INSERT INTO `contacto`(`nombre`, `apellido`, `correo`, `telefono`, `ciudad`, `descripcion`, `estado`) 
        VALUES ('$Nombre','$Apellido','$Correo','$Telefono','$Ciudad','$Mensaje', 'en espera')";

$query = mysqli_query($sen, $insertar);

if ($query) {
	echo "<script>alert('Datos guardados exitoxamente')
			document.location.href='index.html';</script>";
} else {
	echo "Error de Conexion a la base de datos";
}
