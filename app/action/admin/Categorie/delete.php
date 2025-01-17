<?php


require_once __DIR__ . '/../../../database/Database.php'; 
require_once __DIR__ . '/../../../class/categories.php';  


if (isset($_GET['id'])) {
    $database = new Database();
    $db = $database->connect();

    $id = htmlspecialchars($_GET['id']);

    $bloger = new categories($db);
    if ($bloger->deleteCategorie($id)) {
        header('Location: ../../../../Dashboard/admin/index.php');
    } else {
        echo "Failed to delete blog.";
    }

    $database->disconnect();
}
?>