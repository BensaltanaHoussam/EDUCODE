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

    public function editBlog($nom, $description) {
        $query = "UPDATE categories SET nom = :nom, description = :description";
        $stmt = $this->conn->prepare($query);

        
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':description', $description);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBlog($id) {
        $query = "DELETE FROM blogs WHERE id_blog = :id";
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
