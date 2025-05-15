<?php
require_once __DIR__ . '/controllers/RegisterController.php';
require_once __DIR__ . '/controllers/LoginController.php';
require_once __DIR__ . '/controllers/LogoutController.php'; 
require_once __DIR__ . '/controllers/EditProfileController.php';
require_once __DIR__ . '/controllers/UserController.php'; 
require_once __DIR__ . '/controllers/PublicationController.php';
require_once __DIR__ . '/controllers/ExportUsersPDFController.php';


$RegisterControllerusers = new RegisterController();
$LoginControllerusers = new LoginController();  
$logoutController = new LogoutController(); 
$EditProfileController = new EditProfileController();
$UserController = new UserController();
$PublicationController = new PublicationController(); 
$ExportUsersPDFController = new ExportUsersPDFController();


$action = ($_GET['action'] ?? 'login_usuario');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogChocoBox</title>
    
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    switch ($action) {
        case 'registrar_usuario':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $RegisterControllerusers->registerUser();
            } else {
                include('./views/registro.php');
            }
            break;

        case 'login_usuario':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $LoginControllerusers->Loginusers();
            } else {
                include('./views/loginnn.php');
            }
            break;

        case 'Home_usuario':
            include('./views/home.php');
            break;

        case 'Home_administrador':
            include('./views/HomeAdministrador.php');
            break;

            case 'exportar_usuarios_pdf':
    $ExportUsersPDFController->export();
    exit();


        case 'gestionar_usuarios': 
            $usuarios = $UserController->listUsers();
            include('./views/gestionar_usuarios.php');
            break;

        case 'editar_usuario':
            if (!isset($_GET['id'])) {
                header("Location: index.php?action=gestionar_usuarios");
                exit();
            }

            $usuario = $UserController->getUserById($_GET['id']);
            include('./views/editadminuser.php');
            break;

        case 'actualizar_usuario':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST['id'];
                $nombre = trim($_POST['nombre']);
                $apellido = trim($_POST['apellido']);
                $email = trim($_POST['email']);
                $role = $_POST['role'];

                if ($UserController->editUser($id, $nombre, $apellido, $email, $role, null)) {
                    $_SESSION['message'] = "✅ Usuario actualizado correctamente.";
                } else {
                    $_SESSION['message'] = "❌ Error al actualizar usuario.";
                }
            }
            header("Location: index.php?action=gestionar_usuarios");
            exit();

        case 'eliminar_usuario':
            if (isset($_GET['id'])) {
                if ($UserController->deleteUser($_GET['id'])) {
                    $_SESSION['message'] = "✅ Usuario eliminado correctamente.";
                } else {
                    $_SESSION['message'] = "❌ Error al eliminar usuario.";
                }
            }
            header("Location: index.php?action=gestionar_usuarios");
            exit();

        case 'edit_profile':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = trim($_POST['nombre']);
                $apellido = trim($_POST['apellido']);
                $email = trim($_POST['email']);
                $password = !empty($_POST['password']) ? $_POST['password'] : null;

                if ($EditProfileController->editUser($_SESSION['id'], $nombre, $apellido, $email, $password)) {
                    $_SESSION['message'] = "✅ Perfil actualizado correctamente.";
                    header("Location: index.php?action=" . ($_SESSION['role'] === 'admin' ? 'Home_administrador' : 'Home_usuario'));
                    exit();
                } else {
                    $_SESSION['message'] = "❌ Error al actualizar.";
                }
            } else {
                include('./views/EditProfile.php');
            }
            break;

        case 'gestionar_publicaciones':
            $publicaciones = $PublicationController->listPublications();
            include(__DIR__ . '/views/gestionar_publicaciones.php'); 
            break;

        case 'crear_publicacion':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $titulo = trim($_POST['titulo']);
                $descripcion = trim($_POST['descripcion']);
                $imagen_url = '';

                // ✅ Procesar imagen y guardarla en `img/`
                if (!empty($_FILES['imagen']['name'])) {
                    $upload_dir = "img/"; // ✅ Cambiar a "img/"
                    if (!is_dir($upload_dir)) {
                        mkdir($upload_dir, 0777, true); // ✅ Crear carpeta si no existe
                    }

                    $imagen_nombre = time() . "_" . basename($_FILES['imagen']['name']);
                    $imagen_path = $upload_dir . $imagen_nombre;

                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_path)) {
                        $imagen_url = $imagen_nombre; // ✅ Guardar solo el nombre en la base de datos
                    }
                }

                // ✅ Guardar publicación con imagen
                if (!empty($titulo) && !empty($descripcion) && !empty($imagen_url)) {
                    if ($PublicationController->createPublication($titulo, $descripcion, $imagen_url)) {
                        $_SESSION['message'] = "✅ Publicación creada correctamente.";
                    } else {
                        $_SESSION['message'] = "❌ Error al crear la publicación.";
                    }
                } else {
                    $_SESSION['message'] = "❌ Los campos no pueden estar vacíos.";
                }
            }
            header("Location: index.php?action=gestionar_publicaciones");
            exit();

        case 'publicaciones': 
            $publicaciones = $PublicationController->listPublications();
            include(__DIR__ . '/views/publicaciones.php'); 
            break;

        case 'cerrarSesion':
            $logoutController->cerrarSesion();
            break;

        case 'recetas':
            include('./views/recetas.php');
            break;

        case 'nosotros':
            include('./views/nosotros.php');
            break;

        case 'ayuda':
            include('./views/ayuda.php');
            break;

        case 'articulos':
            include('./views/articulos.php');
            break;

        default:
            include('./views/loginnn.php');
            break;
    }
    ?>
</body>
</html>
