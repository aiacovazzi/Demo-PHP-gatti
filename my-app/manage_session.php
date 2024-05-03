<?php
session_start();
if (isset($_SESSION['session_id'])) {
    $session_role = $_SESSION['session_role'];
    $session_user = $_SESSION['session_user'];
    $session_id = $_SESSION['session_id'];
    
    printf("Benvenuto/a %s", $session_user);
    echo "<br>";
    printf("%s", '<a href="logout.php">logout</a>');
    echo "<br>";
  }else{
    header('Location: errorpage.php');
  }
?>