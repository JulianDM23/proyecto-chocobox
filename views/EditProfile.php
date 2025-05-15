<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../controllers/EditProfileController.php';

if (!isset($_SESSION['id'])) {
    header("Location: loginForm.php");
    exit();
}

$editProfileController = new EditProfileController();
$usuario = $editProfileController->getUserById($_SESSION['id']);

if (!$usuario || !is_array($usuario)) {
    $_SESSION['message'] = "❌ Error al obtener datos.";
    header("Location: index.php?action=Home_usuario");
    exit();
}

if (isset($_POST['update'])) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
    $email = trim($_POST['email']);
    $password = !empty($_POST['password']) ? $_POST['password'] : null;

    if ($editProfileController->editUser($_SESSION['id'], $nombre, $apellido, $fecha_nacimiento, $email, $password)) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['fecha_nacimiento'] = $fecha_nacimiento;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = "✅ Perfil actualizado correctamente.";
        header("Location: index.php?action=Home_usuario");
        exit();
    } else {
        $_SESSION['message'] = "❌ Error al actualizar.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; padding: 20px; background: #f4f4f4; border-radius: 10px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        input { width: 100%; padding: 8px; margin-top: 5px; }
        button { background-color: #4CAF50; color: white; padding: 10px; margin-top: 10px; border: none; cursor: pointer; width: 100%; }
        .message { background: #dff0d8; color: #3c763d; padding: 10px; border-radius: 5px; margin-top: 10px; }
    </style>
</head>
<body>

<h2>Editar Perfil</h2>

<?php if (isset($_SESSION['message'])): ?>
    <div class="message"><?= htmlspecialchars($_SESSION['message']); unset($_SESSION['message']); ?></div>
<?php endif; ?>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= isset($usuario['nombre']) ? htmlspecialchars($usuario['nombre']) : '' ?>" required>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="<?= isset($usuario['apellido']) ? htmlspecialchars($usuario['apellido']) : '' ?>" required>

    <label>Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?= isset($usuario['fecha_nacimiento']) ? htmlspecialchars($usuario['fecha_nacimiento']) : '' ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= isset($usuario['email']) ? htmlspecialchars($usuario['email']) : '' ?>" required>

    <label>Nueva Contraseña (Opcional):</label>
    <input type="password" name="password">

    <button type="submit" name="update">Actualizar</button>
</form>

<a href="index.php?action=Home_usuario">Volver</a>

</body>
</html>
