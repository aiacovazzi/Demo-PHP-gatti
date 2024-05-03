<?php
// Create connection
require __DIR__ . '/manage_session.php';
require __DIR__ . '/connection.php';
$conn = connection();

$idGatto =  $_GET['id'];

$sql = "DELETE FROM gatti WHERE id_gatto = $idGatto";

if ($conn->query($sql)) {
    echo "Record deleted successfully<br>";
    echo '<a href="index.php">Torna alla home</a>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>