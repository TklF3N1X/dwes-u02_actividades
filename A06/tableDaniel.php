<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $fila;
        $columna;

        echo "<table>";

        for ($fila = 0; $fila <= 10; $fila++) {
            echo "<tr>";

            for ($columna = 0; $columna <= 10; $columna++) {

                if ($fila == 0) {
                    echo "<th>$columna</th>";
                } elseif ($columna == 0) {
                    echo "<th>$fila</th>";
                } else {
                    echo "<td>" . ($fila * $columna) . "</td>";
                }
            }

            echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html>