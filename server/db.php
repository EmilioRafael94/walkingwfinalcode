<?php
require_once __DIR__ . '/../vendor/autoload.php';

function getMongoDBConnection() {
    try {
        $client = new MongoDB\Client("mongodb://127.0.0.1:27017");
        return $client->my_website;
    } catch (Exception $e) {
        echo "MongoDB connection failed: " . $e->getMessage();
        return null;
    }
}
?>
