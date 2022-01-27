<?php
include 'db.php';
if (isset($_POST['submit'])) {
  $username =$_POST['username'];
  $email = $_POST['email'];
  $password=mysqli_real_escape_string($con , $_POST['password']);

  $pass=password_hash($password,PASSWORD_BCRYPT);

  $email_search = "INSERT INTO `student`(`username`, `email`, `password`) VALUES ('$username','$email','$pass')";
  $query = mysqli_query($con,$email_search);
   
   if($query){
    echo "Data Insert";
   }
   else{
    echo "NOoooo";
   }
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signup </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row">
	<div class="title">
      Admin Login
    </div>
  <form action="" method="POST" >
    <div class="form">
       <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username" placeholder="Enter username" required>
       </div>  
       <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email" placeholder="Enter Email" required>
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" placeholder="Enter Password" required>
       </div>  
        <div class="inputfield">
        <input type="submit" value="Submit" class="btn" name="submit">
         <a href="login.php">signIn</a>
      </div>
      
  </div>
  
    </form>
    
</div>
</body>
</html>