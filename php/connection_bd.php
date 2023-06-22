<?php
$servername = "localhost";  // Nombre del servidor (puede variar)
$username = "root";  // Nombre de usuario de MySQL
$password = "root";  // Contraseña de MySQL
$database = "preguntas";  // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
/*   CONSULTA Y ENTRADA
 *
 *
$query = "SELECT * FROM Usuarios";

$result = $conn->query($query);



        if(mysqli_num_rows($result) != 0){ //esto no funciona
            echo "Usuario validado";
    }else{
            echo "Datos usuario incorrectos";
    }

/*
$sql = "INSERT INTO Usuarios (email, password) 
	VALUES ('juan@gmail.com', '1234')";

if ($conn->query($sql) === TRUE){
	echo 'Nueva entrada realizada';
}else{
	echo 'Error entrada';
}
 */
?>
