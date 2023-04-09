<?php

$DBuser = 'wp_user';
$DBpass = 'secret';
$pdo = null;

try {
    $database = 'mysql:host=mysql:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo 'Looking good, php connected to mysql successfully.';
} catch (PDOException $e) {
    echo "php connection to mysql failed with:\n $e";
}

$pdo = null;
