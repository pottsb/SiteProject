<?
$servername = "localhost";
$username = "test";
$password = "catfish";
$dbname = "web_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>