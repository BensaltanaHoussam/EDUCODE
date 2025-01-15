<?php
require_once __DIR__ . '/../database/Database.php';

class User {
    private $conn;
    private $table = 'utilisateurs';

    public $id_user;
    public $fullname;
    public $email;
    public $mot_de_passe;
    public $role;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function signup() {
        // Create the user
        $query = "INSERT INTO " . $this->table . " 
                 (nom, email, mot_de_passe, role) 
                 VALUES 
                 (:nom, :email, :mot_de_passe, :role)";

        $stmt = $this->conn->prepare($query);
        // Clean and bind data
        $this->fullname = htmlspecialchars(strip_tags($this->fullname));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->mot_de_passe = htmlspecialchars(strip_tags($this->mot_de_passe));
        $this->role = htmlspecialchars(strip_tags($this->role));

        $stmt->bindParam(':nom', $this->fullname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':mot_de_passe', $this->mot_de_passe);
        $stmt->bindParam(':role', $this->role);
        $stmt->execute();
    }

    private function emailExists() {
        $query = "SELECT id_user FROM " . $this->table . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);

        $this->email = htmlspecialchars(strip_tags($this->email));
        $stmt->bindParam(':email', $this->email);

        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public static function getAll() {
        $database = new Database();
        $db = $database->connect();
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $db->query($sql);
        $database->disconnect();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByEmail($email) {
        $database = new Database();
        $db = $database->connect();
        $sql = "SELECT * FROM utilisateurs WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email]);
        $database->disconnect();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>