<?php
  function connectToDB($dbInformation) {
  $host = 'localhost';
  $dbName = '';
  $dbUser = 'root';
  $dbPassword = '';
  
  extract($dbInformation);
  
  $dbInfo = "mysql:host=$host;dbname=$dbName";
  
  // try to connect to the database    
  try {
    $conn = new PDO($dbInfo, $dbUser, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
} 
?>

