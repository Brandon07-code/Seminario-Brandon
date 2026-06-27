<?php
class Database {
    private static $instance = null;
    private $conn;

    // Constructor privado para que nadie pueda hacer 'new Database()' desde fuera
    private function __construct() {
        
        $dsn = "mysql:host=db;dbname=seminario_db;charset=utf8mb4";
        $user = 'root';
        $password = 'root_password';

        try {
            $this->conn = new PDO($dsn, $user, $password);
            // Configurar PDO para que lance excepciones en errores
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error fatal de conexión: " . $e->getMessage());
        }
    }

    // Método público estático para obtener la instancia única
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Método para obtener la conexión activa
    public function getConnection() {
        return $this->conn;
    }
}
?>