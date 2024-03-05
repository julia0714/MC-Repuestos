<?php 
//constant conexion variables 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mc repuestos";
//create conection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>