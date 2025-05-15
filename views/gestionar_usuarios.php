<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
        /* ✅ Fondo elegante */
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
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            color: #d4a373;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #555;
        }

        th {
            background: rgba(212, 163, 115, 0.8);
            color: #222;
        }

        tr:hover {
            background: rgba(212, 163, 115, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-edit {
            background-color: #4CAF50;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #3e8e41;
        }

        .btn-delete {
            background-color: #d9534f;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #c9302c;
        }

        .btn-back, .btn-home {
            display: block;
            text-align: center;
            width: 100%;
            background: #d4a373;
            color: #222;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-home:hover {
            background: #f4a261;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                <td><?= htmlspecialchars($usuario['apellido']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td><?= htmlspecialchars($usuario['role']) ?></td>
                <td>
                    <a href="index.php?action=editar_usuario&id=<?= $usuario['id'] ?>" class="btn btn-edit">✏️ Editar</a>
                    <a href="index.php?action=eliminar_usuario&id=<?= $usuario['id'] ?>" class="btn btn-delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">🗑️ Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="index.php?action=gestionar_usuarios" class="btn-back">Volver a la lista</a>
        <a href="index.php?action=Home_administrador" class="btn-home">🏠 Volver al Inicio</a>
    </div>
</body>
</html>
