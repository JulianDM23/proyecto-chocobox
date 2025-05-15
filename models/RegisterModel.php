<?php
class RegisterModel {
    private $conn;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para registrar un nuevo usuario
    public function register($nombre, $apellido, $fecha_nacimiento, $email, $password) {
        // Primero, verificamos si el correo electrónico ya está registrado
        $checkEmailQuery = "SELECT email FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($checkEmailQuery);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Verificamos si el correo existe
        if ($stmt->rowCount() > 0) {
            // Si el correo ya existe, devolvemos un mensaje de error
            return "El correo electrónico ya está registrado.";
        }

        // Si el correo no existe, procedemos con la inserción
        $query = "INSERT INTO users (nombre, apellido, fecha_nacimiento, email, password) 
            VALUES (:nombre, :apellido, :fecha_nacimiento, :email, :password)";
        
        // Preparar la consulta SQL
        $stmt = $this->conn->prepare($query);
        
        // Asignar los valores a los parámetros de la consulta
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        // Ejecutar la consulta y verificar si hubo errores
        if ($stmt->execute()) {
            return true; // Si la consulta se ejecuta correctamente, devolver true
        } else {
            // Si la consulta falla, mostrar los errores de la consulta
            print_r($stmt->errorInfo());
            return false; // Devolver false en caso de error
        }
    }
}
?>
