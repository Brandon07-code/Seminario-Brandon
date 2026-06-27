<?php
require_once __DIR__ . '/../config/models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    // Acción para listar usuarios
    public function index() {
        $users = $this->model->getAll();
        // Cargar la vista y pasarle los datos
        require_once __DIR__ . '/../views/users/index.php';
    }

    // Acción para mostrar formulario o guardar
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Guardar el nuevo usuario
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->create($nombre, $email);
            // Redirigir al listado para evitar reenvío del formulario
            header('Location: index.php?action=index&success=1');
            exit;
        } else {
            
            require_once __DIR__ . '/../views/users/create.php';
        }
    }

    // RETO: Acción para eliminar
    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
            header('Location: index.php?action=index');
            exit;
        }
    }


    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->update($id, $nombre, $email);
            header('Location: index.php?action=index');
            exit;
        } else {
            if (isset($_GET['id'])) {
                $user = $this->model->getById($_GET['id']);
                require_once __DIR__ . '/../views/users/edit.php';
            }
        }
    }

}
?>