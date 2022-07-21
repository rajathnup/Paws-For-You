<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url(https://images.pexels.com/photos/5403252/pexels-photo-5403252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.fa-user-circle{
 font-size: 45px;
 color: white;
 margin-right: 15px;
}

.fa-key{
    font-size: 45px;
 color: white;
 margin-right: 8px;
}


.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  border-radius: 40px;
}
p{
  color:white;
}
a{
  color:white;
}
a:hover{
  color:red;
}
.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  
  padding: 15px 20px;
  color:white;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  border-radius: 50px;
}
h1{
  color:white;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
   <h1 style="text-align:center;">Paws for you</h1> 
<form action="login.php" method="post" style="max-width:500px;margin:auto" >
</br>
</br>
    <h2 style="color: white; text-align:center">Login Here</h2>
</br>
  <div class="input-container">
  <i class="fa fa-user-circle" aria-hidden="true"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" required>
  </div>
</br>
  <
  <div class="input-container">
    <i class="fa fa-key" aria-hidden="true"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw"  required>
  </div>
</br>
<button type="submit" class="btn btn-success my-4 mx-2" name="login"><b>Login</b></button>
<p>Not a user?<a style="font-color:white" href="signup.php"><b>Register Here</b></a></p>
</form>

</body>
</html>