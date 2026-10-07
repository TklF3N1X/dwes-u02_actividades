<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Casa de las Plantas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/A01/includes/nav.inc.php'; 
    ?>

    <main>

        <h1>Catálogo</h1>

        <section class="productos">

            <article class="producto">
                <img src="img/maceta.jpg" alt="Maceta">
                <h2>Maceta</h2>
                <p>8,50 €</p>
            </article>

            <article class="producto">
                <img src="img/fertilizante.jpg" alt="Fertilizante">
                <h2>Fertilizante</h2>
                <p>6,90 €</p>
            </article>

            <article class="producto">
                <img src="img/pala.jpg" alt="Pala de jardinería">
                <h2>Pala</h2>
                <p>9,50 €</p>
            </article>

            <article class="producto">
                <img src="img/regadera.jpg" alt="Regadera">
                <h2>Regadera</h2>
                <p>12,00 €</p>
            </article>

            <article class="producto">
                <img src="img/hierbabuena.jpg" alt="Semillas de hierbabuena">
                <h2>Semillas de hierbabuena</h2>
                <p>5,00 €</p>
            </article>

        </section>

    </main>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/A01/includes/footer.inc.php';
    ?>

</body>
</html>