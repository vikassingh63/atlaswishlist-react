<?php
$host = "mysql-2658497f-atlaswishlist.k.aivencloud.com";
$user = "avnadmin";
$pass = trim(file_get_contents(__DIR__ . '/pass.env')); 
$db   = "defaultdb"; 
$port = "13471";

// 1. Connection initialize karein
$conn = mysqli_init();

// 2. SSL/Certificate ka rasta batayein
// __DIR__ ka matlab hai ki ca.pem usi folder mein hai jahan config.php hai
mysqli_ssl_set($conn, NULL, NULL, __DIR__ . "/ca.pem", NULL, NULL);

// 3. Ab connect karein
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("SSL Connection Failed: " . mysqli_connect_error());
}

echo "Shabaash! Atlas Wishlist ab Encrypted connection se juda hai.";
?>