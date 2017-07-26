<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "comment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT title,containers FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<font color=blue>"."<h2>$row[title]</h2><hr> "."</font>";
        echo "<p>$row[containers]";
    }
} else {
    echo "0 results";
}

$conn->close();
?>