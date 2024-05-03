<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<?php
require __DIR__ . '/manage_session.php';
?>
<body>
<h2>Gestione Colonia Felina</h2>
<p>Seleziona l'operazione da effettuare</p>
<a href = "select.php">Visualizza e modifica i gatti della colonia</a><br>
<?php
if($session_role == 'admin'){
    echo '<a href = "insert.php">Censisci un nuovo gatto nella colonia</a><br>';
}
?>
</body>
</html>