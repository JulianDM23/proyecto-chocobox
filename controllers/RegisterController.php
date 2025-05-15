<?php
//session_start(); // Iniciar sesión para manejar mensajes de error
require_once('./config/database.php');
require_once('./models/RegisterModel.php');


class RegisterController
{
    //  private $conn;
    private $pdo;
    private $RegisterModel;

    public function __construct()
    {
        $database = new Database(); // Instancia la conexión
        $this->pdo = $database->getConnection(); // Asignamos la conexión
        $this->RegisterModel = new RegisterModel($this->pdo);
    }



    public function registerUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Hashear la contraseña
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $this->RegisterModel->register($nombre, $apellido, $fecha_nacimiento, $email, $hashed_password);

            echo "
            <script>
            alert('controlador_usuario');
                    </script>";

            header("location: index.php?action=login_usuario");
            exit;
        } else {
            $_SESSION['error'] = "Método de solicitud incorrecto.";
            header("Location: /chocobox/views/registro.php");
            exit();
        }
    }
}
