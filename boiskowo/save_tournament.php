<?php
// Połączenie z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boiskowo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobranie danych z formularza
$name = $_POST['name'];
$date = $_POST['date'];
$teams = $_POST['teams'];

// Wstawienie danych do tabeli turniejów
$sql = "INSERT INTO tournaments (name, date, teams) VALUES ('$name', '$date', '$teams')";

if ($conn->query($sql) === TRUE) {
    echo "Turniej został zapisany.";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
