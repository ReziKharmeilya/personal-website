<?php
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

$sql= $conn->query("SELECT name,commission,contact FROM `commissionreq`");
echo '<ol>';
while($result = $sql->fetch_assoc()){
    echo '<li>' . $result[name] . '</li>';
}
echo '</ol>';
?>