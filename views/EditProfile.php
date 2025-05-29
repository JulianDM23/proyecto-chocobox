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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
   body {
    background: url('img/bg.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    font-size: 16px; /* Tamaño base del texto */
}

.form-container {
    background-color: rgba(0, 0, 0, 0.85);
    padding: 40px 50px;
    border-radius: 15px;
    color: #fff;
    max-width: 650px;
    width: 90%;
    margin: auto;
    margin-top: 70px;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    font-size: 16px; /* Tamaño de texto dentro del formulario */
}

label {
    color: #ffcc99;
    font-size: 15px; /* Más sutil para etiquetas */
    margin-bottom: 4px;
}

.form-control {
    font-size: 15px; /* Más compacto */
    padding: 8px 12px;
}

.btn-choco {
    background-color: #d49252;
    border: none;
    color: white;
    font-size: 16px;
    padding: 8px 0;
}

.btn-choco:hover {
    background-color: #bb7c41;
}

.form-title {
    text-align: center;
    margin-bottom: 25px;
    color: #ffcc99;
    font-size: 22px; /* Un poco más chico */
}

.back-link {
    text-align: center;
    margin-top: 18px;
    font-size: 14px;
}

.alert {
    color: #fff;
    background-color: #d46a6a;
    border: none;
    font-size: 15px;
}


</style>

</head>
<body>

<div class="form-container">
    <h3 class="form-title"><i class="fas fa-user-edit"></i> Editar Perfil</h3>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-info"><?= htmlspecialchars($_SESSION['message']); unset($_SESSION['message']); ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?= htmlspecialchars($usuario['nombre'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label>Apellido:</label>
            <input type="text" class="form-control" name="apellido" value="<?= htmlspecialchars($usuario['apellido'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label>Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" value="<?= htmlspecialchars($usuario['fecha_nacimiento'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($usuario['email'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label>Nueva Contraseña (Opcional):</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" name="update" class="btn btn-choco w-100"><i class="fas fa-save"></i> Actualizar</button>
    </form>

    <div class="back-link">
        <a href="index.php?action=Home_usuario" class="text-decoration-none text-light"><i class="fas fa-arrow-left"></i> Volver</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>
</html>
