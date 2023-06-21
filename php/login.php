<?php
	include 'display_errors.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'connection_bd.php';
        session_start();

        $mail = mysqli_real_escape_string($conn, $_POST["mail"]);
        $pass = mysqli_real_escape_string($conn, hash("sha512", $_POST["pass"]));

        $query = "SELECT id, email, password FROM usuarios WHERE email = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $result = $stmt->get_result();
        //print_r( $result);
        if($result->num_rows == 1){
           $row = $result->fetch_assoc();
           
           if ($pass == $row["password"]){
            $_SESSION["usuario_id"] = $row["id"];
            echo "de lujo...";
           }else{
            echo "pass incorrecto";
           }
        //	header("HTTP/1.1 302 Moved Temporarily"); 
        //	header("Location: principal.php");
        }else{
            echo "Correo electronico no registrado";
        }
        $stmt->close();
        // Realizar la validación de las credenciales
    /*  if ($mail == "usuario_correcto" && $pass == "contraseña_correcta") {
            // Las credenciales son válidas, se puede iniciar sesión
            // Aquí puedes realizar acciones como establecer una sesión de usuario
            echo "Inicio de sesión exitoso";
        } else {
            // Las credenciales no son válidas, mostrar un mensaje de error
            echo "Error mail o contraseña";
        }*/
        $conn->close();
}

?>
