<?php

    require_once "conexion.php";
    $conexion = conexion();

    $consulta = "SELECT * FROM alumnos";
    $query = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="post">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Escribe tu nombre">
                    <br>
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Escribe tu apellido">
                    <br>
                    <input type="text" class="form-control mb-3" name="nie" placeholder="Escribe tu NIE">
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>NIE</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombres'] ?></td>
                            <td><?php echo $row['apellidos'] ?></td>
                            <td><?php echo $row['nie'] ?></td>
                            <td>
                                <a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>