<?php
// Obtener el nombre de la página actual
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BlogDeCafé</title>
  <link rel="stylesheet" href="css/recetas.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/recetas.css">
  <style>
    /* Estilos generales */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Estilos del menú */
    .menu-container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .menu-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #333;
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
    }

    .category {
      margin-bottom: 40px;
    }

    .category-title {
      font-size: 2rem;
      margin-bottom: 30px;
      color: #444;
    }

    .product-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .product-item {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 15px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .product-item:hover {
      transform: translateY(-5px);
    }

    .product-image {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
    }

    .product-info {
      flex: 1;
    }

    .product-title {
      font-size: 1.25rem;
      color: #333;
      margin-bottom: 8px;
    }

    .product-description {
      color: #666;
      margin-bottom: 10px;
      line-height: 1.5;
    }

    .product-price {
      color: #2c5282;
      font-size: 1.2rem;
      font-weight: bold;
    }

    /* Resaltar el enlace activo */
    .navegacion__enlace.activo {
      font-weight: bold;
      color: #2c5282; /* Cambia el color como prefieras */
    }

    /* Media query para pantallas pequeñas */
    @media (max-width: 768px) {
      .menu-grid {
        grid-template-columns: 1fr;
      }

      .product-item {
        flex-direction: column;
        text-align: center;
      }

      .product-image {
        width: 150px;
        height: 150px;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="contenedor">
      <div class="barra">
        <!-- Logo -->
        <a class="logo" href="usuario.php">
          <h1 class="logo__nombre no-margin centrar-texto">
            Recetas<span class="logo__bold">ChocoBox</span>
          </h1>
        </a>

        <nav class="navegacion">
          <!-- Cambié los enlaces para activar dinámicamente el enlace activo -->
          <a href="nosotros.php" class="navegacion__enlace <?php echo ($current_page == 'nosotros.php') ? 'activo' : ''; ?>">Nosotros</a>
        </nav>
      </div>
    </div>
    
    <div class="header__texto">
      <h2 class="no-margin">Recetas</h2>
      <p class="no-margin">
        El Arte del Chocolate en Cada Receta
      </p>
    </div>
  </header>

  <div class="menu-container">
    <h1 class="menu-title">Menú de Productos</h1>
    <div class="menu-grid">
      <!-- Primera columna -->
      <div class="category">
        <div class="product-list">
          <div class="product-item">
            <img src="../img/menu-1.jpg" alt="Brownies de Chocolate" class="product-image">
            <div class="product-info">
              <h3 class="product-title">Brownies de Chocolate</h3>
              <p class="product-description">Los brownies son un clásico postre de chocolate, deliciosamente densos y con un interior suave. Se preparan con chocolate derretido, azúcar, huevos, mantequilla y harina.</p>
              
            </div>
          </div>
          <div class="product-item">
            <img src="../img/menu-1.jpg" alt="Brownies de Chocolate" class="product-image">
            <div class="product-info">
              <h3 class="product-title">Brownies de Chocolate</h3>
              <p class="product-description">Los brownies son un clásico postre de chocolate, deliciosamente densos y con un interior suave. Se preparan con chocolate derretido, azúcar, huevos, mantequilla y harina.</p>
              
            </div>
          </div>
          <div class="product-item">
            <img src="../img/menu-1.jpg" alt="Brownies de Chocolate" class="product-image">
            <div class="product-info">
              <h3 class="product-title">Brownies de Chocolate</h3>
              <p class="product-description">Los brownies son un clásico postre de chocolate, deliciosamente densos y con un interior suave. Se preparan con chocolate derretido, azúcar, huevos, mantequilla y harina.</p>
              
            </div>
          </div>
        </div>
      </div>

      <!-- Segunda columna -->
      <div class="category">
        <div class="product-list">
          <div class="product-item">
            <img src="../img/menu-2.jpg" alt="Café Helado" class="product-image">
            <div class="product-info">
              <h3 class="product-title">Café Helado</h3>
              <p class="product-description">Delicioso café preparado en frío, servido con hielo y un toque de crema para una experiencia refrescante.</p>
              
            </div>
          </div>
          <div class="product-item">
            <img src="../img/menu-2.jpg" alt="Café Helado" class="product-image">
            <div class="product-info">
              <h3 class="product-title">Café Helado</h3>
              <p class="product-description">Delicioso café preparado en frío, servido con hielo y un toque de crema para una experiencia refrescante.</p>
              
            </div>
          </div>
          <div class="product-item">
            <img src="../img/menu-2.jpg" alt="Café Helado" class="product-image">
            <div class="product-info">
              <h3 class="product-title">Café Helado</h3>
              <p class="product-description">Delicioso café preparado en frío, servido con hielo y un toque de crema para una experiencia refrescante.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="contenedor">
      <div class="barra">
        <a class="logo" href="index.html">
          <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold">ChocoBox</span></h1>
        </a>
        <p style="color: #e2e8f0;">Todos los Derechos Reservados © 2025 - BlogChocoBox</p>


      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
