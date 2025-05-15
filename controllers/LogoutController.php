<?php
session_start();

class LogoutController {
    public function cerrarSesion() {
        session_unset();
        session_destroy();
        header("Location: ./index.php"); // 🔹 Redirige al inicio correctamente
        exit();
    }
}
?>
