<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $personas = [
            [
                'nombre' => 'Daniel',
                'altura' => 1.73,
                'email' => 'danielmarcoborboto@gmail.com',
            ],
            [
                'nombre' => 'Roberto',
                'altura' => 1.76,
                'email' => 'roberto@gmail.com',
            ],
            [
                'nombre' => 'Miguel Angel',
                'altura' => 1.96,
                'email' => 'miguelangel@gmail.com',
            ],
            [
                'nombre' => 'Marcos',
                'altura' => 1.75,
                'email' => 'marcos@gmail.com',
            ],
            [
                'nombre' => 'Alejandro',
                'altura' => 1.74,
                'email' => 'alejandro@gmail.com',
            ],
        ];
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>

        <?php for($i = 0; $i < count($personas); $i++): ?>
            <tr>
                <td><?= $personas[$i]['nombre'] ?></td>
                <td><?= $personas[$i]['altura'] ?></td>
                <td><?= $personas[$i]['email'] ?></td>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>