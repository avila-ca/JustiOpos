<?php
require("connection_bd.php");

$tema = "tema_elegido";  // El tema seleccionado por el usuario

// Consulta para obtener las preguntas del tema seleccionado
$query = "SELECT * FROM preguntas WHERE tema = '$tema'";
$result = mysqli_query($conn, $query);

// Verificar si se obtuvieron resultados
if (mysqli_num_rows($result) > 0) {
    // Procesar los resultados
    while ($row = mysqli_fetch_assoc($result)) {
        // Acceder a los campos de la fila
        $pregunta = $row["pregunta"];
        $respuesta_correcta = $row["respuesta_correcta"];
        // ...
    }
}
?>