<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores del Mundo - Recetas de Cocina</title>
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
                        url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
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
            background-color: var(--white);
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

        .difficulty-easy {
            color: #28a745;
        }
        
        .difficulty-medium {
            color: #ffc107;
        }
        
        .difficulty-hard {
            color: #dc3545;
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
                    <h1 class="logo">Sabores <span>del Mundo</span></h1>
                    <h2 class="header-title">Recetas de Cocina</h2>
                    <p class="header-subtitle">DESCUBRE NUEVOS SABORES</p>
                    <p class="lead mb-4">Explora recetas de todo el mundo, técnicas culinarias y secretos de cocina</p>
                    
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="#recetas" class="btn btn-outline-light btn-lg hero-btn me-2">
                            <i class="fas fa-utensils me-2"></i>Recetas
                        </a>
                        <a href="#tecnicas" class="btn btn-outline-light btn-lg hero-btn me-2">
                            <i class="fas fa-book me-2"></i>Técnicas
                        </a>
                        <a href="#chefs" class="btn btn-light btn-lg hero-btn">
                            <i class="fas fa-user-tie me-2"></i>Chefs
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
                        <div class="stats-number">500+</div>
                        <div class="stats-label">Recetas disponibles</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">50</div>
                        <div class="stats-label">Países representados</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">100%</div>
                        <div class="stats-label">Recetas probadas</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number">4.9</div>
                        <div class="stats-label">Valoración promedio</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido Principal -->
    <main class="py-5">
        <!-- Sección Recetas -->
        <section id="recetas" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Nuestras Recetas</h2>
                        <p class="lead">Platos deliciosos para todos los gustos</p>
                    </div>
                </div>
                
                
                <div class="row g-4">
                    <!-- Receta 1 - Pasta italiana -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">ITALIA</div>
                            <img src="https://images.unsplash.com/photo-1555949258-eb67b1ef0ceb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Pasta italiana">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Pasta Carbonara Auténtica</h3>
                                <div class="recipe-meta">
                                    <span><i class="fas fa-clock"></i> 30 min</span>
                                    <span><i class="fas fa-user-friends"></i> 4 porciones</span>
                                    <span class="difficulty-medium"><i class="fas fa-signal"></i> Media</span>
                                </div>
                                <ul class="recipe-list">
                                    <li>400g spaghetti</li>
                                    <li>200g panceta o guanciale</li>
                                    <li>4 yemas de huevo</li>
                                    <li>50g queso pecorino</li>
                                    <li>Pimienta negra</li>
                                </ul>
                                <div class="highlight-tip">
                                    <strong>Consejo del chef:</strong> Nunca uses crema en una carbonara auténtica.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Receta 2 - Comida mexicana -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">MÉXICO</div>
                            <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Tacos al pastor">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Tacos al Pastor</h3>
                                <div class="recipe-meta">
                                    <span><i class="fas fa-clock"></i> 2 hrs</span>
                                    <span><i class="fas fa-user-friends"></i> 6 porciones</span>
                                    <span class="difficulty-hard"><i class="fas fa-signal"></i> Difícil</span>
                                </div>
                                <ul class="recipe-list">
                                    <li>1kg carne de cerdo</li>
                                    <li>Chiles guajillo y ancho</li>
                                    <li>Piña</li>
                                    <li>Cebolla y cilantro</li>
                                    <li>Tortillas de maíz</li>
                                </ul>
                                <div class="highlight-tip">
                                    <strong>Consejo del chef:</strong> Marina la carne por 24 horas para mejor sabor.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Receta 3 - Postre francés -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">FRANCIA</div>
                            <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Crème brûlée">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Crème Brûlée Clásica</h3>
                                <div class="recipe-meta">
                                    <span><i class="fas fa-clock"></i> 1 hr + enfriar</span>
                                    <span><i class="fas fa-user-friends"></i> 6 porciones</span>
                                    <span class="difficulty-easy"><i class="fas fa-signal"></i> Fácil</span>
                                </div>
                                <ul class="recipe-list">
                                    <li>6 yemas de huevo</li>
                                    <li>500ml crema espesa</li>
                                    <li>100g azúcar</li>
                                    <li>1 vaina de vainilla</li>
                                    <li>Azúcar extra para caramelizar</li>
                                </ul>
                                <div class="highlight-tip">
                                    <strong>Consejo del chef:</strong> Usa un soplete de cocina para el acabado perfecto.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección Técnicas -->
        <section id="tecnicas" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Técnicas Culinarias</h2>
                        <p class="lead">Domina las habilidades esenciales</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Técnica 1 - Corte de verduras -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">BÁSICOS</div>
                            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Corte de verduras">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Técnicas de Corte</h3>
                                <ul class="recipe-list">
                                    <li><strong>Juliana:</strong> tiras finas y alargadas</li>
                                    <li><strong>Brunoise:</strong> cubos pequeños de 2-3mm</li>
                                    <li><strong>Chiffonade:</strong> hojas enrolladas y cortadas finas</li>
                                    <li><strong>Mirepoix:</strong> cubos medianos para bases</li>
                                </ul>
                                <div class="highlight-tip">
                                    <strong>Consejo:</strong> Mantén el cuchillo afilado y usa una tabla estable.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Técnica 2 - Cocción -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">MÉTODOS</div>
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Métodos de cocción">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Métodos de Cocción</h3>
                                <ul class="recipe-list">
                                    <li><strong>Sofreír:</strong> cocción rápida a fuego medio-alto</li>
                                    <li><strong>Estofar:</strong> cocción lenta en líquido</li>
                                    <li><strong>Hornear:</strong> cocción por aire caliente</li>
                                    <li><strong>Al vapor:</strong> cocción saludable sin grasa</li>
                                </ul>
                                <div class="highlight-tip">
                                    <strong>Consejo:</strong> Controla siempre la temperatura para mejores resultados.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Técnica 3 - Salsas -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">SAUCER</div>
                            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Salsas madre">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Salsas Madre</h3>
                                <ul class="recipe-list">
                                    <li><strong>Bechamel:</strong> base de roux y leche</li>
                                    <li><strong>Velouté:</strong> roux y caldo claro</li>
                                    <li><strong>Española:</strong> roux y caldo oscuro</li>
                                    <li><strong>Holandesa:</strong> emulsión de yema y mantequilla</li>
                                    <li><strong>Tomate:</strong> salsa de tomate reducida</li>
                                </ul>
                                <div class="highlight-tip">
                                    <strong>Consejo:</strong> Domina estas 5 para crear cientos de variaciones.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección Chefs -->
        <section id="chefs" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Nuestros Chefs</h2>
                        <p class="lead">Aprende de los mejores profesionales</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Chef 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">ITALIA</div>
                            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chef italiano">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Marco Bianchi</h3>
                                <p>Especialista en cocina italiana tradicional con 20 años de experiencia. Ganador de 2 estrellas Michelin.</p>
                                <div class="highlight-tip">
                                    <strong>Frase:</strong> "La pasta al dente es una religión, no una preferencia."
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Chef 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">JAPÓN</div>
                            <img src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chef japonesa">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Yuki Tanaka</h3>
                                <p>Maestra sushi con formación en Tokio. Especializada en washoku (cocina tradicional japonesa).</p>
                                <div class="highlight-tip">
                                    <strong>Frase:</strong> "El arroz para sushi debe tener el sabor del cielo."
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Chef 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            <div class="category-badge">PERÚ</div>
                            <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top card-img-custom" alt="Chef peruano">
                            <div class="card-body card-body-custom">
                                <h3 class="card-title card-title-custom">Carlos Acurio</h3>
                                <p>Embajador de la cocina peruana. Propietario de varios restaurantes premiados internacionalmente.</p>
                                <div class="highlight-tip">
                                    <strong>Frase:</strong> "La cocina peruana es el ADN de nuestro país en un plato."
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
                        <h2 class="section-title">Lo que dicen nuestros usuarios</h2>
                        <p class="lead mb-5">Testimonios de cocineros caseros</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "Gracias a Sabores del Mundo aprendí a hacer pasta fresca como un italiano. Mis hijos ahora prefieren mis platos a los de los restaurantes."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle me-2" width="40" alt="Usuario">
                                Ana Martínez, Madrid
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "Nunca pensé que podría hacer sushi en casa. Las técnicas paso a paso son increíblemente detalladas. Ahora hago sushi todos los viernes."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-2" width="40" alt="Usuario">
                                Javier López, Barcelona
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "Como chef profesional, aprecio la autenticidad de las recetas. Uso este sitio para inspirarme y enseñar a mis aprendices."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-2" width="40" alt="Chef">
                                Sofía Ramírez, Restaurante "El Mirador"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección Newsletter -->
       
   </main>
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
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>