<?php 
if (isset($_GET['id'])){
	include('database.php');
	$estu = new Database();
	$id=intval($_GET['id']);
	$res = $estu->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>