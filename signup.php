<?php
$host="localhost";
$user="root";
$password="";
$db="nutrition";
$conn=mysqli_connect("localhost","root","","nutrition") or die(mysql_error());
if (isset($_POST['register'])) {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $uname=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['pnumber'];
 $password=md5($_POST['password']);

 $sql="INSERT INTO register(FirstName,LastName,Username,Email,PhoneNumber,Password) 
 VALUES('$fname','$lname','$uname','$email','$phone','$password')";
   $result= mysqli_query($conn,$sql);

if ($result) {
  echo "<script type='text/javascript'>alert('successfully registered');
  window.location='loginform.php';</script>";
}
else{
    echo "<script type='text/javascript'>alert('registration failed');
  window.location='signup.php';</script>";
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
          <td>First Name:</td>
          <td><input type="text" name="fname" value="" id="fname" placeholder="enter first name" required/> </td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="lname" value="" id="lname" placeholder="enter last name" required/> </td>
        </tr>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username" value="" id="username" placeholder="enter username" required/> </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email" value="" id="email"  placeholder="enter email" required/> </td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td><input type="phone" name="pnumber" value="" id="phone" placeholder="enter phone number" required/> </td>
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
   <a href="loginform.php">Already have An Account?</a> 

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
