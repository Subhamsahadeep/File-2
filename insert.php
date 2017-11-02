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

$name=$_POST['s_name'];
$city=$_POST['s_city'];

$sql = "INSERT INTO Member (name, city)
VALUES ('$name', '$city')";

if ($conn->query($sql) === TRUE) {
   $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>