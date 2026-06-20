<?php
require_once 'POO/producto.php';

// Instanciar (crear objetos)

$prod1 = new Producto("Laptop Gamer", 1500);
$prod2 = new Producto("Mouse Inalámbrico", 80);
$prod3 = new Producto("Monitor 4K", 1200, 0.19); // IVA personalizado
$prod4 = new Producto("fuente de poder", 100, 0.19, "Electronica");
$prod5 = new Producto("escritorio", 200, 0.19, "Oficina");
echo "<h2>Catálogo POO</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "<li>" . $prod3->getInfo() . "</li>";
echo "<li>" . $prod4->getInfo() . "</li>";
echo "<li>" . $prod5->getInfo() . "</li>";
echo "</ul>";

