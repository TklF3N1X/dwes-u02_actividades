<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $num1 = 10;
        $num2 = 20;

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;
        $modulo = $num1 % $num2;
    ?>

    <h1>Operaciones Matemáticas</h1>

    <p>Suma: <?php echo $suma; ?></p>
    <p>Resta: <?php echo $resta; ?></p>
    <p>Multiplicación: <?php echo $multiplicacion; ?></p>
    <p>División: <?php echo $division; ?></p>
    <p>Módulo: <?php echo $modulo; ?></p>

    <?php
        if($num1 > $num2) {
            echo "<p>$num1 es mayor que $num2</p>";
        } elseif($num1 < $num2) {
            echo "<p>$num1 es menor que $num2</p>";
        } else {
            echo "<p>$num1 es igual a $num2</p>";
        }

        if($num1 % 2 == 0) {
            echo "<p>$num1 es un número par</p>";
        } else {
            echo "<p>$num1 es un número impar</p>";
        }

        if($num2 % 2 == 0) {
            echo "<p>$num2 es un número par</p>";
        } else {
            echo "<p>$num2 es un número impar</p>";
        }
    ?>

</body>
</html>