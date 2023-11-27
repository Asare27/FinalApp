<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";
    
    // Create connection
   // $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    //if ($conn->connect_error) {
    //    die("Connection failed: " . $conn->connect_error);
   // }
   try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>