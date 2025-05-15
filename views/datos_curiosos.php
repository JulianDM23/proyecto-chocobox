<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Curiosos ChocoBox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --chocolate-dark: #3A2514;
            --chocolate-medium: #6B4423;
            --chocolate-light: #D4A373;
            --cream: #FAEDCD;
            --white: #FFFFFF;
            --black: #2A2A2A;
            --gray: #F5F5F5;
            --text-dark: #333333;
            --text-light: #777777;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--cream);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header - Banner Principal */
        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1493925410384-84f842e616fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            color: var(--white);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            padding: 20px;
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
            max-width: 800px;
            width: 100%;
        }

        .logo {
            font-family: 'Dancing Script', cursive;
            font-size: 3rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 40px;
        }

        .logo__bold {
            color: var(--chocolate-light);
        }

        .header__title {
            font-size: 2.5rem;
            font-family: 'Dancing Script', cursive;
            color: var(--white);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .header__subtitle {
            font-size: 1.8rem;
            color: var(--chocolate-light);
            margin-bottom: 30px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .header__description {
            font-size: 1.2rem;
            margin-bottom: 40px;
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .nav-links a {
            color: var(--white);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1.1rem;
            padding: 10px 20px;
            border: 2px solid var(--chocolate-light);
            border-radius: 30px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .nav-links a:hover {
            background-color: var(--chocolate-light);
            color: var(--chocolate-dark);
        }

        /* Contenido Principal */
        .main-content {
            padding: 80px 0;
            text-align: center;
        }

        .section-title {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: var(--chocolate-dark);
            margin-bottom: 40px;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .article-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .article-card:hover {
            transform: translateY(-10px);
        }

        .article-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .article-content {
            padding: 20px;
        }

        .article-title {
            font-size: 1.3rem;
            color: var(--chocolate-dark);
            margin-bottom: 10px;
        }

        .article-excerpt {
            color: var(--text-light);
            margin-bottom: 15px;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        /* Nuevos estilos para el despliegue de contenido */
        .read-more {
            display: inline-block;
            color: var(--chocolate-medium);
            font-weight: 600;
            transition: color 0.3s ease;
            cursor: pointer;
            user-select: none;
        }

        .read-more:hover {
            color: var(--chocolate-dark);
        }

        .read-more::after {
            content: " →";
        }

        .read-more.active::after {
            content: " ↑";
        }

        .article-full-content {
            display: none;
            padding: 15px 0;
            border-top: 1px solid rgba(212, 163, 115, 0.3);
            margin-top: 15px;
            animation: fadeIn 0.3s ease;
            color: var(--text-dark);
            font-size: 0.95rem;
            line-height: 1.7;
            text-align: left;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Footer */
        .footer {
            background-color: var(--chocolate-dark);
            color: var(--white);
            padding: 60px 0 30px;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-family: 'Dancing Script', cursive;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--chocolate-light);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .social-links a {
            color: var(--white);
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--chocolate-light);
        }

        .copyright {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.7);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .logo {
                font-size: 2.5rem;
            }
            
            .header__title {
                font-size: 2rem;
            }
            
            .header__subtitle {
                font-size: 1.5rem;
            }
            
            .nav-links {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-links a {
                padding: 8px 15px;
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .logo {
                font-size: 2rem;
            }
            
            .header__title {
                font-size: 1.8rem;
            }
            
            .header__subtitle {
                font-size: 1.2rem;
            }
            
            .header__description {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header - Banner Principal -->
    <header class="header">
        <div class="header-content">
            <h1 class="logo">Datos curiosos <span class="logo__bold">ChocoBox</span></h1>
            
            <p class="header__title">Información</p>
            <p class="header__subtitle">DATOS CURIOSOS</p>
            <p class="header__description">Los mejores recetas y consejos</p>
            
            <div class="nav-links">
                <a href="nosotros.html">NOSOTROS</a>
                <a href="recetas.html">RECETAS</a>
            </div>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="main-content container">
        <h2 class="section-title">Descubre nuestro contenido</h2>
        
        <div class="articles-grid">
            <!-- Artículo 1 - Historia del Chocolate -->
            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Historia del chocolate" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">La historia del chocolate</h3>
                    <p class="article-excerpt">Descubre cómo el chocolate se convirtió en uno de los dulces más populares del mundo.</p>
                    <span class="read-more">Leer más</span>
                    <div class="article-full-content">
                        <p>El chocolate tiene sus orígenes en las antiguas culturas mesoamericanas, donde los olmecas (1500-400 a.C.) fueron los primeros en procesar el cacao. Los mayas (600 a.C.) lo consideraban "el alimento de los dioses" y lo usaban en rituales sagrados. Los aztecas (1400 d.C.) creían que el cacao era un regalo del dios Quetzalcóatl y lo usaban como moneda.</p>
                        <p>Con la llegada de los españoles a América en el siglo XVI, el chocolate fue introducido en Europa, donde se le añadió azúcar y especias, transformándose en la delicia dulce que conocemos hoy.</p>
                    </div>
                </div>
            </article>
            
            <!-- Artículo 2 - Tipos de Chocolate -->
            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Tipos de chocolate" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Tipos de chocolate</h3>
                    <p class="article-excerpt">Conoce las diferencias entre chocolate negro, con leche, blanco y sus porcentajes.</p>
                    <span class="read-more">Leer más</span>
                    <div class="article-full-content">
                        <p><strong>Chocolate negro:</strong> Contiene entre 70% y 100% de cacao. Es el más puro y saludable, con un sabor intenso y amargo.</p>
                        <p><strong>Chocolate con leche:</strong> Lleva entre 25% y 40% de cacao, mezclado con leche en polvo y azúcar. Tiene un sabor más dulce y suave.</p>
                        <p><strong>Chocolate blanco:</strong> No contiene sólidos de cacao, solo manteca de cacao (mínimo 20%), leche y azúcar. Tiene textura cremosa y sabor dulce.</p>
                        <p><strong>Chocolate ruby:</strong> El más reciente, de color rosado natural, con un sabor afrutado y ligeramente ácido.</p>
                    </div>
                </div>
            </article>
            
            <!-- Artículo 3 - Beneficios del Chocolate -->
            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Beneficios del chocolate" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Beneficios del chocolate</h3>
                    <p class="article-excerpt">Aprende sobre los sorprendentes beneficios para la salud del chocolate negro.</p>
                    <span class="read-more">Leer más</span>
                    <div class="article-full-content">
                        <p><strong>1. Rico en antioxidantes:</strong> El cacao contiene flavonoides que combaten los radicales libres y retrasan el envejecimiento.</p>
                        <p><strong>2. Mejora el estado de ánimo:</strong> Estimula la producción de serotonina y endorfinas, generando sensación de bienestar.</p>
                        <p><strong>3. Beneficia al corazón:</strong> Reduce la presión arterial y mejora la circulación sanguínea.</p>
                        <p><strong>4. Fuente de minerales:</strong> Contiene hierro, magnesio, cobre, manganeso y potasio.</p>
                        <p><strong>5. Mejora la función cerebral:</strong> Los flavonoides del cacao mejoran el flujo sanguíneo al cerebro y la función cognitiva.</p>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>ChocoBox</h3>
                    <p>Descubre el mundo del chocolate con nosotros.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Enlaces</h3>
                    <ul class="footer-links">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Recetas</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <p>info@chocobox.com</p>
                    <p>+1 234 567 890</p>
                    
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <p class="copyright">© 2023 ChocoBox. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreButtons = document.querySelectorAll('.read-more');
            
            readMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Toggle clase 'active' en el botón
                    this.classList.toggle('active');
                    
                    // Encuentra el contenido asociado
                    const content = this.nextElementSibling;
                    
                    // Alterna la visualización del contenido
                    if (content.style.display === 'block') {
                        content.style.display = 'none';
                    } else {
                        content.style.display = 'block';
                    }
                });
            });
        });
    </script>
</body>
</html>