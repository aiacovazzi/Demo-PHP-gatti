<?php
require __DIR__ . '/manage_session.php';
require __DIR__ . '/connection.php';
// Taking all 5 values from the form data(input)
$nomegatto =  $_REQUEST['nomeGatto'];
$razzagatto = $_REQUEST['razzaGatto'];

// Create connection
$conn = connection();

$sql = "INSERT into gatti values(id_gatto,'$nomegatto','$razzagatto')";

if ($conn->query($sql)) {
    echo "New record created successfully<br>";
    echo '<a href="index.php">Torna alla home</a>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>