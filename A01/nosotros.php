<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros | La Casa de las Plantas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/A01/includes/nav.inc.php'; 
    ?>

    <main>

        <h1>Sobre nosotros</h1>

        <img src="img/tienda.jpg" alt="Interior de La Casa de las Plantas">

        <section>
            <h2>La Casa de las Plantas</h2>

            <p>
                Somos una pequeña tienda especializada en productos de jardinería
                para cuidar y decorar tus plantas. En nuestra tienda encontrarás
                herramientas, macetas, fertilizantes y semillas para empezar o
                mejorar tu pequeño jardín.
            </p>

            <p>
                Nuestro objetivo es ofrecer productos sencillos y prácticos para
                que cualquier persona pueda disfrutar de la jardinería en casa.
            </p>
        </section>

        <section>
            <h2>¿Dónde nos puedes encontrar?</h2>

            <p>
                Calle de las Flores, 24<br>
                46500 Sagunto, Valencia
            </p>
        </section>

        <section>
            <h2>Contacto</h2>

            <form>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">

                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" rows="6"></textarea>

                <button type="reset">Borrar</button>
                <button type="submit">Enviar</button>
            </form>
        </section>

    </main>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/A01/includes/footer.inc.php';
    ?>
    
</body>
</html>