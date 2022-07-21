
<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connection sucessfull ! ";
}
if (isset($_POST['login'])) {
 $username = mysqli_real_escape_string($conn, $_POST['uname']);
 $password = mysqli_real_escape_string($conn, $_POST['psw']);

  if (empty($username)) {
  	echo "Username is required";
  }
  if (empty($password)) {
  	echo "Password is required";
  }

  	$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: index.html');
      }
     else { 
         echo '<script type="text/javascript"> alert("Invalid username/password") </script>';
  	}
} 
?>
