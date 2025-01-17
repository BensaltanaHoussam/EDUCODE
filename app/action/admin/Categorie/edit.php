<?php

require_once __DIR__ . '/../../../database/Database.php'; 
require_once __DIR__ . '/../../../class/categories.php';  


$database = new Database();
$db = $database->connect(); 

$categories = new categories($db);  


$id = isset($_POST['id']) ? $_POST['id'] : null;
$nom = isset($_POST['categoryName']) ? $_POST['categoryName'] : null;
$description = isset($_POST['categoryDescription']) ? $_POST['categoryDescription'] : null;


if ($id && $nom && $description) {
   
    $updateSuccess = $categories->editCategory($id, $nom, $description);

    if ($updateSuccess) {
        header("Location: ../../../../Dashboard/admin/index.php");
        exit();
    } else {
        echo "Error updating category.";
    }
} else {
    echo "All fields are required.";
}
?>

