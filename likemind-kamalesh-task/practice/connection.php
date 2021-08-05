 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Creating db
$sql = "CREATE DATABASE registration";

if($conn->query($sql) === TRUE) {
  echo "Database created &  Connected successfully";	      
} else {
  echo "Error creating database:" . $conn->error;
  }
  
  $conn->close();
?> 