<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $persona = [
            'nombre' => 'Daniel',
            'apellidos' => 'Marco Borbotó',
            'email' => 'danielmarcoborboto@gmail.com',
            'fechaNacimiento' => '11/07/2007',
            'telefono' => '612345678',
        ];
    ?>
    <h1>Ficha personal</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Fecha de nacimiento</th>
            <th>Teléfono</th>
        </tr>
        <tr>
            <td><?= $persona['nombre'] ?></td>
            <td><?= $persona['apellidos'] ?></td>
            <td><?= $persona['email'] ?></td>
            <td><?= $persona['fechaNacimiento'] ?></td>
            <td><?= $persona['telefono'] ?></td>
        </tr>
    </table>
    
</body>
</html>