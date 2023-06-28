<?php
session_start();
echo 'logoustsadsadasdasdad';
unset($_SESSION["usuario_id"]);
unset($_SESSION['name']);
unset($_SESSION['logged_in']);
echo $_SESSION["usuario_id"], $_SESSION['name'], $_SESSION['logged_in'];
session_destroy();
header("Location: ../index.php");
?>