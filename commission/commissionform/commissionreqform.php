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

$name = $_POST[name];
$commission = $_POST[commission];
$contact = $_POST[contact];

$result = $conn->query("SELECT * FROM commissionreq");
echo "<br>";
//$current_data = $result->fetch_assoc();
//print_r($current_data);
//print_r($result->fetch_assoc());
echo "==";
if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "id: " . $row["id"]. " - Name: " . $row["name"]. " - " . $row["commission"]. " - " . $row["contact"];
    }
} else {
    echo "0 results";
}
?>