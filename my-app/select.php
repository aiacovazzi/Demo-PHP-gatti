<html>
<head>
<title>Test</title>
<link rel="shortcut icon" type="image/x-icon" href="./?getimg=favicon" /> 
<style>
    table {
  border-collapse: collapse;
  border: 2px solid rgb(140 140 140);
  font-family: sans-serif;
  font-size: 0.8rem;
  letter-spacing: 1px;
}
thead,
tfoot {
  background-color: rgb(228 240 245);
}

th,
td {
  border: 1px solid rgb(160 160 160);
  padding: 8px 10px;
}
</style>
</head>
<body>
<?php
// Create connection
require __DIR__ . '/connection.php';
require __DIR__ . '/manage_session.php';
echo '
<br>
<a href = "index.php">Torna alla home</a>
<p>Visualizzazione dei gatti presenti nella colonia</p>';
$conn = connection();

$sql = "SELECT id_gatto, nome_gatto, razza FROM gatti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nome Gatto</th><th>Razza Gatto</th></tr>";
  // output data of each row
 while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id_gatto"]."</td>";
    echo "<td>".$row["nome_gatto"]."</td>";
    echo "<td>".$row["razza"]."</td>";
    if($session_role == 'admin'){
      echo "<td><a href='delete.php?id=".$row['id_gatto']."'>Elimina</a></td>";
      echo "<td><a href='update.php?id=".$row['id_gatto']."'>Modifica</a></td>"; 
    }
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>