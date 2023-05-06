<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456789');
define('DB_NAME', 'pizza_cloud');

// connection.php
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection

try {
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($con, "utf8mb4");
} catch (mysqli_sql_exception $e) {
    // Log the error or display an error message
    die("Failed to connect to database: " . $e->getMessage());
}

?>