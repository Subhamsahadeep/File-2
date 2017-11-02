<?php
$servername = "localhost";
$username = "root";
$password = "Subhamsa1@";
$dbname = "test_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_POST['s_id'];

$sql = "SELECT * FROM member where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -City: " . $row["city"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>