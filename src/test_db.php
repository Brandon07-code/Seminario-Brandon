<?php
require_once 'config/Database.php';

$db = Database::getInstance()->getConnection();

try {
    $stmt = $db->query("SELECT * FROM users");
    echo "<h2>Usuarios desde PDO</h2>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: {$row['id']} - Nombre: {$row['nombre']} - Email: {$row['email']}<br>";
    }
} catch (PDOException $e) {
    echo "Error al ejecutar la consulta: " . htmlspecialchars($e->getMessage());
}
?>