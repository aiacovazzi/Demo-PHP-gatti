<?php
// Create connection
require __DIR__ . '/manage_session.php';
require __DIR__ . '/connection.php';
$conn = connection();

$idGatto =  $_REQUEST['idGatto'];
$nomegatto =  $_REQUEST['nomeGatto'];
$razzagatto = $_REQUEST['razzaGatto'];

$sql = "UPDATE gatti SET nome_gatto ='$nomegatto',razza='$razzagatto' where id_gatto = $idGatto";

if ($conn->query($sql)) {
    echo "Record updated successfully<br>";
    echo '<a href="index.php">Torna alla home</a>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>