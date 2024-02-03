<?php

$host="localhost";
$dbname="PTfeed";
$dbuser="Ptmesh";
$dbpass= "Ptmesh@demo";


$dsn="mysql: host=$host ; dbname=$dbname";

try{
    $pdo = new PDO($dsn , $dbuser , $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Database Connection Failed!" . $e->getMessage();
}