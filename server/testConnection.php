<?php
require __DIR__ . '/../vendor/autoload.php';
require 'db.php';

$db = getMongoDBConnection();

if ($db) {
    echo "MongoDB connected successfully!";
} else {
    echo "MongoDB connection failed.";
}
?>
