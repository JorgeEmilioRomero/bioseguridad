<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actualizar registros huellas</title>
<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Editar <b>mensaje</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("database.php");
				$estu= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$telefono = $estu->sanitize($_POST['telefono']);
					$apellido = $estu->sanitize($_POST['apellido']);
					$correo = $estu->sanitize($_POST['correo']);
                    $telefono = $estu->sanitize($_POST['telefono']);
                    $ciudad = $estu->sanitize($_POST['ciudad']);
                    $descripcion = $estu->sanitize($_POST['descripcion']);
                    $estado = $estu->sanitize($_POST['estado']);
                    
                    $id_cliente=intval($_POST['id_cliente']);
					$res = $estu->update($codest, $apellido, $correo, $id_cliente);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_cliente=$estu->single_record($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="telefono" id="telefono" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->nombre;?>">
					<input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
				</div>
				<div class="col-md-6">
					<label>Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->apellido;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
                </div>
                <div class="col-md-6">
				    <label>Correo:</label>
                    <input type="text" name="correo" id="correo" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->correo;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
                </div>
				<div class="col-md-6">
					<label>Telefono:</label>
                    <input type="text" name="telefono" id="telefono" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->telefono;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
				</div>
				<div class="col-md-6">
				    <label>Ciudad:</label>
                    <input type="text" name=ciudad" id="ciudad" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->ciudad;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
                </div>
                <div class="col-md-6">
				    <label>Descripcion:</label>
                    <input type="text" name=descripcion" id="descripcion" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->descripcion;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
                </div>
                <div class="col-md-6">
				    <label>Estado:</label>
                    <input type="text" name=estado" id="estado" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->estado;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
                </div>
				<div>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>