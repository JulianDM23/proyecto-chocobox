<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Curiosos ChocoBox</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
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
            --text-light: #777777;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--cream);
            color: var(--black);
            line-height: 1.7;
        }

        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1493925410384-84f842e616fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            color: white;
            min-height: 100vh;
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

        .card-custom {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .card-img-custom {
            height: 220px;
            object-fit: cover;
            border-bottom: 4px solid var(--chocolate-light);
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

        .fun-fact-list {
            list-style-type: none;
            padding-left: 0;
        }

        .fun-fact-list li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .fun-fact-list li::before {
            content: '•';
            color: var(--chocolate-light);
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: -3px;
        }

        .highlight-fact {
            background-color: rgba(212, 163, 115, 0.1);
            border-left: 3px solid var(--chocolate-light);
            padding: 0.75rem;
            margin-top: 1rem;
            border-radius: 0 5px 5px 0;
        }

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
            color: rgba(255,255,255,0.7);
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
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.7);
        }

        /* Nuevos estilos añadidos */
        .hero-btn {
            font-size: 1.1rem;
            padding: 0.8rem 2rem;
            margin: 0.5rem;
        }
        
        .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--chocolate-light);
            color: var(--chocolate-dark);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--chocolate-medium);
        }
        
        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
        }
        
        .newsletter-input {
            border: 2px solid var(--chocolate-light);
            border-radius: 30px;
            padding: 0.75rem 1.5rem;
        }
        
        .newsletter-btn {
            background-color: var(--chocolate-light);
            color: var(--chocolate-dark);
            border-radius: 30px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            border: none;
        }
        
        .stats-item {
            text-align: center;
            padding: 2rem;
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--chocolate-light);
            margin-bottom: 0.5rem;
        }
        
        .stats-label {
            font-size: 1rem;
            color: var(--chocolate-medium);
            font-weight: 600;
        }

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
            
            .hero-btn {
                font-size: 1rem;
                padding: 0.6rem 1.5rem;
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
            
            .stats-item {
                padding: 1rem;
            }
            
            .stats-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header - Banner Principal -->
    <header class="header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center header-content">
                    <h1 class="logo">Datos curiosos <span>ChocoBox</span></h1>
                    <h2 class="header-title">El mundo del chocolate</h2>
                    <p class="header-subtitle">DESCUBRE SUS SECRETOS</p>
                    <p class="lead mb-4">Explora los datos más fascinantes, la historia y los beneficios de este delicioso manjar</p>
                    
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="#curiosidades" class="btn btn-outline-light btn-lg hero-btn me-2">
                            <i class="fas fa-star me-2"></i>Curiosidades
                        </a>
                        <a href="#historia" class="btn btn-outline-light btn-lg hero-btn me-2">
                            <i class="fas fa-history me-2"></i>Historia
                        </a>
                        <a href="#beneficios" class="btn btn-light btn-lg hero-btn">
                            <i class="fas fa-heart me-2"></i>Beneficios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sección de Estadísticas -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">5000</div>
                        <div class="stats-label">Años de historia</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">7.2</div>
                        <div class="stats-label">Millones de toneladas/año</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">300+</div>
                        <div class="stats-label">Compuestos aromáticos</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">50</div>
                        <div class="stats-label">Países productores</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido Principal -->
    <main class="py-5">
        <!-- Sección Curiosidades -->
        <section id="curiosidades" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Curiosidades del Chocolate</h2>
                        <p class="lead">Datos fascinantes que probablemente no conocías</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Artículo 1 - Chocolate en el espacio -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">CURIOSIDAD</div>
                            <img src="https://images.unsplash.com/photo-1587486913049-53fc88980cfc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chocolate en el espacio">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Chocolate Espacial</h3>
                                <ul class="fun-fact-list">
                                    <li>Incluido en dietas de astronautas desde los 60s.</li>
                                    <li>M&M's fue el primer dulce en el espacio (1985).</li>
                                    <li>Snack oficial de la NASA.</li>
                                    <li>Se consume en bolsas especiales en gravedad cero.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> Los M&M's espaciales son más resistentes para no deshacerse.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artículo 2 - Chocolate y animales -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">SALUD</div>
                            <img src="https://images.unsplash.com/photo-1591871937573-3d4bb8a23225?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chocolate y animales">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Chocolate y Animales</h3>
                                <ul class="fun-fact-list">
                                    <li>Tóxico para perros y gatos (teobromina).</li>
                                    <li>El negro es más peligroso que el con leche.</li>
                                    <li>El blanco casi no contiene teobromina.</li>
                                    <li>Primates pueden comerlo sin problemas.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> 50g de chocolate negro pueden ser fatales para un perro pequeño.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artículo 3 - Chocolate más caro -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">LUXE</div>
                            <img src="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chocolate de lujo">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Chocolates de Lujo</h3>
                                <ul class="fun-fact-list">
                                    <li>El "To'ak" ecuatoriano cuesta $260 la barra.</li>
                                    <li>Chocolates con oro comestible 24K.</li>
                                    <li>Trufas rellenas de champán Dom Pérignon.</li>
                                    <li>Tabletas con especias raras como azafrán.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> Una tableta de chocolate del Titanic se vendió por $1,500.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección Historia -->
        <section id="historia" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Historia del Chocolate</h2>
                        <p class="lead">Un viaje a través del tiempo</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Artículo 1 - Historia del Chocolate -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">HISTORIA</div>
                            <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Historia del chocolate">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Orígenes del Chocolate</h3>
                                <ul class="fun-fact-list">
                                    <li>Los olmecas (1500-400 a.C.) fueron los primeros en procesar el cacao.</li>
                                    <li>Los mayas lo consideraban "el alimento de los dioses".</li>
                                    <li>Los aztecas usaban granos de cacao como moneda.</li>
                                    <li>El chocolate sólido se inventó en 1847.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> Cristóbal Colón fue el primer europeo en encontrar granos de cacao en 1502.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artículo 2 - Evolución del chocolate -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">EVOLUCIÓN</div>
                            <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Evolución del chocolate">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Evolución del Chocolate</h3>
                                <ul class="fun-fact-list">
                                    <li>Siglo XVI: Llegada a Europa como bebida aristocrática.</li>
                                    <li>1828: Van Houten inventa la prensa de cacao.</li>
                                    <li>1875: Daniel Peter crea el chocolate con leche.</li>
                                    <li>2017: Presentación del chocolate ruby.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> La primera fábrica de chocolate en EE.UU. abrió en 1765.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artículo 3 - Producción -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">PRODUCCIÓN</div>
                            <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Producción de chocolate">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Producción del Chocolate</h3>
                                <ul class="fun-fact-list">
                                    <li>Árbol Theobroma cacao da 30-50 semillas/vaina.</li>
                                    <li>Proceso: fermentar, secar, tostar, moler.</li>
                                    <li>Prensado separa manteca de cacao.</li>
                                    <li>400 semillas = 1 libra de chocolate.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> Un árbol produce solo 2-3 lbs de cacao al año.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección Beneficios -->
        <section id="beneficios" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Beneficios del Chocolate</h2>
                        <p class="lead">Razones saludables para disfrutarlo</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Artículo 1 - Beneficios -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">SALUD</div>
                            <img src="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Beneficios del chocolate">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Beneficios Saludables</h3>
                                <ul class="fun-fact-list">
                                    <li>Rico en antioxidantes (más que el té verde).</li>
                                    <li>Mejora el estado de ánimo (aumenta serotonina).</li>
                                    <li>Reduce la presión arterial.</li>
                                    <li>Mejora la función cerebral.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> 30g de chocolate negro al día reducen el estrés.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artículo 2 - Tipos de Chocolate -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">VARIEDADES</div>
                            <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Tipos de chocolate">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Tipos de Chocolate</h3>
                                <ul class="fun-fact-list">
                                    <li><strong>Negro:</strong> 70-100% cacao, intenso y saludable.</li>
                                    <li><strong>Con leche:</strong> 25-40% cacao, más dulce y suave.</li>
                                    <li><strong>Blanco:</strong> Solo manteca de cacao, sin sólidos.</li>
                                    <li><strong>Ruby:</strong> Color rosado natural, sabor afrutado.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> El chocolate ruby es el primer nuevo tipo en 80 años.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artículo 3 - Chocolate y deporte -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">DEPORTE</div>
                            <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chocolate y deporte">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Chocolate y Deporte</h3>
                                <ul class="fun-fact-list">
                                    <li>Mejora el flujo sanguíneo a los músculos.</li>
                                    <li>Reduce el estrés oxidativo post-ejercicio.</li>
                                    <li>Fuente rápida de energía.</li>
                                    <li>Contiene magnesio para la recuperación.</li>
                                </ul>
                                <div class="highlight-fact">
                                    <strong>Dato curioso:</strong> Los ciclistas que consumen chocolate rinden 17% más.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección Testimonios -->
        <section class="py-5 bg-light">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Lo que dicen los expertos</h2>
                        <p class="lead mb-5">Testimonios de chefs y nutricionistas</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "El chocolate negro de alta calidad es uno de los alimentos más complejos sensorialmente, con más de 600 compuestos aromáticos identificados."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle me-2" width="40" alt="Chef">
                                María González, Chef Chocolatier
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "Los flavonoides del cacao mejoran la función endotelial y reducen la presión arterial. Recomiendo 20-30g diarios de chocolate con 70%+ cacao."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-2" width="40" alt="Nutricionista">
                                Dr. Carlos Méndez, Nutricionista
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "El proceso de fermentación del cacao es crucial. Un buen chocolate empieza con granos bien fermentados, que desarrollan los precursores del sabor."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-2" width="40" alt="Productora">
                                Luisa Fernández, Productora de Cacao
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   </main>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h3 class="footer-title">ChocoBox</h3>
                    <p>Descubre el mundo del chocolate con nosotros. Datos curiosos, historia, beneficios y las mejores recetas.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <h3 class="footer-title">Enlaces</h3>
                    <ul class="footer-links">
                        <li><a href="../index.php?action=Home_usuario" class="navegacion__enlace">Tu perfil</a></li>
                        <li><a href="nosotros.php" class="navegacion__enlace">Nosotros</a></li>
                        <li><a href="articulos.php" class="ver-mas-btn">Articulos</a></li>
                         <li><a href="#curiosidades">Curiosidades</a></li>
                         <li><a href="#historia">Historia</a></li>
                         <li><a href="#beneficios">Beneficios</a></li>
                         <li><a href="Recetas.php" class="navegacion__enlace">Nuestras Recetas</a></li>

                    </ul>
                </div>
                
                <div class="col-md-4">
                    <h3 class="footer-title">Contacto</h3>
                    <p><i class="fas fa-envelope me-2"></i> info@chocobox.com</p>
                    <p><i class="fas fa-phone me-2"></i> +1 234 567 890</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Calle del Cacao 123, Ciudad Chocolate</p>
                    
                  
            
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright mt-4">© 2023 ChocoBox. Todos los derechos reservados. | <a href="#" class="text-white">Política de privacidad</a> | <a href="#" class="text-white">Términos de servicio</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>