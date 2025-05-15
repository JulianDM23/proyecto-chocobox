<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogChocoBox</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f5f5f5;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
      }

      /* Layout principal */
      .blog-layout {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        margin-top: 40px;
      }

      /* Estilos para los artículos principales */
      .main-content article {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
        transition: transform 0.3s ease;
      }

      .main-content article:hover {
        transform: translateY(-5px);
      }

      .article-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
      }

      .article-content {
        padding: 30px;
        text-align: center;
      }

      .article-content h2 {
        font-size: 2rem;
        color: #2d3748;
        margin-bottom: 20px;
        line-height: 1.3;
      }

      .article-content p {
        text-align: center;
        color: #4a5568;
        margin-bottom: 20px;
        font-size: 1.1rem;
      }

      .article-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #718096;
        font-size: 0.9rem;
        border-top: 1px solid #e2e8f0;
        padding-top: 20px;
        margin-top: 20px;
      }

      /* Banner separador */
      .banner-separator {
        height: 300px;
        background: url('../img/bg.jpg') center/cover fixed;
        position: relative;
        margin: 60px 0;
      }

      .banner-separator::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
      }

      .banner-content {
        position: relative;
        color: white;
        text-align: center;
        padding: 100px 20px;
      }

      .banner-content h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      /* Barra lateral */
      .sidebar {
        position: sticky;
        top: 20px;
        height: fit-content;
      }

      .sidebar-widget {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .sidebar-widget h3 {
        color: #2d3748;
        margin-bottom: 20px;
        font-size: 1.5rem;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 10px;
      }

      .suggested-posts {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }

      .suggested-post {
        display: flex;
        gap: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e2e8f0;
      }

      .suggested-post:last-child {
        border-bottom: none;
        padding-bottom: 0;
      }

      .suggested-post img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
      }

      .suggested-post-content h4 {
        font-size: 1rem;
        margin-bottom: 8px;
        color: #2d3748;
      }

      .suggested-post-content p {
        font-size: 0.9rem;
        color: #718096;
      }

      /* Estilos responsivos */
      @media (max-width: 768px) {
        .blog-layout {
          grid-template-columns: 1fr;
        }

        .article-image {
          height: 300px;
        }

        .banner-separator {
          height: 200px;
        }

        .banner-content h2 {
          font-size: 2rem;
        }

        .sidebar {
          position: static;
        }
      }
    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <header class="header">
      <div class="contenedor">
        <div class="barra">
          <a class="logo" href="#" onclick="window.location.reload(); return false;">
            <h1 class="logo_nombre no-margin centrar-texto">Blog<span class="logo_bold">ChocoBox</span></h1>
          </a>
          <nav class="navegacion">
            <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
            <a href="Recetas.php" class="navegacion__enlace">Recetas</a>
                <a href="../index.php?action=publicaciones" class="navegacion__enlace">📢 Publicaciones</a> <!-- ✅ Nuevo enlace -->
            <a href="../index.php?action=cerrarSesion">Cerrar sesión</a>
          </nav>
        </div>
      </div>
      <div class="header__texto">
        <h2 class="no-margin">Blog: Noticias, Recetas e Información</h2>
        <p class="no-margin">Aprende de los expertos con las mejores recetas y consejos</p>
      </div>
    </header>

    <div class="container">
      <div class="blog-layout">
        <!-- Contenido Principal -->
        <main class="main-content">
          <article>
            <img src="../img/Procesochocolate.jpg" alt="Artículo 1" class="article-image">
            <div class="article-content">
              <h3>¿Cuándo se crearon los chocolates?</h3>
              <p style="font-size: 15px;">El chocolate, que comenzó como una bebida amarga en la antigüedad, ha evolucionado a lo largo del tiempo. Lo que antes era una preparación simple, se transformó al añadirle azúcar, convirtiéndose en el delicioso dulce que hoy disfrutamos en todo el mundo. ¡Un verdadero viaje de sabor y tradición!</p>
              <div class="article-meta">
                <span>Por: Autor</span>
                <span>5 min de lectura</span>
              </div>
            </div>
          </article>

          <article>
            <img src="../img/dogs-lying-floor.jpg" alt="Artículo 2" class="article-image">
            <div class="article-content">
              <h3>Por qué el chocolate es peligroso para los perros</h3>
              <p style="font-size: 15px;">El chocolate contiene una sustancia llamada teobromina, que los perros no pueden metabolizar adecuadamente. Esto puede provocar serios problemas de salud en los perros, como problemas cardíacos y nerviosos, e incluso puede ser fatal en grandes cantidades.</p>
              <div class="article-meta">
                <span>Por: Autor</span>
                <span>3 min de lectura</span>
              </div>
            </div>
          </article>

          <article>
            <img src="../img/TipodChocolates.jpg" alt="Artículo 3" class="article-image">
            <div class="article-content">
              <h3>¿Qué diferencia tiene el chocolate blanco del chocolate negro y el chocolate con leche?</h3>
              <p style="font-size: 15px;">A diferencia del chocolate negro o con leche, el chocolate blanco no contiene sólidos de cacao, que es lo que le da color y sabor a los otros tipos de chocolate. El chocolate blanco está hecho solo con manteca de cacao, azúcar y leche, lo que le da su color claro y sabor dulce.</p>
              <div class="article-meta">
                <span>Por: Autor</span>
                <span>5 min de lectura</span>
              </div>
            </div>
          </article>
        </main>

        <!-- Barra Lateral -->
        <aside class="sidebar">
          <div class="sidebar-widget">
            <h3>Artículos Sugeridos</h3>
            <div class="suggested-posts">
              <div class="suggested-post">
                <img src="../img/BebidaDeliciaMundial.jpg" alt="Historia del Chocolate">
                <div class="suggested-post-content">
                  <h4>De Bebida Maya a Delicia Mundial</h4>
                  <p>Explora el fascinante viaje del chocolate desde sus orígenes como bebida sagrada maya hasta convertirse en el dulce favorito del mundo moderno.</p>
                </div>
                <a href="articulos.php" class="ver-mas-btn">Ver más</a>
              </div>

              <div class="suggested-post">
                <img src="../img/Secretos.jpg" alt="Tipos de Chocolate">
                <div class="suggested-post-content">
                  <h4>Los Secretos del Chocolate Negro</h4>
                  <p>Descubre por qué el chocolate negro con más del 70% de cacao es considerado un superalimento y sus beneficios para la salud.</p>
                </div>
                <a href="articulos.php" class="ver-mas-btn">Ver más</a>
              </div>

              <div class="suggested-post">
                <img src="../img/PostresIrresistiblesChocolate.jpg" alt="Recetas con Chocolate">
                <div class="suggested-post-content">
                  <h4>Postres Irresistibles de Chocolate</h4>
                  <p>Aprende a preparar tres postres gourmet de chocolate: trufas artesanales, mousse clásico y brownies premium con nueces.</p>
                </div>
                <a href="articulos.php" class="ver-mas-btn">Ver más</a>
              </div>
            </div>
          </div>
        </aside>
      </div>
      
      <!-- Banner Separador -->
      <div class="banner-separator">
        <div class="banner-content">
          <h2>Descubre Más Artículos Interesantes</h2>
        </div>
      </div>

      <!-- Más Artículos -->
      <div class="blog-layout">
        <main class="main-content">
          <article>
            <img src="../img/Malteada.jpg" alt="Artículo 4" class="article-image">
            <div class="article-content">
              <h3>¿Qué hace que una malteada de chocolate casera sea realmente deliciosa?</h3>
              <p style="font-size: 15px;">La clave para una malteada deliciosa está en el uso de ingredientes frescos y de calidad. El cacao en polvo, la leche y el helado de chocolate bien combinados crean una mezcla cremosa y sabrosa que complacerá tus papilas gustativas.</p>
              <div class="article-meta">
                <span>Por: Autor</span>
                <span>4 min de lectura</span>
              </div>
            </div>
          </article>

          <article>
            <img src="../img/ChocoTentacion.jpg" alt="Artículo 5" class="article-image">
            <div class="article-content">
              <h3>¿Cuál es el truco para hacer el delicioso "Chocolate Tentación en Acción"?</h3>
              <p style="font-size: 15px;">El truco para hacer el "Chocolate Tentación en Acción" está en usar una combinación especial de chocolates gourmet y un toque de especias sofisticadas. La clave es derretir el chocolate lentamente, añadiendo una pizca de esencia de vainilla y una ligera infusión de canela.</p>
              <div class="article-meta">
                <span>Por: Autor</span>
                <span>4 min de lectura</span>
              </div>
            </div>
          </article>
        </main>

        <!-- Categorías Populares -->
       <aside class="sidebar">
    <div class="sidebar-widget">
        <h3>Datos Curiosos</h3>
        <div class="suggested-posts">
            <div class="suggested-post">
                <img src="../img/ChocolateNegroBarraLateral.jpg" alt="Chocolate Negro">
                <div class="suggested-post-content">
                    <h4>Chocolate Negro</h4>
                    <p>23 artículos sobre variedades y beneficios</p>
                </div>
            </div>
            <div class="suggested-post">
                <img src="../img/ChocolateLecheBarraLateral.jpg" alt="Chocolate con Leche">
                <div class="suggested-post-content">
                    <h4>Chocolate con Leche</h4>
                    <p>18 artículos sobre recetas y preparaciones</p>
                </div>
            </div>
            <div class="suggested-post">
                <img src="../img/ChocolateBlancoBarraLateral.jpg" alt="Chocolate Blanco">
                <div class="suggested-post-content">
                    <h4>Chocolate Blanco</h4>
                    <p>15 artículos sobre usos y aplicaciones</p>
                </div>
            </div>
        </div>
        <!-- ✅ Botón "Ver más" agregado -->
        <div class="ver-mas">
            <a href="../views/datos_curiosos.php" class="btn-ver-mas">🔍 Ver más</a>
        </div>
    </div>
</aside>

<style>
    .ver-mas {
        text-align: center;
        margin-top: 15px;
    }

    .btn-ver-mas {
        display: inline-block;
        padding: 12px 20px;
        background: #d4a373;
        color: #222;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s;
    }

    .btn-ver-mas:hover {
        background: #f4a261;
        color: #fff;
    }
</style>

      </div>
    </div>

    <footer class="footer">
      <div class="contenedor">
        <div class="barra">
          <a class="logo" href="index.html">
            <h1 class="logo_nombre no-margin centrar-texto">Blog<span class="logo_bold">ChocoBox</span></h1>
          </a>
          <p style="color: #e2e8f0;">Todos los Derechos Reservados © 2025 - BlogChocoBox</p>
          <nav class="navegacion">
            <a href="ayuda.php" class="navegacion__enlace">Comentarios</a>
            <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
            <a href="Recetas.php" class="navegacion__enlace">Recetas</a>
            <a href="ayuda.php" class="navegacion__enlace">Ayuda</a>
          </nav>
        </div>
      </div>
    </footer>
  </body>
</html>