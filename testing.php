<?php

include "admin/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
}
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header("Content-type:application/json;utf-charset-8");

    echo json_encode(array("greeting"=>"hello there buddy"));
    // $product_name = $decoded['product_name'];
    // $stmt->bindParams(":product_name",$product_name);
    // $stmt = $pdo->query("SELECT * FROM products WHERE product_name = :product_name");
    // $stmt->execute();
    // $results = $stmt->fetch();
    // foreach($results as $result){
    //     echo json_encode($result);
    // }

?>