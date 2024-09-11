<?php 
try {
    $dbHost = 'mysql:host=localhost;dbname=registerdb';
    $pdo = new PDO($dbHost,"root","");
} catch (\Throwable $th) {
    echo "Error " . $th->getMessage();
    die();
}
