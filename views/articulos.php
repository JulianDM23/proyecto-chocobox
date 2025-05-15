<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogChocoBox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
      :root {
          --primary: #6D4C3D;
          --secondary: #D4A373;
          --light: #FAEDCD;
          --dark: #2A2A2A;
          --white: #FFFFFF;
          --gray: #F5F5F5;
          --text: #333333;
          --text-light: #777777;
      }

      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      body {
          font-family: 'Poppins', sans-serif;
          line-height: 1.6;
          color: var(--text);
          background-color: var(--gray);
          overflow-x: hidden;
      }

      h1, h2, h3, h4 {
          font-family: 'Playfair Display', serif;
          font-weight: 600;
          color: var(--dark);
      }

      a {
          text-decoration: none;
          color: inherit;
          transition: all 0.3s ease;
      }

      a:hover {
          color: var(--secondary);
      }

      img {
          max-width: 100%;
          height: auto;
          display: block;
      }

      .container {
          width: 100%;
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 20px;
      }

      /* Header */
      .header {
          background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../img/bg.jpg') center/cover no-repeat;
          color: var(--white);
          padding: 20px 0;
          position: relative;
          min-height: 300px;
          display: flex;
          flex-direction: column;
          justify-content: center;
      }

      .header::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: rgba(0, 0, 0, 0.5);
          z-index: 1;
      }

      .header-content {
          position: relative;
          z-index: 2;
      }

      .barra {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px 0;
      }

      .logo {
          font-size: 1.8rem;
          font-weight: 700;
          color: var(--white);
      }

      .logo__bold {
          color: var(--secondary);
      }

      .navegacion {
          display: flex;
          gap: 30px;
      }

      .navegacion__enlace {
          font-weight: 500;
          position: relative;
          padding: 5px 0;
      }

      .navegacion__enlace::after {
          content: '';
          position: absolute;
          bottom: 0;
          left: 0;
          width: 0;
          height: 2px;
          background-color: var(--secondary);
          transition: width 0.3s ease;
      }

      .navegacion__enlace:hover::after {
          width: 100%;
      }

      .header__texto {
          text-align: center;
          margin-top: 50px;
          max-width: 800px;
          margin-left: auto;
          margin-right: auto;
      }

      .header__texto h2 {
          font-size: 2.5rem;
          margin-bottom: 15px;
          color: var(--white);
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      .header__texto p {
          font-size: 1.1rem;
          opacity: 0.9;
      }

      /* Main Content */
      .blog-layout {
          display: grid;
          grid-template-columns: 2fr 1fr;
          gap: 40px;
          margin: 40px 0;
      }

      /* Articles */
      .main-content article {
          background: var(--white);
          border-radius: 15px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
          margin-bottom: 40px;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .main-content article:hover {
          transform: translateY(-10px);
          box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
      }

      .article-image {
          width: 100%;
          height: 400px;
          object-fit: cover;
          transition: transform 0.5s ease;
      }

      .main-content article:hover .article-image {
          transform: scale(1.03);
      }

      .article-content {
          padding: 30px;
      }

      .article-content h3 {
          font-size: 1.8rem;
          margin-bottom: 20px;
          color: var(--primary);
          line-height: 1.3;
      }

      .article-content p {
          color: var(--text-light);
          margin-bottom: 20px;
          font-size: 1.1rem;
          line-height: 1.7;
      }

      .article-meta {
          display: flex;
          justify-content: space-between;
          align-items: center;
          color: var(--text-light);
          font-size: 0.9rem;
          border-top: 1px solid var(--light);
          padding-top: 20px;
          margin-top: 20px;
      }

      .article-meta span:first-child {
          color: var(--secondary);
          font-weight: 500;
      }

      /* Sidebar */
      .sidebar {
          position: sticky;
          top: 20px;
          height: fit-content;
      }

      .sidebar-widget {
          background: var(--white);
          border-radius: 15px;
          padding: 30px;
          margin-bottom: 30px;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      }

      .sidebar-widget h3 {
          color: var(--primary);
          margin-bottom: 25px;
          font-size: 1.5rem;
          position: relative;
          padding-bottom: 15px;
      }

      .sidebar-widget h3::after {
          content: '';
          position: absolute;
          bottom: 0;
          left: 0;
          width: 50px;
          height: 3px;
          background-color: var(--secondary);
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
          border-bottom: 1px solid var(--light);
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
          transition: transform 0.3s ease;
      }

      .suggested-post:hover img {
          transform: scale(1.05);
      }

      .suggested-post-content h4 {
          font-size: 1.1rem;
          margin-bottom: 8px;
          color: var(--dark);
      }

      .suggested-post-content p {
          font-size: 0.9rem;
          color: var(--text-light);
          line-height: 1.6;
      }

      /* Footer */
      .footer {
          background-color: var(--dark);
          color: var(--white);
          padding: 50px 0 20px;
          margin-top: 60px;
      }

      .footer-content {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 40px;
          margin-bottom: 40px;
      }

      .footer-widget h4 {
          color: var(--white);
          margin-bottom: 20px;
          font-size: 1.3rem;
          position: relative;
          padding-bottom: 10px;
      }

      .footer-widget h4::after {
          content: '';
          position: absolute;
          bottom: 0;
          left: 0;
          width: 40px;
          height: 2px;
          background-color: var(--secondary);
      }

      .footer-widget p {
          color: #aaa;
          margin-bottom: 15px;
          line-height: 1.7;
      }

      .footer-links {
          list-style: none;
      }

      .footer-links li {
          margin-bottom: 10px;
      }

      .footer-links a {
          color: #aaa;
          transition: all 0.3s ease;
      }

      .footer-links a:hover {
          color: var(--secondary);
          padding-left: 5px;
      }

      .social-links {
          display: flex;
          gap: 15px;
          margin-top: 20px;
      }

      .social-links a {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 40px;
          height: 40px;
          background-color: rgba(255, 255, 255, 0.1);
          border-radius: 50%;
          color: var(--white);
          transition: all 0.3s ease;
      }

      .social-links a:hover {
          background-color: var(--secondary);
          transform: translateY(-3px);
      }

      .copyright {
          text-align: center;
          padding-top: 20px;
          border-top: 1px solid rgba(255, 255, 255, 0.1);
          color: #aaa;
          font-size: 0.9rem;
      }

      /* Responsive Design */
      @media (max-width: 992px) {
          .blog-layout {
              grid-template-columns: 1fr;
          }

          .sidebar {
              position: static;
              margin-top: 40px;
          }

          .header__texto h2 {
              font-size: 2rem;
          }
      }

      @media (max-width: 768px) {
          .barra {
              flex-direction: column;
              gap: 20px;
          }

          .navegacion {
              flex-wrap: wrap;
              justify-content: center;
              gap: 15px;
          }

          .header__texto {
              margin-top: 30px;
          }

          .header__texto h2 {
              font-size: 1.8rem;
          }

          .article-image {
              height: 300px;
          }

          .article-content h3 {
              font-size: 1.5rem;
          }

          .suggested-post {
              flex-direction: column;
          }

          .suggested-post img {
              width: 100%;
              height: 150px;
          }
      }

      @media (max-width: 576px) {
          .header {
              min-height: 250px;
          }

          .header__texto h2 {
              font-size: 1.5rem;
          }

          .header__texto p {
              font-size: 1rem;
          }

          .article-image {
              height: 250px;
          }

          .article-content {
              padding: 20px;
          }

          .sidebar-widget {
              padding: 20px;
          }
      }

      /* Animations */
      @keyframes fadeIn {
          from { opacity: 0; transform: translateY(20px); }
          to { opacity: 1; transform: translateY(0); }
      }

      .fade-in {
          animation: fadeIn 0.6s ease forwards;
      }

      .delay-1 { animation-delay: 0.2s; }
      .delay-2 { animation-delay: 0.4s; }
      .delay-3 { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container header-content">
            <div class="barra">
                <a class="logo" href="usuario.php">
                    <h1 class="logo__nombre">
                        Blog<span class="logo__bold">ChocoBox</span>
                    </h1>
                </a>
                <nav class="navegacion">
                    <a href="ayuda.php" class="navegacion__enlace">Comentarios</a>
                    <a href="Nosotros.php" class="navegacion__enlace">Nosotros</a>
                    <a href="Recetas.php" class="navegacion__enlace">Recetas</a>
                </nav>
            </div>

            <div class="header__texto fade-in">
                <h2>Noticias, Recetas e Información sobre Chocolate</h2>
                <p>
                    Descubre el fascinante mundo del chocolate con nuestros artículos y recetas exclusivas
                </p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="blog-layout">
            <!-- Contenido Principal -->
            <main class="main-content">
                <article class="fade-in">
                    <img src="../img/Creacion.jpg" alt="Historia del chocolate" class="article-image">
                    <div class="article-content">
                        <h3>¿Cómo se descubrió el chocolate?</h3>
                        <p>Los mayas y aztecas fueron los primeros en preparar una bebida amarga a base de granos de cacao, la cual consideraban sagrada. Con la llegada de los europeos, se le añadió azúcar, transformándose en el dulce chocolate que conocemos hoy.</p>
                        <div class="article-meta">
                            <span>Por: Equipo ChocoBox</span>
                            <span>5 min de lectura</span>
                        </div>
                    </div>
                </article>

                <article class="fade-in delay-1">
                    <img src="../img/dogs-lying-floor.jpg" alt="Producción de chocolate" class="article-image">
                    <div class="article-content">
                        <h3>¿Cómo se produce el chocolate?</h3>
                        <p>El proceso comienza con la cosecha de granos de cacao, que luego se fermentan, secan y tuestan. Después de molerlos, se obtiene la pasta de cacao, que se mezcla con otros ingredientes para crear tabletas o productos de chocolate.</p>                       
                        <div class="article-meta">
                            <span>Por: Chef María Gómez</span>
                            <span>3 min de lectura</span>
                        </div>
                    </div>
                </article>

                <article class="fade-in delay-2">
                    <img src="../img/TipodChocolates.jpg" alt="Tipos de chocolate" class="article-image">
                    <div class="article-content">
                        <h3>Tipos de chocolate y sus características</h3>
                        <p>Desde el amargo hasta el blanco, cada tipo de chocolate tiene propiedades únicas. Descubre las diferencias entre ellos, sus porcentajes de cacao y los mejores usos en repostería y gastronomía.</p>
                        <div class="article-meta">
                            <span>Por: Chocolatier Juan Pérez</span>
                            <span>7 min de lectura</span>
                        </div>
                    </div>
                </article>
            </main>

            <!-- Barra Lateral -->
            <aside class="sidebar">
                <div class="sidebar-widget fade-in delay-1">
                    <h3>Datos Curiosos</h3>
                    <div class="suggested-posts">
                        <div class="suggested-post">
                            <img src="../img/BebidaDeliciaMundial.jpg" alt="Historia del Chocolate">
                            <div class="suggested-post-content">
                                <h4>🍫 El chocolate como moneda</h4>
                                <p>Los antiguos mayas y aztecas valoraban tanto el cacao que lo utilizaban como moneda de intercambio.</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/chocolate-health.jpg" alt="Beneficios del chocolate">
                            <div class="suggested-post-content">
                                <h4>🌿 Beneficios para la salud</h4>
                                <p>El chocolate negro contiene antioxidantes que pueden mejorar la salud cardiovascular.</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/chocolate-facts.jpg" alt="Curiosidades del chocolate">
                            <div class="suggested-post-content">
                                <h4>⚡ Consumo mundial</h4>
                                <p>Suiza es el país que consume más chocolate per cápita en el mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-widget fade-in delay-2">
                    <h3>Recetas Destacadas</h3>
                    <div class="suggested-posts">
                        <div class="suggested-post">
                            <img src="../img/receta1.jpg" alt="Brownie de chocolate">
                            <div class="suggested-post-content">
                                <h4>🥮 Brownie clásico</h4>
                                <p>La receta perfecta para un brownie esponjoso por fuera y cremoso por dentro.</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/receta2.jpg" alt="Mousse de chocolate">
                            <div class="suggested-post-content">
                                <h4>🍮 Mousse ligera</h4>
                                <p>Una versión más saludable del clásico postre francés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-widget">
                    <h4>Sobre ChocoBox</h4>
                    <p>Somos apasionados por el chocolate y queremos compartir contigo todo sobre este delicioso mundo.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-widget">
                    <h4>Enlaces Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="usuario.php">Inicio</a></li>
                        <li><a href="Recetas.php">Recetas</a></li>
                        <li><a href="Nosotros.php">Sobre Nosotros</a></li>
                        <li><a href="ayuda.php">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h4>Contacto</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Calle del Chocolate, 123</p>
                    <p><i class="fas fa-phone"></i> +57 320 596 8181</p>
                    <p><i class="fas fa-envelope"></i> info@chocobox.com</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 BlogChocoBox. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Efecto de carga suave
        document.addEventListener('DOMContentLoaded', function() {
            // Animación para los elementos con clase fade-in
            const fadeElements = document.querySelectorAll('.fade-in');
            
            fadeElements.forEach((el, index) => {
                // Aplicamos un pequeño delay progresivo
                el.style.animationDelay = `${index * 0.2}s`;
            });
            
            // Efecto hover para artículos
            const articles = document.querySelectorAll('article');
            articles.forEach(article => {
                article.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.12)';
                });
                
                article.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                });
            });
            
            // Menú responsive
            const menuToggle = document.createElement('div');
            menuToggle.className = 'menu-toggle';
            menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
            menuToggle.style.display = 'none';
            document.querySelector('.barra').appendChild(menuToggle);
            
            const nav = document.querySelector('.navegacion');
            
            function toggleMenu() {
                if (nav.style.display === 'flex') {
                    nav.style.display = 'none';
                } else {
                    nav.style.display = 'flex';
                }
            }
            
            menuToggle.addEventListener('click', toggleMenu);
            
            function checkScreenSize() {
                if (window.innerWidth <= 768) {
                    menuToggle.style.display = 'block';
                    nav.style.display = 'none';
                } else {
                    menuToggle.style.display = 'none';
                    nav.style.display = 'flex';
                }
            }
            
            window.addEventListener('resize', checkScreenSize);
            checkScreenSize();
        });
    </script>
</body>
</html>