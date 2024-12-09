<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://20220024259:12345@cluster0.cuobl.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$db = $client->walkingw;
?>
