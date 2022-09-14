<?php 
    $nombre = "Jesús";
    function getNombre () {
         $nombre = "Hesús";
        return "Mi nombre es " . $nombre;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>Página Hola</h1>
    <?php if ($nombre == "David") { ?>
        Eres David
    <?php } else { ?> 
        <p style="background-color: green">NO eres David, <?= $nombre ?> </p>

    <?php } ?>

</body>
</html>
