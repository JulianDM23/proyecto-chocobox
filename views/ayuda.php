<?php
// Obtener el nombre de la página actual
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoBox</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>

    <header class="header">

        <div class="contenedor">
            <div class="barra">
                <!-- Cambié el enlace de logo para que apunte a usuario.php -->
                <a class="logo" href="usuario.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Choco<span class="logo__bold">Box</span></h1>
                </a>

                <nav class="navegacion">
                    <!-- Corregir los enlaces de navegación -->
                    <a href="nosotros.php" class="navegacion__enlace <?php echo ($current_page == 'nosotros.php') ? 'activo' : ''; ?>">Nosotros</a>
                    <a href="recetas.php" class="navegacion__enlace <?php echo ($current_page == 'recetas.php') ? 'activo' : ''; ?>">Recetas</a>
                </nav>
            </div>
        </div>

        <div class="header__texto">
            <h2 class="no-margin">ChocoBox con consejos y cursos</h2>
            <p class="no-margin">Aprende de los expertos con los mejores recetas y consejos</p>
        </div>

    </header>

    <main class="contenedor">
        <h3 class="centrar-texto">Ideas</h3>

        <div class="contacto-bg"></div>

        <form class="formulario">
            <div class="campo">
                <label class="campo__label" for="Nombre">Nombre</label>
                <input class="campo__field" type="text" placeholder="Tu Nombre" id="nombre">
            </div>

            <div class="campo">
                <label class="campo__label" for="email">E-mail</label>
                <input class="campo__field" type="email" placeholder="Tu E-mail" id="email">
            </div>

            <div class="campo">
                <label class="campo__label" for="Telefono">Telefono</label>
                <input class="campo__field" type="number" placeholder="Tu Telefono" id="Telefono">
            </div>

            <div class="campo">
                <label class="campo__label" for="mensaje">mensaje</label>
                <textarea class="campo__field campo__field--textarea" id="mensaje"></textarea>
            </div>

            <div class="campo">
                <input type="submit" value="Enviar" class="boton boton--primarios">
            </div>
        </form>
    </main>

    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="usuario.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold">DeCafé</span></h1>
                </a>

                <nav class="navegacion">
                    <!-- Corregir los enlaces del footer -->
                    <a href="nosotros.php" class="navegacion__enlace <?php echo ($current_page == 'nosotros.php') ? 'activo' : ''; ?>">Nosotros</a>
                    <a href="recetas.php" class="navegacion__enlace <?php echo ($current_page == 'recetas.php') ? 'activo' : ''; ?>">Recetas</a>
                </nav>
            </div>
        </div>
    </footer>

</body>
</html>
