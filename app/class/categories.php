<?php
class categories {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addcategory($nom, $description): bool {
        $query = "INSERT INTO categories (nom, description) VALUES (:nom, :description)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':description', $description);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editCategory($id, $nom, $description): bool {
        $query = "UPDATE categories SET nom = :nom, description = :description WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':description', $description);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCategorie($id) {
        $query = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
