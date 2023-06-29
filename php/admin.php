<?php
	include 'display_errors.php';
    
if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'connection_bd.php';

$tema = $_POST['tema'];
$pregunta = $_POST['pregunta'];
$opcion1 = $_POST['opcion1'];
$opcion2 = $_POST['opcion2'];
$opcion3 = $_POST['opcion3'];
$opcion4 = $_POST['opcion4'];
$opcion_correcta = $_POST['opcion_correcta'];

// Insertar la pregunta en la base de datos
$sql = "INSERT INTO preguntas (tema, pregunta, opcion1, opcion2, opcion3, opcion4, opcion_correcta) 
        VALUES ('$tema', '$pregunta', '$opcion1', '$opcion2', '$opcion3', '$opcion4', '$opcion_correcta')";

if ($conn->query($sql) === TRUE) {
    echo "Pregunta guardada correctamente";
} else {
    echo "Error al guardar la pregunta: "; //. $conn->error;
}

$conn->close();
}else{
    echo 'No se recibió el formulario correctamente';
}
?>