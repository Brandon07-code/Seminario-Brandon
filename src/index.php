<?php
// Este archivo es el punto de entrada (Front Controller)
require_once 'controllers/UserController.php';

$controller = new UserController();

// Leer la acción desde la URL. Si no viene, por defecto 'index'
$action = $_GET['action'] ?? 'index';

// Enrutamiento básico (manual)
if ($action === 'index') {
	$controller->index();
} elseif ($action === 'create') {
	$controller->create();
} elseif ($action === 'edit') {
	$controller->edit();
} elseif ($action === 'delete') {
	$controller->delete();
} else {
	echo "Página no encontrada";
}

