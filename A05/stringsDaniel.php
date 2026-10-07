<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizando una frase</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $frase = 'El análisis de las cifras de población permitió llevar a cabo un estudio de los cambios de la ciudad durante los últimos años, teniendo en cuenta los datos de cada barrio y las opiniones de los habitantes de la zona.';
    ?>

    <p>Frase original: <?php echo $frase; ?></p>
        
    <p>Frase del revés: <?php echo strrev($frase); ?></p>

    <p>Posición de cifras: <?php echo strpos($frase, 'cifras'); ?></p>

    <?php 
        $posicionCabo = strpos($frase, 'cabo'); 
    ?>

    <p>Subcadena a partir de 'cabo': <?php echo substr($frase, $posicionCabo + 4); ?></p>

    <p>Número de veces que aparece 'de': <?php echo substr_count($frase, 'de'); ?></p>

</body>
</html>