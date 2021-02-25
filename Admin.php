<?php
$host="localhost";
$user="root";
$password="";
$db="nutrition";
$conn=mysqli_connect("localhost","root","","nutrition") or die(mysql_error());
if (isset($_POST['register'])) {
 $name=$_POST['name'];
 $uname=$_POST['username'];
 $password=md5($_POST['password']);

 $sql="INSERT INTO Admin(Name,Username,Password) 
 VALUES('$name','$uname','$password')";
   $result= mysqli_query($conn,$sql);

if ($result) {
  echo "<script type='text/javascript'>alert('successfully registered');
  window.location='adminn.php';</script>";
}
else{
    echo "<script type='text/javascript'>alert('registration failed');
  window.location='Admin.php';</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="sign.css"> 
        </head>
  <body>
    <div class="regg">
        <h1>REGISTER HERE</h1>

    <form  method="POST" action="#">
      <table>
      <tr>
          <td>Name:</td>
          <td><input type="text" name="name" value="" id="name" placeholder="enter name" required/> </td>
        </tr>
        
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username" value="" id="username" placeholder="enter username" required/> </td>
        </tr>
        
        <tr>
          <td>Password:</td>
          <td><input type="password" id="password" name="password"  value="" required/> </td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td><input type="password" id="C_password" name="cpassword" value="" required/> </td>
        </tr>

      </table>
<input type="submit" name="register" value="REGISTER"  class="save">  
   <a href="adminn.php">Already have An Account?</a> 

 </form>
   </div>
   <script type="text/javascript">
    
var password = document.getElementById("password")
  , confirm_password = document.getElementById("C_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
  </body>
</html>