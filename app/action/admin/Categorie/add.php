<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../../database/Database.php';
require_once '../../../class/categories.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $database = new Database();
    $db = $database->connect();

    $categoryName = htmlspecialchars($_POST['categoryName']);
    $categoryDescription = htmlspecialchars($_POST['categoryDescription']);

    $categories = new categories($db);
    if ($categories->addcategory($categoryName, $categoryDescription)) {
        header('Location: ../../../../Dashboard/admin/index.php');
    } else {
        echo "Failed to add categorie.";
    }

    $database->disconnect();
}
?>
