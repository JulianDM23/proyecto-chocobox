<?php
// Obtener el nombre de la página actual
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogDeChocoBox</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <header class="header">
      <div class="contenedor">
        <div class="barra">
          <!-- Corregir el enlace del logo -->
          <a class="logo" href="usuario.php">
            <h1 class="logo__nombre no-margin centrar-texto">
              Blog<span class="logo__bold">ChocoBox</span>
            </h1>
          </a>

          <nav class="navegacion">
            <!-- Corregir los enlaces de la navegación -->
            <a href="ayuda.php" class="navegacion__enlace <?php echo ($current_page == 'ayuda.php') ? 'activo' : ''; ?>">Ayuda</a>
            <a href="recetas.php" class="navegacion__enlace <?php echo ($current_page == 'recetas.php') ? 'activo' : ''; ?>">Recetas</a>
          </nav>
        </div>
      </div>

      <div class="header__texto">
        <h2 class="no-margin">Blog: Noticias, Recetas e Información</h2>
        <p class="no-margin">
          Aprende de los expertos con los mejores recetas y consejos
        </p>
      </div>
    </header>

    <main class="contenedor">
      <h3 class="centrar-texto">Sobre Nosotros</h3>

      <div class="sobre-nosotros">
        <div class="sobre-nosotros__imagen">
          <img src="../img/logo.jpeg" alt="imagen nosotros" />
        </div>

        <div class="sobre-nosotros__texto">
          <p>
            Choco Box Express en un blog que utilizaría materias primas totalmente naturales, sin el uso de químicos y la forma como se le quiere presentar y llegar al cliente, mediante una variada gama de chocolates atractivos al paladar, donde el valor agregado que lo diferencia de la competencia es la calidad, textura, presentación y empaque de cada uno de los productos que se ofertaran.
          </p>

          <p>
            Somos una empresa que se dedica a la fabricación, distribución y comercialización de chocolates de alta calidad para el mercado colombiano; cubrimos las necesidades a través de un servicio eficiente, para satisfacer a nuestros clientes, accionistas y funcionarios.<br>Se mantendrá como una empresa líder en el mercado colombiano, reconocida por su solidez, competitividad, calidad de sus productos y la excelencia de sus servicios y valores.
          </p>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="contenedor">
        <div class="barra">
          <!-- Corregir el enlace del logo -->
          <a class="logo" href="index.php">
            <h1 class="logo__nombre no-margin centrar-texto">
              Blog<span class="logo__bold">ChocoBox</span>
            </h1>
          </a>

         
        </div>
      </div>
    </footer>
  </body>
</html>
