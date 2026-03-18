<?php
include 'config.php'; // Aapki SSL wali connection file

$sql = "CREATE TABLE IF NOT EXISTS wishlist_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price DECIMAL(10, 2),
    product_image TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Mubarak ho! Wishlist table Aiven par live ban gayi hai.";
} else {
    echo "Error: " . $conn->error;
}
?>