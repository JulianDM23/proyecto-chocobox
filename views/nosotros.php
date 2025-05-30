<?php
// Obtener el nombre de la página actual
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sabores del Mundo - Recetas de Cocina Internacional</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Sans:wght@400;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome para íconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <style>
  :root {
    --chocolate-dark: #3A2514;
    --chocolate-medium: #6B4423;
    --chocolate-light: #D4A373;
    --cream: #FAEDCD;
    --white: #FFFFFF;
    --black: #2A2A2A;
    --text-light: #777777;
    --chocolate-accent: #D4A373;
    --bg-light: #FAEDCD;
  }

    body {
      font-family: 'Open Sans', sans-serif;
      background-color: var(--bg-light);
      margin: 0;
      color: var(--black);
      line-height: 1.7;
    }

    /* Header */
    .header {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1493925410384-84f842e616fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      color: var(--white);
      min-height: 70vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      padding: 2rem 1rem;
    }

    .barra {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      position: absolute;
      top: 0;
      left: 0;
      padding: 2rem;
      box-sizing: border-box;
    }

    .logo {
      font-family: 'Dancing Script', cursive;
      font-size: 3.5rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 1rem;
      text-decoration: none;
    }

    .navegacion {
      display: flex;
      align-items: center;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 1.5rem;
    }

    .navegacion__enlace {
      color: var(--white);
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      position: relative;
      padding: 0.5rem 0;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .navegacion__enlace::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--chocolate-accent);
      transition: width 0.3s ease;
    }

    .navegacion__enlace:hover {
      color: var(--chocolate-accent);
    }

    .navegacion__enlace:hover::after {
      width: 100%;
    }

    .navegacion__enlace.activo {
      color: var(--chocolate-accent);
      font-weight: 700;
    }

    .navegacion__enlace.activo::after {
      width: 100%;
    }

    .header-content {
      text-align: center;
      max-width: 800px;
      padding: 0 2rem;
    }

    .header__title {
      font-size: 3rem;
      font-family: 'PT Sans', sans-serif;
      color: var(--white);
      margin-bottom: 1.5rem;
      font-weight: 700;
      text-transform: none;
    }

    .header__subtitle {
      font-size: 1.4rem;
      color: var(--chocolate-light);
      max-width: 600px;
      margin: 0 auto;
      line-height: 1.6;
      font-weight: 400;
    }

    /* Main Content */
    .contenedor {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .centrar-texto {
      text-align: center;
    }

    h3.centrar-texto {
      font-size: 2.2rem;
      color: var(--chocolate-dark);
      margin-bottom: 2.5rem;
      position: relative;
      display: inline-block;
      left: 50%;
      transform: translateX(-50%);
    }

    h3.centrar-texto::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, var(--chocolate-dark), var(--chocolate-accent));
      border-radius: 2px;
    }

    /* Sobre Nosotros */
    .sobre-nosotros {
      display: flex;
      flex-direction: column;
      gap: 2.5rem;
      padding: 2rem;
      background-color: var(--white);
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      margin-bottom: 3rem;
    }

    .sobre-nosotros__imagen {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .sobre-nosotros__imagen img {
      width: 100%;
      max-width: 500px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .sobre-nosotros__imagen img:hover {
      transform: scale(1.02);
    }

    .sobre-nosotros__texto {
      flex: 1;
    }

    .sobre-nosotros__texto p {
      font-size: 1.1rem;
      color: var(--text-light);
      margin-bottom: 1.5rem;
      line-height: 1.8;
    }

    /* Nuestra Historia */
    .nuestra-historia {
      background-color: var(--chocolate-light);
      padding: 3rem 2rem;
      border-radius: 12px;
      margin-bottom: 3rem;
    }

    .nuestra-historia h4 {
      font-size: 1.8rem;
      color: var(--chocolate-dark);
      margin-bottom: 1.5rem;
      text-align: center;
    }

    /* Valores */
    .valores {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-bottom: 3rem;
    }

    .valor-card {
      background-color: var(--white);
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .valor-card:hover {
      transform: translateY(-5px);
    }

    .valor-icon {
      font-size: 2.5rem;
      color: var(--chocolate-accent);
      margin-bottom: 1rem;
    }

    .valor-card h5 {
      font-size: 1.3rem;
      color: var(--chocolate-dark);
      margin-bottom: 1rem;
    }

    /* Footer */
    .footer {
      background-color: var(--chocolate-dark);
      color: white;
      padding: 3rem 0;
    }
    
    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }
    
    .footer-brand {
      margin-bottom: 1.5rem;
    }
    
    .footer-title {
      font-family: 'Dancing Script', cursive;
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: var(--chocolate-light);
    }
    
    .footer-description {
      color: rgba(255,255,255,0.7);
      line-height: 1.6;
    }
    
    .footer-section h3 {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      color: var(--chocolate-light);
      position: relative;
      padding-bottom: 0.5rem;
    }
    
    .footer-section h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 2px;
      background-color: var(--chocolate-light);
    }
    
    .footer-links {
      list-style: none;
      padding: 0;
    }
    
    .footer-links li {
      margin-bottom: 0.8rem;
    }
    
    .footer-links a {
      color: rgba(255,255,255,0.7);
      text-decoration: none;
      transition: color 0.3s;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    
    .footer-links a:hover {
      color: var(--chocolate-light);
    }
    
    .footer-contact i {
      width: 20px;
      text-align: center;
    }
    
    .footer-bottom {
      text-align: center;
      margin-top: 3rem;
      padding-top: 1.5rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      color: rgba(255,255,255,0.7);
      font-size: 0.9rem;
    }
    
    .footer-bottom a {
      color: rgba(255,255,255,0.7);
      text-decoration: none;
      transition: color 0.3s;
    }
    
    .footer-bottom a:hover {
      color: var(--chocolate-light);
    }

    /* Responsive */
    @media(min-width: 768px) {
      .sobre-nosotros {
        flex-direction: row;
        align-items: center;
      }

      .barra {
        flex-direction: row;
      }

      .navegacion {
        margin-top: 0;
      }

      .header__title {
        font-size: 3.5rem;
      }

      .header__subtitle {
        font-size: 1.6rem;
      }
    }

    @media(max-width: 768px) {
      .footer-container {
        grid-template-columns: 1fr;
        gap: 2.5rem;
      }
      
      .footer-section h3 {
        margin-bottom: 1rem;
      }
    }

    @media(max-width: 576px) {
      .navegacion {
        gap: 1rem;
      }

      .logo {
        font-size: 2.5rem;
      }

      .header__title {
        font-size: 2rem;
      }

      .header__subtitle {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="barra">
      <a class="logo" href="usuario.php">ChocoBox</a>
      <nav class="navegacion">
        <a href="recetas.php" class="navegacion__enlace <?php echo ($current_page == 'recetas.php') ? 'activo' : ''; ?>">Recetas</a>
        <a href="nosotros.php" class="navegacion__enlace <?php echo ($current_page == 'nosotros.php') ? 'activo' : ''; ?>">Nosotros</a>
        <a href="articulos.php" class="navegacion__enlace <?php echo ($current_page == 'articulos.php') ? 'activo' : ''; ?>">Artículos</a>
        <a href="datos_curiosos.php" class="navegacion__enlace <?php echo ($current_page == 'datos_curiosos.php') ? 'activo' : ''; ?>">Datos Curiosos</a>
      </nav>
    </div>
    
    <div class="header-content">
      <h1 class="header__title">Noticias, Recetas e Información sobre Chocolate</h1>
      <p class="header__subtitle">Descubre el fascinante mundo del chocolate con nuestros artículos y recetas exclusivas</p>
    </div>
  </header>

  <main class="contenedor">
    <h3 class="centrar-texto">Sobre Nosotros</h3>
    
    <div class="sobre-nosotros">
      <div class="sobre-nosotros__imagen">
        <img src="../img/logo.jpeg" alt="Equipo ChocoBox" />
      </div>
      <div class="sobre-nosotros__texto">
        <p>
          En ChocoBox Express, nos apasiona el chocolate en todas sus formas. Desde 2010, hemos estado creando experiencias dulces e inolvidables para nuestros clientes. Utilizamos materias primas 100% naturales, sin conservantes ni químicos artificiales, para ofrecerte el auténtico sabor del chocolate.
        </p>
        <p>
          Somos una empresa colombiana dedicada a la fabricación, distribución y comercialización de chocolates premium. Cada producto que creamos es una obra maestra de sabor y textura, elaborada con los más altos estándares de calidad y con el cacao más fino del país.
        </p>
        <p>
          Nuestra misión es llevar alegría a través del chocolate, innovando constantemente mientras mantenemos las tradiciones artesanales que hacen de nuestros productos algo especial.
        </p>
      </div>
    </div>

    <div class="nuestra-historia">
      <h4>Nuestra Historia</h4>
      <p>
        Todo comenzó en un pequeño taller en Bogotá, donde nuestro fundador, Carlos Méndez, empezó a experimentar con recetas familiares de chocolate. Lo que empezó como un hobby se convirtió en una pasión compartida por toda la familia. En 2015, decidimos compartir nuestra pasión con el mundo y así nació ChocoBox Express.
      </p>
      <p>
        Hoy, con más de 10 años de experiencia, seguimos manteniendo ese espíritu artesanal mientras incorporamos tecnología de vanguardia para garantizar la máxima calidad en cada uno de nuestros productos. Hemos crecido, pero nuestro compromiso con la excelencia y la satisfacción del cliente sigue siendo el mismo.
      </p>
    </div>

    <h4 class="centrar-texto">Nuestros Valores</h4>
    <div class="valores">
      <div class="valor-card">
        <div class="valor-icon">
          <i class="fas fa-seedling"></i>
        </div>
        <h5>Ingredientes Naturales</h5>
        <p>Utilizamos solo ingredientes 100% naturales, sin conservantes ni aditivos artificiales.</p>
      </div>
      <div class="valor-card">
        <div class="valor-icon">
          <i class="fas fa-heart"></i>
        </div>
        <h5>Pasión por el Chocolate</h5>
        <p>Amamos lo que hacemos y eso se refleja en la calidad de nuestros productos.</p>
      </div>
      <div class="valor-card">
        <div class="valor-icon">
          <i class="fas fa-award"></i>
        </div>
        <h5>Calidad Premium</h5>
        <p>Cada producto pasa por rigurosos controles de calidad para garantizar la excelencia.</p>
      </div>
      <div class="valor-card">
        <div class="valor-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <h5>Sostenibilidad</h5>
        <p>Trabajamos con cacao de comercio justo y prácticas ambientalmente responsables.</p>
      </div>
    </div>
  </main>

  <!-- Footer actualizado -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-brand">
        <h2 class="footer-title">Sábado del Númulo</h2>
        <p class="footer-description">Consultar el avril de la sesión con nosotros. Recibirá auténtica, identitar profesiones y ponerse cabrones de todo el planeta.</p>
      </div>
      
      <div class="footer-section">
        <h3>Calopción</h3>
        <ul class="footer-links">                    

          <li><a href="usuario.php"><i class="fas fa-user"></i> Inicio</a></li>
          <li><a href="Recetas.php"><i class="fas fa-users"></i> Recetas</a></li>
          <li><a href="#"><i class="fas fa-newspaper"></i> Antónica</a></li>
          <li><a href="#"><i class="fas fa-lightbulb"></i> Buenos Cuencas</a></li>
          <li><a href="#"><i class="fas fa-utensils"></i> Alcalde</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>Carlaño</h3>
        <ul class="footer-links footer-contact">
          <li><a href="mailto:info@cabarcabarcadio.com"><i class="fas fa-envelope"></i> info@cabarcabarcadio.com</a></li>
          <li><a href="tel:+42972365078"><i class="fas fa-phone"></i> +42 972 365 078</a></li>
          <li><i class="fas fa-map-marker-alt"></i> P.C.m: del titular 123, Númulo, España</li>
        </ul>
      </div>
    </div>
    
    <div class="footer-bottom">
      © 2023 Carlaño. Todos los derechos reservados. | 
      <a href="#">Política de privacidad</a> | 
      <a href="#">Términos de servicio</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Efecto suave al hacer scroll
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });

      // Animación para los elementos al hacer scroll
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          }
        });
      }, { threshold: 0.1 });

      document.querySelectorAll('.sobre-nosotros, .nuestra-historia, .valor-card').forEach(el => {
        observer.observe(el);
      });
    });
  </script>
</body>
</html>