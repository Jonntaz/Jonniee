<?php
$host="localhost";
$user="root";
$password="";
$db="nutrition";

$conn=mysqli_connect("localhost","root","","nutrition") or die(mysql_error());
if (isset($_POST['login'])) {
$username=$_POST['Username'];
$password=md5($_POST['password']);
$sql="SELECT * FROM register WHERE Username='".$username."' AND Password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1) {
	echo "<script type='text/javascript'>alert('successfully logged in');
  window.location='home.php';</script>";

	exit();

}
else{
	echo "<script type='text/javascript'>alert('wrong username or password');
  window.location='loginform.php';</script>";
	exit();
  }  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" a href="login.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
</head>
<body>
<div class="container">
  <h1>LOGIN HERE</h1>

<form method="POST" action="#">
<table>
        <tr>
          <td>Enter Username:</td>
          <td><input type="text" name="Username" value="" required/> </td>
        </tr>

        <tr>
          <td>Enter Password:</td>
          <td><input type="password" name="password" value="" required/> </td>
        </tr>
      
       </table>
    <input type="submit" name="login" value="LOGIN" class="save"/><br><br>
   <a href="forgot.php">forgot Password?</a>
   <a href="signup.php">Create An Account?</a> 
   
  </form>
</div>

</body>
</html>

