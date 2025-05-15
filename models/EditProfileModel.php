<?php
require_once __DIR__ . '/../config/Database.php';

class EditProfileModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getUserById($id) {
        $sql = "SELECT id, nombre, apellido, email FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $nombre, $apellido, $email, $password = null) {
        if ($password) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET nombre = :nombre, apellido = :apellido, email = :email, password = :password WHERE id = :id";
        } else {
            $sql = "UPDATE users SET nombre = :nombre, apellido = :apellido, email = :email WHERE id = :id";
        }

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($password) {
            $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        }

        return $stmt->execute();
    }
}
?>
