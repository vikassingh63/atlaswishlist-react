<?php

$host = "mysql-2658497f-atlaswishlist.k.aivencloud.com";
$user = "avnadmin";
$pass = "AVNS_wXXF_lngsE5pw5txlgA";
$db   = "defaultdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>