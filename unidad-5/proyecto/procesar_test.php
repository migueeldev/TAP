<?php
// procesar_test.php
require_once 'conexion.php';



// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$respuestas = "";

$puntaje = ["a" => 0, "b" => 0, "c" => 0];

// Procesar preguntas 1 a 10
for ($i = 1; $i <= 10; $i++) {
    if (isset($_POST["p$i"])) {
        $respuesta = $_POST["p$i"];
        $respuestas .= $respuesta;
        $puntaje[$respuesta]++;
    }
}

// Determinar estilo predominante
$mayor = max($puntaje);
$estilo = array_search($mayor, $puntaje);

switch ($estilo) {
    case "a": $diagnostico = "Kinestésico"; break;
    case "b": $diagnostico = "Auditivo"; break;
    case "c": $diagnostico = "Visual"; break;
    default: $diagnostico = "Indefinido";
}

// Insertar en base de datos
$sql = "INSERT INTO resultados (nombre, correo, respuestas, resultado) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombre, $correo, $respuestas, $diagnostico);
$stmt->execute();
$stmt->close();
$conexion->close();

// Mostrar resultado
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Resultado</title></head>
<body>
<h2>Resultado del Test</h2>
<p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
<p><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></p>
<p><strong>Estilo de aprendizaje predominante:</strong> <?php echo $diagnostico; ?></p>
<a href="index.html">Volver al inicio</a>
</body>
</html>
