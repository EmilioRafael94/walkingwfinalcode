<?php
require_once __DIR__ . '/../vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://127.0.0.1:27017");
    $collection = $client->my_website->Shoe;

    $shoes = $collection->find()->toArray();

    foreach ($shoes as $shoe) {
        echo "<div><strong>Brand: </strong>{$shoe->Brand}, <strong>Price: </strong>\${$shoe->Price}</div>";
    }
} catch (Exception $e) {
    echo "Database Error: " . $e->getMessage();
}
?>
