<?php
class Producto {
    // Atributos (privados para protegerlos)
    private $nombre;
    private $precio;
    private $iva= 0.19; // IVA por defecto

    private $categoria;

    public function __construct($nombre, $precio, $iva = 0.19, $categoria = 'General',) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;
        $this->categoria = $categoria;

    }

    // Métodos públicos para interactuar
    public function getPrecioFinal() {
        return $this->precio * (1 + $this->iva);
    }

    public function getNombre() {
        return $this->nombre;
    }

    // Método adicional para mostrar info formateada
    public function getInfo() {
        return "Producto: {$this->nombre} | Precio Final: $" . $this->getPrecioFinal() . " | Categoria: {$this->categoria}";
    }
    public function getCategoria() {
        return $this->categoria;
    }
}
?>