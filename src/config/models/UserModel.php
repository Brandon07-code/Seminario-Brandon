<?php
require_once __DIR__ . '/../Database.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        try {
            $stmt = $this->db->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . htmlspecialchars($e->getMessage());
            return [];
        }
    }

    public function getById($id) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . htmlspecialchars($e->getMessage());
            return null;
        }


    }


public function create($nombre, $email) {
        try {
            $stmt = $this->db->prepare("INSERT INTO users (nombre, email) VALUES (?, ?)");
        return    $stmt->execute([$nombre, $email]);
         
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . htmlspecialchars($e->getMessage());
            return null;
        }
    }

    // Actualizar un usuario por id
    public function update($id, $nombre, $email) {
        try {
            $stmt = $this->db->prepare("UPDATE users SET nombre = :nombre, email = :email WHERE id = :id");
            return $stmt->execute([':nombre' => $nombre, ':email' => $email, ':id' => $id]);
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . htmlspecialchars($e->getMessage());
            return null;
        }
    }

public function delete($id) {
        try {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . htmlspecialchars($e->getMessage());
            return null;
        }
    }     
}
?>