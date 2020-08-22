<?php

$ime = val($_POST["ime"]);
$prezime = val($_POST["prezime"]);
$email = val($_POST["email"]);

function val($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$servername = "localhost";
$username = "root";
$password = "";     // nemam sifru za mysql pa ovo ostavljam blank
$dbname = "BazaPodataka";   // naziv database-a koji sam napravio u phpmyadmin-u

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO podaci (ime, prezime, email)
VALUES ('$ime', '$prezime', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Uspesan unos u bazu podataka.";
} else {
    echo "Greska: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>