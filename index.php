<?php

session_start();

$seccion = "inicio.html";
if (isset($_GET['s'])) {
    $seccion = $_GET['s'];
}elseif(isset($_SESSION['usuario_id']) && $_SESSION['usuario_id'] == 3){
    $seccion = 'admin.html';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustiOpos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="imag/ico" href="img/iconoJO.ico">
</head>

<body>
    <div class="container">
        <?php
        echo 'hola    name = ' . isset($_SESSION['name']) . ' islogged = ' . isset($_SESSION['islogged']), $seccion;
        if (isset($_SESSION['islogged'])) {
            require("secciones/headerOut.html");
            ?>
            <script>let name = `<?php echo $_SESSION['name']; ?>`;</script>
            <?php
        } else {
            require("secciones/headerIn.html");
        }
        if ($seccion != "registro.html" && $seccion != "login.html") {
            require("secciones/nav.html");
        }
        ?>
        <main>
            <?php require("secciones/$seccion"); ?>
            <?php if ($seccion == "inicio.html") {
                require("secciones/tarjeta.html");
            } ?>

        </main>
        <?php require("secciones/footer.html"); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>