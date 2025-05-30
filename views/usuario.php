<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogChocoBox</title>
    <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/footer.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link

      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
      rel="stylesheet"/>
      
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

      .article-video-niños {
  width: 100%;
  max-height: 500px;
  object-fit: contain;
  display: block;
  margin: 0 auto;
  background-color: #000;
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



.mini-carousel-video {
  max-height: 500px;
  max-width: 100%;
  width: auto;             /* que respete el ancho original del video */
  margin: 0 auto;          /* centrar horizontalmente */
  display: block;
  object-fit: contain;     /* muestra el video completo sin recortarlo */
  border-radius: 15px;
  background: #000;        /* fondo negro para videos más pequeños */
}

.media-carousel-item {
  max-height: 500px;
  max-width: 100%;
  width: auto;
  margin: 0 auto;
  display: block;
  object-fit: contain;
  border-radius: 15px;
  background-color: #000;
}
/* 🔽 Flechas del carrusel en negro */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.5 0L4.79.71 1.5 4l3.29 3.29.71.71L0 4z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.5 0L3.21.71 6.5 4l-3.29 3.29-.71.71L8 4z'/%3E%3C/svg%3E");
}
.nuevo-header {
  background: url('../img/banner.jpg') no-repeat center center/cover;
  color: #fff;
  padding: 100px 20px;
  text-align: center;
  position: relative;
}

.nuevo-header::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  z-index: 0;
}

.contenido-header {
  position: relative;
  z-index: 1;
  max-width: 900px;
  margin: 0 auto;
}

.titulo-principal {
  font-size: 3.5rem;
  font-family: 'Georgia', serif;
  margin-bottom: 10px;
}

.choco {
  color: #e0a96d;
  font-style: italic;
}

.subtitulo {
  font-size: 1.8rem;
  font-weight: 300;
  margin-bottom: 10px;
  font-style: italic;
}

.descripcion {
  font-size: 1.3rem;
  margin-bottom: 30px;
  color: #ccc;
}

.botones-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
}

.botones-header a {
  padding: 12px 24px;
  font-size: 1.1rem;
  background-color: transparent;
  border: 2px solid #e0a96d;
  color: #fff;
  text-decoration: none;
  border-radius: 25px;
  font-weight: bold;
  transition: all 0.3s ease;
}

.botones-header a:hover {
  background-color: #e0a96d;
  color: #000;
}
.cerrar-sesion {
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 2;
}

