<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM persons;");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Personas</title>

    <!--Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- Utilizacion de bootstrap-->
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center">Lista de Personas Registradas</h2>
        <!-- Tabla -->
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>URL</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($personas as $persona){ ?>
                <tr>
                    <td><?php echo $persona->id ?></td>
                    <td><?php echo $persona->nombre ?></td>
                    <td><?php echo $persona->email ?></td>
                    <td><?php echo $persona->url ?></td>
                    <td><?php echo $persona->estado ?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>

                <!--Boton de volver al formulario -->
        <div class="text-center mt-3">
            <a href="formulario.html" class="btn btn-primary">Volver al Formulario</a>
        </div>
    </div>
</body>
</html>
