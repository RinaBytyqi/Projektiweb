<?php

$servername = "localhost";
$username = "rina";
$password = "rina123";
$dbname = "web.db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT roli,email,password  FROM users";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  // echo "roli: " . $row["roli"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
*/

?>