.cerrar-sesion a {
  padding: 10px 20px;
  font-size: 1.1rem;
  background-color: #e0a96d;
  color: #000;
  font-weight: bold;
  border-radius: 20px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.cerrar-sesion a:hover {
  background-color: #fff;
  color: #000;
}
    </style>
  </head>

  
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<header class="nuevo-header">
  <!-- Cerrar sesión arriba a la derecha -->
  <div class="cerrar-sesion">
    <a href="../index.php?action=logout">Cerrar sesión</a>
  </div>

  <!-- Contenido principal centrado -->
  <div class="contenido-header">
    <h1 class="titulo-principal">Blog<span class="choco">ChocoBox</span></h1>
    <h2 class="subtitulo">Blog: Noticias, Recetas e Información</h2>
    <p class="descripcion">Aprende de los expertos con las mejores recetas y consejos</p>
    <div class="botones-header">
      <a href="nosotros.php">Nosotros</a>
      <a href="Recetas.php">Recetas</a>
      <a href="../index.php?action=Home_usuario" class="navegacion__enlace">👤 Tu perfil</a>

      <a href="../index.php?action=publicaciones">Publicaciones</a>
    </div>
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
            <video class="article-image" autoplay muted loop>
            <source src="../img/Corazon.mp4" type="video/mp4">
             Tu navegador no soporta la reproducción de video.
            </video>
            <div class="article-content">
              <h3>¿Por qué a los niños les encanta el chocolate?</h3>
              <p style="font-size: 15px;">El chocolate es uno de los sabores más apreciados por los niños debido a su dulzura natural y textura suave. Estudios indican que el sabor dulce activa centros de placer en el cerebro, generando una sensación de bienestar. Además, los dulces de chocolate suelen estar asociados con recompensas, celebraciones y momentos felices, lo que refuerza su atractivo desde temprana edad.</p>
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
             <div style="background-color: white; display: flex; justify-content: center; align-items: center; padding: 20px; border-radius: 15px;">
             <video autoplay muted loop playsinline style="height: 500px; width: auto; border-radius: 10px;">
               <source src="../img/NiñosChocolate.mp4" type="video/mp4">Tu navegador no soporta la reproducción de video.
             </video>
              </div>

               <div class="article-content">
                 <h3>¿Sabías que cada tipo de dulce de chocolate tiene una historia diferente?</h3>
                   <p style="font-size: 15px;">
                      Cada dulce tiene su origen. Por ejemplo, los bombones nacieron en Francia en el siglo XVII como un lujo de la realeza. Las trufas fueron creadas en Bélgica y están inspiradas en el hongo del mismo nombre por su forma. Las barras de chocolate rellenas,surgieron en EE.UU. en el siglo XX para ofrecer energía y sabor en un solo bocado. Cada uno refleja una época, una cultura y un estilo de vida diferente.


                     </p>

                <div class="article-meta">
                    <span>Por: Autor</span>
                      <span>5 min de lectura</span>
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
              </div>

              <div class="suggested-post">
                <img src="../img/Secretos.jpg" alt="Tipos de Chocolate">
                <div class="suggested-post-content">
                  <h4>Los Secretos del Chocolate Negro</h4>
                  <p>Descubre por qué el chocolate negro con más del 70% de cacao es considerado un superalimento y sus beneficios para la salud.</p>
                </div>
              </div>

              <div class="suggested-post">
                <img src="../img/PostresIrresistiblesChocolate.jpg" alt="Recetas con Chocolate">
                <div class="suggested-post-content">
                  <h4>Postres Irresistibles de Chocolate</h4>
                  <p>Aprende a preparar tres postres gourmet de chocolate: trufas artesanales, mousse clásico y brownies premium con nueces.</p>
                </div>
              </div>
              <!-- ✅ Botón "Ver más" agregado -->
        <div class="ver-mas">
            <a href="articulos.php" class="btn-ver-mas">🔍 Ver más</a>
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
            <video class="article-image" autoplay muted loop>
            <source src="../img/Chocolatefooter.mp4" type="video/mp4">
             Tu navegador no soporta la reproducción de video.
            </video>
            <div class="article-content">
              <h3>¿Son todos los dulces de chocolate iguales?</h3>
              <p style="font-size: 15px;">  No. Hay muchas diferencias según el tipo de chocolate, los ingredientes usados y el proceso de elaboración. Algunos dulces industriales contienen más azúcar, grasas y aditivos, mientras que otros, como los artesanales o de chocolaterías gourmet, usan cacao de alta calidad y menos conservantes. Leer las etiquetas puede ayudarte a elegir opciones más saludables o naturales.</p>
              <div class="article-meta">
                <span>Por: Autor</span>
                <span>5 min de lectura</span>
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
     

          <article>
             <div style="background-color: white; display: flex; justify-content: center; align-items: center; padding: 20px; border-radius: 15px;">
             <video autoplay muted loop playsinline style="height: 500px; width: auto; border-radius: 10px;">
               <source src="../img/Malteadafooter.mp4" type="video/mp4">Tu navegador no soporta la reproducción de video.
             </video>
              </div>

               <div class="article-content">
                 <h3>¿Sabías que cada tipo de dulce de chocolate tiene una historia diferente?</h3>
                   <p style="font-size: 15px;">
                      Cada dulce tiene su origen. Por ejemplo, los bombones nacieron en Francia en el siglo XVII como un lujo de la realeza. Las trufas fueron creadas en Bélgica y están inspiradas en el hongo del mismo nombre por su forma. Las barras de chocolate rellenas,surgieron en EE.UU. en el siglo XX para ofrecer energía y sabor en un solo bocado. Cada uno refleja una época, una cultura y un estilo de vida diferente.
                     </p>
               </div>
                   </article>

                   <article>
  <div style="background-color: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
    <div class="container my-3">
      <h3 style="text-align: center; margin-bottom: 20px;">Galería Especial de Chocolate</h3>

<div id="carruselGaleria" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner rounded-4">

          <!-- Video vertical -->
          <div class="carousel-item active">
            <video class="d-block mini-carousel-video" autoplay muted loop playsinline>
              <source src="../img/Chocolatefooter.mp4" type="video/mp4">
              Tu navegador no soporta la reproducción de video.
            </video>
          </div>

          <!-- Imagen vertical -->
        <div class="carousel-item">
  <img src="../img/Carusel2.jpg" class="d-block media-carousel-item" alt="Creación de Chocolate">
</div>


          <!-- Otro video vertical -->
          <div class="carousel-item">
            <video class="d-block mini-carousel-video" autoplay muted loop playsinline>
              <source src="../img/CristalCarrusel.mp4" type="video/mp4">
              Tu navegador no soporta la reproducción de video.
            </video>
          </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselGaleria" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselGaleria" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
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
                <img src="../img/istockphoto-503259445-612x612.jpg" alt="Chocolate Negro">
                <div class="suggested-post-content">
                    <h4>El chocolate fue una bebida mucho antes de ser dulce</h4>
                    <p>Los antiguos pueblos mesoamericanos como los mayas y los aztecas consumían el cacao en forma de bebida amarga y picante, mezclada con especias como chile y sin azúcar. </p>
                </div>
            </div>
            <div class="suggested-post">
                <img src="../img/close-up-of-white-chocolate-chunks-royalty-free-image-157582140-1547653961.jpg" alt="Chocolate con Leche">
                <div class="suggested-post-content">
                    <h4>El chocolate blanco no es técnicamente chocolate</h4>
                    <p>A diferencia del chocolate negro o con leche, el chocolate blanco no contiene sólidos de cacao, solo manteca de cacao, leche y azúcar. Por eso muchos puristas no lo consideran "verdadero chocolate".</p>
                </div>
            </div>
            <div class="suggested-post">
                <img src="../img/9082772-pila-de-monedas-chocolate-envuelto-en-estaño-oro-brillante.jpg" alt="Chocolate Blanco">
                <div class="suggested-post-content">
                    <h4>Fue usado como moneda</h4>
                    <p>Los aztecas valoraban tanto el cacao que usaban los granos como moneda. Por ejemplo, un conejo podía costar unos 10 granos de cacao. ¡Literalmente te podías comer tu dinero!</p>
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

    .chocolos-footer {
            background-color: #2a1a0f;
            color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 3rem 0;
            border-top: 4px solid #e0a96d;
        }
        
        .footer-title {
            color: #e0a96d;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            font-size: 1.5rem;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 50px;
            height: 2px;
            background: #e0a96d;
        }
        
        .footer-description {
            color: #d1d1d1;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .footer-links li {
            margin-bottom: 0.7rem;
            list-style: none;
        }
        
        .footer-links a {
            color: #d1d1d1;
            text-decoration: none;
            transition: all 0.3s ease;
            padding-left: 0;
            display: inline-block;
        }
        
        .footer-links a:hover {
            color: #e0a96d;
            padding-left: 8px;
        }
        
        .contact-info li {
            color: #d1d1d1;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-info i {
            color: #e0a96d;
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .copyright {
            color: #aaa;
            font-size: 0.9rem;
        }
        
        .legal-links a {
            color: #d1d1d1;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }
        
        .legal-links a:hover {
            color: #e0a96d;
        }
        
        .footer-divider {
            border-top: 1px solid rgba(224, 169, 109, 0.2);
            margin: 2rem 0;
        }
</style>

      </div>
    </div>
  <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h3 class="footer-title">ChocoBox</h3>
                    <p>Descubre el arte de la cocina con nosotros. Recetas auténticas, técnicas profesionales y secretos culinarios de todo el planeta.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <h3 class="footer-title">Categorías</h3>
                    <ul class="footer-links">
                       <li><a href="../index.php?action=Home_usuario" class="ver-mas-btn">Tu Perfil</a></li>
                        <li><a href="nosotros.php" class="ver-mas-btn">Nosotros</a></li>
                        <li><a href="articulos.php" class="ver-mas-btn">Articulos</a></li>
                         <li><a href="datos_curiosos"> Datos Curiosos</a></li>
                        <li><a href="recetas.php">Recetas</a></li>
                        <li><a href="#tecnicas">Técnicas Culinarias</a></li>
                        <li><a href="#chefs">Nuestros Chefs</a></li>
                  
                    </ul>
                </div>
                
                <div class="col-md-4">
                    <h3 class="footer-title">Contacto</h3>
                    <p><i class="fas fa-envelope me-2"></i> info@saboresdelmundo.com</p>
                    <p><i class="fas fa-phone me-2"></i> +34 912 345 678</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Calle del Sabor 123, Madrid, España</p>
          
            
                <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright mt-4">© 2023 ChocoBox. Todos los derechos reservados. | <a href="#" class="text-white">Política de privacidad</a> | <a href="#" class="text-white">Términos de servicio</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>