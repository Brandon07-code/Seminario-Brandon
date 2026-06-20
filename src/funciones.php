<?php
// Definición de función con parámetro por defecto
function calcularPrecioFinal($precio, $iva = 0.19) {
    return $precio * (1 + $iva);
}
function esmayordeedad($edad) {
    if ($edad >= 18) {
        return "Eres mayor de edad.";
    } else {
        return "Eres menor de edad.";
    }
}
$edades=[12, 25, 17, 30, 15];

// 
// Array de productos sin IVA
$inventario = [
    "Laptop"  => 1200,
    "Mouse"   => 25,
    "Teclado" => 45
];

echo "<h2>Precios con IVA incluido</h2>";
foreach ($inventario as $nombre => $precio) {
    $precioFinal = calcularPrecioFinal($precio);

    // Condicional para destacar productos caros
    if ($precioFinal > 100) {
        echo "<p><strong style='color:red;'>$nombre: $precioFinal (Caro)</strong></p>";
    } else {
        echo "<p>$nombre: $precioFinal (Económico)</p>";
    }
}
echo "<h2>Validacion de mayoria de edad</h2>";
foreach ($edades as $edad) {
if ($edad >= 18) {
    echo "<p>La persona con edad: $edad - " . esmayordeedad($edad) . "</p>";
}
else {
    echo "<p>La persona con edad: $edad - " . " es menor de edad" . "</p>";
}}
?>