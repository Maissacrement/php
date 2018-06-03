<?php
$servername = "localhost";
$username = "yourusername";
$password = "yourpasswd";

// Creation de la base de donne sur laquelle nous allons travailler
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=data", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
$conn->close();
?>