<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenando Datos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $numeros = [7, 3, 9, 2, 5, 1, 8, 4, 6, 10];

        echo "<h1>Array original</h1>";
        echo "<p>";
        foreach ($numeros as $numero) {
            echo $numero . " ";
        }
        echo "</p>";

        for ($i = 0; $i < count($numeros) - 1; $i++) {
            $indiceMinimo = $i;

            for ($j = $i + 1; $j < count($numeros); $j++) {
                if ($numeros[$j] < $numeros[$indiceMinimo]) {
                    $indiceMinimo = $j;
                }
            }
            $temporal = $numeros[$i];
            $numeros[$i] = $numeros[$indiceMinimo];
            $numeros[$indiceMinimo] = $temporal;
        }

        echo "<h2>Array ordenado</h2>";
        echo "<p>";
        foreach ($numeros as $numero) {
            echo $numero . " ";
        }
        echo "</p>";
    ?>
</body>
</html>