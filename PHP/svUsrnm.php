<?php
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "dataid"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["gameID"];

    // Insert username into database
    $sql = "INSERT INTO your_table_name (id, username) VALUES (NULL, '$username')";
    if ($conn->query($sql) === TRUE) {
        echo "Username saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
