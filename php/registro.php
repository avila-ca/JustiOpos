<?php
    include 'display_errors.php';
// Conexión a la base de datos
include 'connection_bd.php';
// Obtener datos del formulario
session_start();
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$contrasena = hash("sha512", $_POST["contrasena"]);

// Validar datos (puedes agregar más validaciones según tus necesidades)
if (empty($nombre) || empty($apellidos) || empty($correo) || empty($contrasena)) {
    echo "Por favor, completa todos los campos.";
} else {
    // Consulta preparada para prevenir la inyección SQL
    $sql = "INSERT INTO usuarios (nombre, apellidos, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $apellidos, $correo, $contrasena);
    
    if ($stmt->execute()) {
        $_SESSION['mail'] = $_POST['correo'];
        $_SESSION['contrasena'] = $_POST['contrasena'];
        header("Location: login.php");
        echo "Registro exitoso. ¡Bienvenido!";
    } else {
        echo "Error en el registro: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>

