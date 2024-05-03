<?php
require __DIR__ . '/connection.php';
$conn = connection();

$username =  $_REQUEST['username'];
$password =  $_REQUEST['password'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);

$query = "select * from utenti where username = '$username'";

$result = $conn->query($query);

if($result->num_rows == 0){
    $query = "insert into utenti values('$username','$password_hash','base')";
    if($conn->query($query)){
        echo 'Registrazione effettuata con successo!<br>';
        echo '<a href = "index.php">Torna alla home</a>';
    }else{
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}else{
    echo 'username già registrato!';
}
$conn -> close();
?>