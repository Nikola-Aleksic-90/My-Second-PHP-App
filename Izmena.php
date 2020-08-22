<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BazaPodataka";

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}

$id = $_GET["id"];

$sql = "SELECT * FROM podaci WHERE id='$id'";
$result = $conn -> query($sql);


if ($result -> num_rows > 0) {
    // prikazi podatke za svaki red
    while ($row = $result->fetch_assoc()) {
        $ime = $row["ime"];
        $prezime = $row["prezime"];
        $email = $row["email"];
    }
} else {
    echo "0 podataka";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> PHP </title>
</head>

<body>

<form action="IzmenaPodataka.php" method="post">

<table width="300" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>Ime:</td>
    <td> <input type="text" name="ime" value="<?php echo $ime; ?>"></td>
  </tr>
  <tr>
    <td>Prezime:</td>
    <td><input type="text" name="prezime" value="<?php echo $prezime; ?>"></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Izmeni podatke"></td>
  </tr>
</table>

<input type="hidden" name="id" value="<?php echo $id ?>" >

</form>

</body>

</html>

<?php 
$conn->close();
?>