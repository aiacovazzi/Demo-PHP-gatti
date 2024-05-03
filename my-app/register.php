<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
</head>
<script>
    function validateForm() {
  let p1 = document.getElementById("password").value;
  let p2 = document.getElementById("password2").value;
  console.log(p1);
  console.log(p2);
  if (p1!=p2) {
    alert("Attenzione! Le due password devono coincidere.");
    return false;
  }
} 
</script>
<body>
    <a href="index.php">Torna alla home</a>
    <p>Registra un nuovo operatore</p>
    <form name="register" action="execute_register.php" method="post" onsubmit="return validateForm()">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </p>

        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </p>

        <p>
            <label for="password2">Conferma Password:</label>
            <input type="password" name="password2" id="password2" required>
        </p>

        <input type="submit" value="Submit">
    </form>
</body>

</html>