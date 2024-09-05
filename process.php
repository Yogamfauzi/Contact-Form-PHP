<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$name = $_POST['name'];
$nim = $_POST['nim'];
$class = $_POST['class'];
$email = $_POST['email'];
$suggestion = $_POST['suggestion'];

$sql = "INSERT INTO contacts (name, nim, class, email, suggestion)
VALUES ('$name', '$nim', '$class', '$email', '$suggestion')";

if ($conn->query($sql) === TRUE) {
    header("Location: display.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
