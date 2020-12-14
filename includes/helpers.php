<?php
function connectDB(){
    return new PDO('mysql:host=localhost;dbname=tekkies', 'root', '', [PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
}

function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
