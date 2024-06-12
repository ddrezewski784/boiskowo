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
$date = $_POST['date'];
$time = $_POST['time'];
$field = $_POST['field'];
$players = $_POST['players'];

// Wstawienie danych do tabeli rezerwacji
$sql = "INSERT INTO reservations (date, time, field, players) VALUES ('$date', '$time', '$field', '$players')";

if ($conn->query($sql) === TRUE) {
    echo "Rezerwacja została zapisana.";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
