<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores del Mundo - Recetas de Cocina</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
    <style>
    /* === Variables de estilo === */
    :root {
        --chocolate-dark: #3A2514;
        --chocolate-medium: #6B4423;
        --chocolate-light: #D4A373;
        --cream: #FAEDCD;
        --white: #FFFFFF;
        --black: #2A2A2A;
        --text-light: #777777;
    }

    /* === Estilos generales === */
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: var(--cream);
        color: var(--black);
        line-height: 1.7;
    }

    /* === Header principal === */
    .header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                    url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
        color: white;
        height: 50vh; /* Ocupa la mitad de la altura de la ventana */
        display: flex;
        align-items: center;
        text-align: center;
        position: relative;
    }

    .header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(58, 37, 20, 0.8), rgba(58, 37, 20, 0.6));
        z-index: 1;
    }

    .header-content {
        position: relative;
        z-index: 2;
    }

    .logo {
        font-family: 'Dancing Script', cursive;
        font-size: 3.5rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1.5rem;
    }

    .logo span {
        color: var(--chocolate-light);
    }

    .header-title {
        font-family: 'Dancing Script', cursive;
        font-size: 2.5rem;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .header-subtitle {
        font-size: 1.5rem;
        color: var(--chocolate-light);
        margin-bottom: 2rem;
        font-weight: 500;
    }

    .nav-link-custom {
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        padding: 0.75rem 1.5rem;
        border: 2px solid var(--chocolate-light);
        border-radius: 30px;
        margin: 0 0.5rem;
        transition: all 0.3s;
    }

    .nav-link-custom:hover {
        background-color: var(--chocolate-light);
        color: var(--chocolate-dark);
    }

    .section-title {
        font-family: 'Dancing Script', cursive;
        font-size: 2.5rem;
        color: var(--chocolate-dark);
        margin-bottom: 3rem;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--chocolate-light);
    }

    /* === Cards === */
    .card-custom {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
        background-color: var(--white);
    }

    .card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-img-custom {
        height: 220px;
        object-fit: cover;
        border-bottom: 4px solid var(--chocolate-light);
        border-radius: 15px;
    }

    .card-body-custom {
        padding: 1.5rem;
    }

    .card-title-custom {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--chocolate-dark);
        margin-bottom: 1rem;
    }

    /* === Meta info en recetas === */
    .recipe-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        font-size: 0.9rem;
        color: var(--text-light);
    }

    .recipe-meta span {
        display: flex;
        align-items: center;
    }

    .recipe-meta i {
        margin-right: 5px;
        color: var(--chocolate-medium);
    }

    .recipe-list {
        list-style-type: none;
        padding-left: 0;
    }

    .recipe-list li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .recipe-list li::before {
        content: '•';
        color: var(--chocolate-light);
        font-size: 1.5rem;
        position: absolute;
        left: 0;
        top: -3px;
    }

    .highlight-tip {
        background-color: rgba(212, 163, 115, 0.1);
        border-left: 3px solid var(--chocolate-light);
        padding: 0.75rem;
        margin-top: 1rem;
        border-radius: 0 5px 5px 0;
    }

    /* === Footer === */
    .footer {
        background-color: var(--chocolate-dark);
        color: white;
        padding: 3rem 0;
    }

    .footer-title {
        font-family: 'Dancing Script', cursive;
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
    }

    .footer-links {
        list-style: none;
        padding-left: 0;
    }

    .footer-links li {
        margin-bottom: 0.5rem;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-links a:hover {
        color: var(--chocolate-light);
    }

    .social-icon {
        color: white;
        font-size: 1.5rem;
        margin: 0 0.5rem;
        transition: color 0.3s;
    }

    .social-icon:hover {
        color: var(--chocolate-light);
    }

    .copyright {
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
    }

    /* === Iconos de dificultad === */
    .fa-candy-cane {
        color: #6B4423; 
    }

    .far.fa-candy-cane {
        color: #ccc;
    }

    /* === Scrollbar personalizado === */
    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        background: var(--cream);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: var(--chocolate-light);
        border-radius: 10px;
        border: 3px solid var(--cream);
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: var(--chocolate-dark);
    }

    /* === Contenedor de información de receta === */
    .recipe-info-container {
        background-color: var(--cream);
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* === Media Queries === */
    @media (max-width: 768px) {
        .logo {
            font-size: 2.5rem;
        }
        .header-title {
            font-size: 2rem;
        }
        .header-subtitle {
            font-size: 1.2rem;
        }
        .nav-link-custom {
            display: block;
            margin: 0.5rem auto;
            max-width: 200px;
        }
        .section-title {
            font-size: 2rem;
        }
        .card-img-custom {
            height: 180px;
        }
    }

    @media (max-width: 576px) {
        .logo {
            font-size: 2rem;
        }
        .header-title {
            font-size: 1.5rem;
        }
        .section-title {
            font-size: 1.8rem;
        }
        .card-title-custom {
            font-size: 1.3rem;
        }
    }
</style>
</head>
<body>
<!-- Header - Banner Principal sin Menú -->
<header class="header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center header-content">
        <h1 class="logo">Sabores <span>del Mundo</span></h1>
        <h2 class="header-title">Recetas de Cocina</h2>
        <p class="header-subtitle">DESCUBRE NUEVOS SABORES</p>
        <p class="lead mb-4">Explora recetas de todo el mundo, técnicas culinarias y secretos de cocina</p>
      </div>
    </div>
  </div>
</header>

<!-- CSS Adicional -->
<style>
  
</style>

<!-- Contenedor principal de la receta -->
<div class="container my-5">
    <!-- Receta Ejemplo -->
    <div class="row align-items-stretch g-4 mb-5">
        <!-- Imagen -->
        <div class="col-md-5 col-lg-4">
            <img src="../img/cake.png" class="img-fluid rounded card-img-custom" alt="Brownie de chocolate">
        </div>
        <!-- Información -->
        <div class="col-md-7 col-lg-8 bg-white p-4 rounded shadow-sm recipe-info-container">
            <!-- Título -->
            <h3 class="card-title card-title-custom">Brownie Clásico de Chocolate</h3>
            <!-- Descripción -->
            <p class="fs-5">Un brownie denso, húmedo y cargado de sabor a chocolate negro. Ideal para amantes intensos del cacao.</p>
            <!-- Nivel de dificultad -->
            <div class="d-flex align-items-center mt-auto">
                <span>Nivel de dificultad:</span>
                <div class="ms-2">
                    <i class="fas fa-candy-cane text-warning"></i>
                    <i class="fas fa-candy-cane text-warning"></i>
                    <i class="far fa-candy-cane text-muted"></i>
                    <i class="far fa-candy-cane text-muted"></i>
                    <i class="far fa-candy-cane text-muted"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS Adicional -->
<style>
    /* Estilo para la imagen */
    .card-img-custom {
        height: 200px; /* Altura fija */
        width: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    /* Estilo para el contenedor de información */
    .recipe-info-container {
        background-color: var(--cream); /* Fondo claro */
        padding: 1.5rem; /* Espacio interno */
        border-radius: 15px; /* Bordes redondeados */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Sombra suave */
    }
</style>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h3 class="footer-title">Sabores del Mundo</h3>
                <p>Descubre el arte de la cocina con nosotros. Recetas auténticas, técnicas profesionales y secretos culinarios de todo el planeta.</p>
                <div class="mt-3">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="footer-title">Categorías</h3>
                <ul class="footer-links">
                    <li><a href="../index.php?action=Home_usuario" class="navegacion__enlace">👤 perfil</a></li>
                    <li><a href="nosotros.php" class="navegacion__enlace">Nosotros</a></li>
                    <li><a href="articulos.php" class="ver-mas-btn">Articulos</a></li>
                    <li><a href="datos_curiosos"> Datos Curiosos</a></li>
                    <li><a href="#recetas">Recetas</a></li>
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
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>