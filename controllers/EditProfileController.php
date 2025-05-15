<?php
require_once __DIR__ . '/../models/EditProfileModel.php';

class EditProfileController {
    private $model;

    public function __construct() {
        $this->model = new EditProfileModel();
    }

    public function getUserById($id) {
        return $this->model->getUserById($id);
    }

    public function editUser($id, $nombre, $apellido, $email, $password = null) {
        return $this->model->updateUser($id, $nombre, $apellido, $email, $password);
    }
}
?>
