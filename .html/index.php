<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
</head>

<body>
    <h1>ALMA-ZEN</h1>

    <div>
        <p>Inicio Sesión</p>

        <form action=".php/main.php" method="POST">
            <p>Nombre: <input type="text" /></p>
            <p>Contraseña: <input type="password" /></p>
        </form>
    </div>

    <?php
    include(".php/conect_class.php");
  
    if (isset($_POST['tema'])) {
        $tema = $_POST['tema'];
        $contenido = $_POST['contenido'];
        $sql = "INSERT INTO temas (nombre, contenido)
        VALUES ('$tema', '$contenido');";
        $MyBBDD->consulta($sql);
    }

    // 2. Los mostramos en el DOM.

    $sql = "SELECT * FROM temas;";
    $MyBBDD->consulta($sql);
    ?>

    <footer>Juan Antonio Amil y Antonio Marín</footer>
</body>

</html>