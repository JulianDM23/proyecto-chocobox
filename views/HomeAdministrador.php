<?php
// ✅ Previene el error de "session already active"
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ✅ Verificación de sesión del administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php?action=login_usuario");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Chocobox</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
        /* ✅ Fondo con la misma imagen de antes */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') 
                no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            font-size: 30px;
            color: #d4a373;
        }

        h2 {
            font-size: 22px;
            color: #d4a373;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            display: block;
            padding: 12px;
            background: #d4a373;
            color: #222;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 18px;
        }

        nav ul li a:hover {
            background: #f4a261;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background: rgba(212, 163, 115, 0.8);
            color: #222;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel de Administración</h1>
        <nav>
            <ul>
                <li><a href="index.php?action=gestionar_usuarios">Gestionar Usuarios</a></li>
                <li><a href="index.php?action=gestionar_publicaciones">Gestionar Publicaciones</a></li>
                <a href="index.php?action=exportar_usuarios_pdf" class="btn btn-danger mt-3" target="_blank">
    📄 Exportar Usuarios en PDF
</a>

                <li><a href="index.php?action=cerrarSesion">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <main>
            <h2>Bienvenido, Administrador</h2>
            <p>Aquí puedes gestionar los usuarios y publicaciones del blog.</p>
        </main>
        <footer>
            <p>&copy; 2025 Chocobox - Panel de Administración</p>
        </footer>
    </div>
</body>
</html>