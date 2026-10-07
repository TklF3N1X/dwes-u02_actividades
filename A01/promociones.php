<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones | La Casa de las Plantas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/A01/includes/nav.inc.php'; 
    ?>

    <main>

        <h1>Promociones</h1>

        <p>
            En La Casa de las Plantas hemos preparado varios packs para que puedas
            conseguir todo lo necesario para cuidar tus plantas a un precio especial.
        </p>

        <p>
            Las promociones están pensadas para combinar algunos de nuestros productos
            más utilizados en jardinería.
        </p>

        <section class="promociones">

            <article class="promocion">

                <h2>Pack Cultiva</h2>

                <p>
                    Compra una pala de mano junto con un fertilizante universal
                    y consigue el pack por solo <strong>14,90 €</strong>.
                </p>

                <p>
                    Precio por separado: 16,40 €
                </p>

                <img src="img/pack-cultiva.jpg" alt="Pack Cultiva">

            </article>

            <article class="promocion">

                <h2>Pack Cuida tus plantas</h2>

                <p>
                    Llévate una regadera pequeña y una maceta decorativa
                    por solo <strong>17,90 €</strong>.
                </p>

                <p>
                    Precio por separado: 20,50 €
                </p>

                <img src="img/pack-cuida.jpg" alt="Pack Cuida tus plantas">

            </article>

            <article class="promocion">
                

                <h2>Pack Huerto en casa</h2>

                <p>
                    Combina una maceta, semillas de hierbabuena y fertilizante
                    universal por solo <strong>16,90 €</strong>.
                </p>

                <p>
                    Ideal para empezar a cultivar tus propias plantas aromáticas.
                </p>

                <img src="img/pack-huerto.jpg" alt="Pack Huerto en casa">
                
            </article>

        </section>

    </main>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/A01/includes/footer.inc.php';
    ?>

</body>
</html>