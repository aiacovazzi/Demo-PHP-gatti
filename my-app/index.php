<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>
<?php
/*
Questa porzione di codice php verifica se esiste un session id già assegnat alla sessione,
in tal caso richiama direttamente home.php in quanto il login risulta essere già effettuato.
*/
session_start();
if (isset($_SESSION['session_id'])) {
    header('Location: home.php');
}
?>
<body>
    <h2>Gestione Colonia Felina</h2>
    <p>Login</p>
    <br>
    Non hai un account? <a href = "register.php"> Registrati</a><br>

    <!--Il form del login richiama, valorizzando l'attributo action, execute_login.php. Esso riceve in POST 
i valori nel form e tramite essi prova ad effettuare il login-->
    <form action="execute_login.php" method="post">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </p>

        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>