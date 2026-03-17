<?php

$host = "mysql-2658497f-atlaswishlist.k.aivencloud.com";
$user = "avnadmin";

$pass = trim(file_get_contents('pass.env'));

$db   = "defaultdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>