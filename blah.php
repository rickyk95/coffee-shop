<?php
    include "admin/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    header("Access-Control-Allow-Origin: *");  // "*" could also be a site such as http://www.example.com
    die();
}
    $request_body = file_get_contents("php://input");
    if($_POST["product_name"]){
        $product_name = $_POST["product_name"];
        $stmt = $pdo->prepare("SELECT * FROM products WHERE product_name = :product_name");
        $stmt->bindParam(":product_name",$product_name);
        $stmt->execute();
        $result = $stmt->fetch();
        echo json_encode($result);
    }
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header("Content-type:application/json");
?>