<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    header("Location: loginForm.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
        /* ✅ Diseño igual al panel de administrador */
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

        a {
            display: block;
            padding: 12px;
            background: #d4a373;
            color: #222;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 18px;
            margin: 10px auto;
            width: 80%;
        }

        a:hover {
            background: #f4a261;
            color: #fff;
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
        <h1>Bienvenido</h1>
        <h2><?php echo htmlspecialchars($_SESSION['usuario']); ?></h2>
        <p>Tu email es: <?php echo htmlspecialchars($_SESSION['email']); ?></p>

        <a href="./index.php?action=edit_profile">✏️ Editar Perfil</a>
        <a href="./index.php?action=cerrar_sesion_usuario">❌ Cerrar sesión</a>
                <a href="https://www.canva.com/design/DAGgDU3JEqs/LB41nyer3XbR8rHgxd1-Fg/edit?utm_content=DAGgDU3JEqs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton 
">➡️ Manual usuario</a>


        <a href="./views/usuario.php">➡️ Ver página personalizada</a>
        <footer>
            <p>&copy; 2025 Chocobox - Panel de Usuario</p>
        </footer>
    </div>

</body>
</html>