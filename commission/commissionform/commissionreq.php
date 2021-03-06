<?php
print_r($_POST);

$servername = "localhost";
$username = "intensif";
$password = "itsSoIntense!1";
$db = "intensif_rezi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$name = $_POST[name];
$commission= $_POST[commission];
$contact = $_POST[contact];

$conn->query("INSERT INTO commissionreq (name, commission, contact) VALUES ('$name', '$commission', '$contact')");
?>
