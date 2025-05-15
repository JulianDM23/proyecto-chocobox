<?php
require_once './models/LoginModel.php'; 
require_once './config/database.php'; 

class LoginController {
    private $pdo;
    private $LoginModel;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
        $this->LoginModel = new LoginModel($this->pdo);
    }

    public function Loginusers() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
            $password = $_POST['password'] ?? '';

            if (empty($email) || empty($password)) {
                $_SESSION['message'] = "❌ Por favor, completa todos los campos.";
                header("Location: index.php?action=login_usuario");
                exit();
            }

            $user = $this->LoginModel->checkLogin($email, $password);

            if ($user) {
                $_SESSION['usuario'] = htmlspecialchars($user['nombre']);
                $_SESSION['id'] = (int)$user['id'];
                $_SESSION['email'] = htmlspecialchars($user['email']);

                // ✅ Corrección: Verificar si el usuario pertenece a la tabla 'admin' o 'users'
                $_SESSION['role'] = isset($user['role']) ? htmlspecialchars($user['role']) : 'user';

                // ✅ Redirigir correctamente según el rol del usuario
                if ($_SESSION['role'] === 'admin') {
                    header("Location: index.php?action=Home_administrador");
                } else {
                    header("Location: index.php?action=Home_usuario");
                }
                exit();
            } else {
                $_SESSION['message'] = "❌ Usuario o contraseña incorrectos.";
                header("Location: index.php?action=login_usuario");
                exit();
            }
        }
    }
}
