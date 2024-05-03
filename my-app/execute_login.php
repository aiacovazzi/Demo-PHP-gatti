<?php
session_start();

// Richiama il modulo connection.php che si occupa di preparare la connessione al DB
require __DIR__.'/connection.php';
$conn = connection();

//recupera le 
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password_hash = password_hash($password,PASSWORD_BCRYPT);


$query = "select * from utenti where username = '$username'";

$res = $conn->query($query);
if($res -> num_rows == 0){
    echo 'Utente non esistente o password errata. <br>';
    echo '<a href = "index.php">Torna al login</a>';
}elseif($res -> num_rows == 1){
    $row = $res -> fetch_assoc();
    if(password_verify($password,$row['password_utente'])){

        session_regenerate_id();
        $_SESSION['session_id'] = session_id();
        $_SESSION['session_user'] = $row['username'];
        $_SESSION['session_role'] = $row['ruolo'];

        header('Location: home.php');
    }else{
        echo 'Utente non esistente o password errata. <br>';
        echo '<a href = "index.php">Torna al login</a>';
    }
}else{
    die("Errore durante il login: " . $conn->connect_error);
}
?>