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

// SQL upit za brisanje
$sql = "DELETE FROM podaci WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Brisanje je uspesno";
} else {
    echo "Greska prilikom brisanja: " . $conn->error;
}

$conn->close();
?>