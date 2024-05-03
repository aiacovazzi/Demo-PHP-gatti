<!DOCTYPE html>
<html lang="en">
<head>
    <title>update</title>
</head>
<?php
require __DIR__ . '/manage_session.php';
?>
<br>
<body>
<a href="index.php">Torna alla home</a>
<p>Modifica i dati del gatto</p>
<?php
// Create connection
require __DIR__ . '/connection.php';
$conn = connection();

$idGatto =  $_GET['id'];

$sql = "SELECT * FROM gatti WHERE id_gatto = $idGatto";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
    $row = $result->fetch_assoc(); 
    echo '

    <form action="execute_update.php" method="post">
    <input type="hidden" name="idGatto" id="idGatto" value = '.$idGatto.'>
    <p>
        <label for="nomeGatto">Nome Gatto:</label>
        <input type="text" name="nomeGatto" id="nomeGatto" required>
    </p>
    <p>
        <label for="razzaGatto">Razza Gatto:</label>
        <input type="text" name="razzaGatto" id="razzaGatto" required>
    </p>
    <input type="submit" value="Submit">
    </form>
    <script type="text/javascript">
        document.getElementById("nomeGatto").value = '."'".$row['nome_gatto']."'".';
        document.getElementById("razzaGatto").value = '."'".$row['razza']."'".';
    </script>
    ';
    }
    else{
        echo "0 results";
    }

$conn->close();
?>
</body>

</html>