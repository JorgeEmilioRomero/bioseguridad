<?php
session_start();

if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1) {

    header('location: ../../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Huellas</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><b>Panel de administrador y reportes Huellas</b></h2>
                    </div>
                </div>
            </div><br><br>
            <div>
                Sesión de administrador como <?php echo ucfirst($_SESSION['nombre']); ?>
                <a href="../../controller/cerrarSesion.php"><br>
                    <button type="button" name="button">Cerrar sesion</button>
                </a>
            </div><br><br>
            <div>
                <h2><b>Metricas y reportes del Website</b></h2>
            </div><br><br>
            <div>
                <iframe width="1100" height="800" src="https://msit.powerbi.com/view?r=eyJrIjoiNzRjNGMxNDctMTg1Zi00ZjJhLThhMDUtYzlhYzU4NTMwOGU1IiwidCI6IjcyZjk4OGJmLTg2ZjEtNDFhZi05MWFiLTJkN2NkMDExZGI0NyIsImMiOjV9" frameborder="0" allowFullScreen="true"></iframe>
            </div><br><br>
            <div>
                <h2><b>Reporte de seguridad base de datos MySql en Azure</b></h2>
            </div><br><br>
            <iframe width="1100" height="800" src="https://msit.powerbi.com/view?r=eyJrIjoiMDA5NzhjZWQtYjk5NS00ZTRjLWEzOGQtMzRjNzcyNTk3ZDU3IiwidCI6IjcyZjk4OGJmLTg2ZjEtNDFhZi05MWFiLTJkN2NkMDExZGI0NyIsImMiOjV9" frameborder="0" allowFullScreen="true"></iframe>
            <div><br><br>
                <h2><b>Formulario de contacto y estado de pedido</b></h2>
            </div><br><br>
            <table class="table table-bordered" width="933">
                <thead>
                    <tr>
                        <th>IdContacto</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Ciudad</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <?php
                include('database.php');
                $estu = new Database();
                $listado = $estu->read();
                ?>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_object($listado)) {
                        $id = $row->idContacto;
                        $nombre = $row->nombre;
                        $apellido = $row->apellido;
                        $correo = $row->correo;
                        $telefono = $row->telefono;
                        $ciudad = $row->ciudad;
                        $descripcion = $row->descripcion;
                        $estado = $row->estado;

                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $apellido; ?></td>
                            <td><?php echo $correo; ?></td>
                            <td><?php echo $telefono; ?></td>
                            <td><?php echo $ciudad; ?></td>
                            <td><?php echo $descripcion; ?></td>
                            <td><?php echo $estado; ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="delete.php?id=<?php echo $id; ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>