<?php
require_once __DIR__ . '/../vendor/autoload.php';

header('Content-Type: application/json');

try {
    $client = new MongoDB\Client("mongodb://127.0.0.1:27017");
    $collection = $client->my_website->Shoe;

    $shoes = $collection->find()->toArray();

    echo json_encode($shoes);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
