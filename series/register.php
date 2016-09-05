<?php
  session_start();
  //connect to database
  $db = mysqli_connect("localhost","root","mrgain","authentication");
  if(isset($_POST['register_btn'])){
      session_start();
      $username = mysql_real_escape_string($_POST['username']);
      $email = mysql_real_escape_string($_POST['email']);
      $password = mysql_real_escape_string($_POST['password']);
      $password2 = mysql_real_escape_string($_POST['password2']);

      if($password == $password2){
        //create user
        $password = md5($password);
        $sql = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password') ";
        mysqli_query($db, $sql);
        $_SESSION['message'] ="You are now logged in";
        $_SESSION['username'] = $username;
        header("location: cars.php");
      }else{
        //failed
        $_SESSION['message'] ="The two password do not match";
      }
  }

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Reg From</title>
</head>
<body>

<form action="register.php" method="post" >
<table width="400" border="5" align="center">
  <tr>
      <td colspan="5" align="center"><h1>Registration Form</h1></td>
  </tr>

  <tr>
      <td>User Name:</td>
      <td><input type="text" name="username" class="textInput"></td>
  </tr>

  <tr>
      <td>User Password:</td>
      <td><input type="password" name="password" class="textInput"></td>
  </tr>

   <tr>
      <td>Confirm Password:</td>
      <td><input type="password" name="password2" class="textInput"></td>
  </tr>

  <tr>
      <td>Email:</td>
      <td><input type="text" name="email" class="textInput"></td>
  </tr>

  <tr>
      <td colspan="5" align="center" ><input type="submit"  name="register_btn" value="Sign Up"></td>
  </tr>

</table>
</form>
<br><center><b>Already Registered</b><br><a href="login.php">Login Here</a></center><br>
</body>
</html>




