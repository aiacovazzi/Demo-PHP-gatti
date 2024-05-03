<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert</title>
</head>
<?php
require __DIR__ . '/manage_session.php';
?>
<body>
    <br>
    <a href="index.php">Torna alla home</a>
    <p>Inserisci i dati di un nuovo gatto</p>
    <form action="execute_insert.php" method="post">
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
</body>

</html>