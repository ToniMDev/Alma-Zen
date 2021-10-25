<?php
include("conect_class.php");

$id = $_GET['id']; // el id de la empresa

// 4. Y los mostramos tambien en el DOM

$sql = "SELECT * FROM empresas
    WHERE id = $id;
";
$MyBBDD->consulta($sql);

$fila = $MyBBDD->extraerRegistro();
echo "<h1>" . $fila['Nombre_Empresa'] . "</h1>";
echo "<p> TABLA INVENTARIO  <p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo $fila['Nombre_Empresa']; // El nombre de cada empresa aparecerá en la pestaña del navegador
        ?>
    </title>
</head>
<body>
    
</body>
</html>