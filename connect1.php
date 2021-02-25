<?php
$db=mysqli_connect("localhost","root","","nutrition");
if (isset($_POST['ADD'])) {

 $target="images/".basename($_FILES['file']['name']);
  $Photo=$_FILES['file']['name'];
  $Name=$_POST['name'];
  $Phone=$_POST['phone'];
  $Email=$_POST['email'];
  $Social=$_POST['Social'];
 if (isset($_REQUEST['update'])) {
  $sqll=mysqli_query($db,"delete from connect where Email='$Email'");
  if ($sqll) {
    echo "<script>alert('Details updated successfully');</script>";
  }
    
  }
     $sql="INSERT INTO connect(Photo,Name,Phone,Email,Social) VALUES('$Photo','$Name','$Phone','$Email','$Social')";

    $sqli=mysqli_query($db,$sql);

   if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  echo "<script>alert('Details uploaded successfully');</script>";
}
else{
  echo "<script>alert('failed to upload details');</script>";
}
  
}
if (isset($_GET['id'])) {
  $id=$_GET['id'];
$res=mysqli_query($db,"delete from connect where ID='$id'");
if($res){
  echo "<script>alert('deleted successfully');</script>";
  header("location:connect1.php");
}
else{
  echo "<script>alert('data couldnt be deleted');</script>";
}
}
     
     
      ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>connect</title>
    <link rel="stylesheet" href="connect.css">
    <script type="text/javascript" src="main.js"></script>
  </head>
<body style="background-image: url(images/image11.jpg);">

    
            <button type="submit" name="button" id="back"><a href="home1.php">Back</a> </button>
            <button onclick="return adds(this);" type="button" id="bttt">ADD</button>
<div id="content">
  <table width="100%" border="1" id="tt">
                      <th colspan="6" style="line-height:2px;"><h2>Connect</h2></th>

    <tr>
      <th>Photo</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Social Media</th>
      <th>Operations</th>
</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $table='connect';
      $sqli="SELECT * FROM connect";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
        $var=$row['ID'];
        $var1=$row['Photo'];
        $var1=$row['Name'];
        $var2=$row['Phone'];
        $var3=$row['Email'];
        $var4=$row['Social'];
        echo "<div id='main'>";
      echo "<table width='100%' border='1' id='gg' >"; 
      echo "<tr>";   
      echo "<td><img src='images/".$row['Photo']."' height='150' width='150'> </td></th>";
      echo "<td><p>".$row['Name']."<p> </td>";
      echo "<td><p>".$row['Phone']."<p> </td>";
      echo "<td><p>".$row['Email']."<p> </td>";
      echo "<td><p>".$row['Social']."<p>  </td>";
      echo "<td> 
      <button id='bt' onclick='return edit($var)'><a href='edit.php?ID=$var'>EDIT</a></button><br><br>
<button id='btt' onclick='return deletes($var)'>DELETE</button>
      </td>";

      echo "</tr>";
      echo "</table>";
      echo "</div>";
      }
    ?>
</div>
<div id="form1">
  <form  method="POST" action="" enctype="multipart/form-data" >
      <table  align="center" border="1px" style="width: 100%; line-height: 30px;">
        <tr>
          <th colspan="12" style="line-height:2px;"><h2>Nutritionist Details</h2></th>
        </tr>
        <t>
  
          <th>Photo:</th>
          <td><input type="file" name="file" required> </td>
        
          <th>Name:</th>
          <td><input type="text" name="name" required></td>
      
          <th>Phone:</th>
          <td><input type="phone" name="phone" required></td>

           <th>Email:</th>
          <td><input type="email" name="email" required></td>

           <th>Social Media:</th>
          <td><textarea name="Social" cols="28" rows="4" required></textarea> </td>
      </t>
      </table>   
      <input type="submit" name="ADD" value="ADD"  class="save">  

</form>
</div>
  
<script type="text/javascript">
   document.getElementById("form1").style.display="none";
   function adds(){
document.getElementById("form1").style.display="block";
document.getElementById("content").style.display="none";
document.getElementById("bttt").style.display="none";
document.getElementById("back").style.display="none";

   }
      function deletes(s1){
var s=confirm("Are you sure you want to delete?");
if (s) {
  
  location.href="connect1.php?id="+s1;
}}

  </script>
</body>

</html>