<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BazaPodataka";

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["message"])) {
    if (($_GET["message"]) == "brisanje") {
        echo "Podatak je obrisan <br><br>";
    }
}

$sql = "SELECT id, ime, prezime, email FROM podaci";
$result = $conn->query($sql);

?>

<table width="300" border="1" cellspacing="1" cellpadding="1">
	
	<?php
	if ($result->num_rows > 0) {
		// prikazi podatke za svaki red
		while($row = $result->fetch_assoc()) {    
	?>		

	  <tr>
		<td>ID</td>
		<td><?php echo $row["id"]; ?></td>
		<td><a href="Brisanje.php?id=<?php echo $row["id"] ?>">Izbrisi</a>
		<br><a href="Izmena.php?id=<?php echo $row["id"] ?>">Izmeni</a></td>
	  </tr>
	  <tr>
		<td>Ime</td>
		<td><?php echo $row["ime"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>Prezime</td>
		<td><?php echo $row["prezime"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>Email</td>
		<td><?php echo $row["email"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
		
	<?php	
		} 
	?>
		</table>	
<?php	
	} else {
			echo "0 results";
	}

	
$conn->close();
?>

