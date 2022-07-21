<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connection sucessfull !";
}
if (isset($_POST['register'])) {
$username = $_POST['usrnm'];
$email = $_POST['email'];
$address = $_POST['address'];
$password=$_POST['psw'];

$check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
$result = $conn->query($check_query);
$user = $result->fetch_assoc();

if ($user) { // if user exists
  if ($user['username'] === $username) {
    echo '<script type="text/javascript"> alert("Username already exists") </script>';
  }
  if ($user['email'] === $email) {
    echo '<script type="text/javascript"> alert("Email already exists") </script>';
  }
}
else{
  $sql = "INSERT INTO register (username,email,address,password)
              VALUES ('$username','$email','$address','$password')";
  
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header('location: login.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
$conn->close();
?>