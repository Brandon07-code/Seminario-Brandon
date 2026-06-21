<?php
require_once 'config/models/UserModel.php';
$model = new UserModel();

echo "<h2> Listado desde modelo</h2>";
$users = $model->getAll();
foreach ($users as $u) {
   echo "{$u['nombre']} - {$u['email']}<br>";
}

$model->create("Pedro test", "pedro@test.com");
echo "usuario creado!";