<?php
// Array indexado (numérico)
$frutas = ["Manzana", "Banano", "Naranja"];
echo "La segunda fruta es: " . $frutas[1] . "<br>";

// Array asociativo (clave => valor) - MUY usado en JSON/APIs
$productos = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45,
    "Monitor" => 300,
];

echo "<h2>Lista de productos</h2>";
echo "<ul>";
$totalConIva = $total * 1.19;
$total = 0;
foreach ($productos as $nombre => $precio) {
    echo "<li>$nombre: $$precio</li>";
    $total += $precio;
}
echo "</ul>";
echo "<p><strong>Total sin IVA: $$total</strong></p>";
echo "<p><strong>Total con IVA: $$totalConIva</strong></p>";


?>