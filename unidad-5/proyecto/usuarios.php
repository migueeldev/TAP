<?php
// usuarios.php

require_once 'conexion.php';

// Consultar todos los resultados
$sql = "SELECT nombre, correo, respuestas, resultado, fecha FROM resultados ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultados del Test</title>
  <style>
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
    th { background-color: #f2f2f2; }
  </style>
</head>
<body>
  <h2>Lista de Usuarios y Resultados</h2>
  <a href="index.html">Volver al inicio</a>
  <br><br>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Respuestas</th>
      <th>Resultado</th>
      <th>Fecha</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) { ?>
      <tr>
        <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
        <td><?php echo htmlspecialchars($fila['correo']); ?></td>
        <td><?php echo htmlspecialchars($fila['respuestas']); ?></td>
        <td><?php echo $fila['resultado']; ?></td>
        <td><?php echo $fila['fecha']; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>

<?php
$conexion->close();
?>
