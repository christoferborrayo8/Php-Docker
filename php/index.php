<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP Simple</title>
</head>
<body>

    <header>
        <h1>Bienvenido a mi Página PHP</h1>
    </header>

    <section>
        <?php
            $fecha_actual = date("d/m/Y H:i:s");
            echo "<p>La fecha y hora actual es: $fecha_actual</p>";
        ?>
    </section>

    <footer>
        <p>© <?php echo date("Y"); ?> Mi Página PHP</p>
    </footer>

</body>
</html>