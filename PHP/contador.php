<?php
	require_once("../conexion.php");
	
	$insert = "UPDATE contador SET visitas = visitas + 1 WHERE idVisita = 1;";
	$update = $sen->query($insert);
?>