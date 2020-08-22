<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BazaPodataka";

$ime = val($_POST["ime"]);
$prezime = val($_POST["prezime"]);
$email = val($_POST["email"]);
$id = val($_POST["id"]);

function val($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}

// update-ovanje tabele sa novim, izmenjenim vrednostima
$sql = "UPDATE podaci SET ime='$ime' , prezime='$prezime' , email='$email' WHERE id='$id' ";

// vracanje korisnika na glavnu stranicu
if ($conn->query($sql) === TRUE) {
    header("location:Brisanje_korisnika.php?message=uspesno&id=" . $id);
} 
else {
    echo "Doslo je do greske prilikom izmena: " . $conn -> error;
}

$conn->close();
?>
