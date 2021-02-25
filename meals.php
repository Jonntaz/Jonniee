<?php
  $db=mysqli_connect("localhost","root","","nutrition");
  if (isset($_POST['ADD'])) {
  $target="images/".basename($_FILES['file']['name']);
  $Photo=$_FILES['file']['name'];
  $Category=$_POST['category'];
  $Diet=$_POST['text'];
  $id=$_POST['ID'];
  if (isset($_REQUEST['update'])) {
  $sqll=mysqli_query($db,"delete from meals where ID='$id'");
  if ($sqll) {
    echo "<script>alert('Details updated successfully');</script>";
  }
    
  }

    $sql="INSERT INTO meals(Photo,Category,Diet) VALUES('$Photo','$Category','$Diet')";

    $sqli=mysqli_query($db,$sql);

   if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  echo "<script>alert(' uploaded successfully');</script>";
}
else{
  echo "<script>alert('failed to upload');</script>";
}
  
}
  if (isset($_GET['id'])) {
  $id=$_GET['id'];
$res=mysqli_query($db,"delete from meals where ID='$id'");
if($res){
 echo "<script type='text/javascript'>alert('Data deleted succussfully');
  window.location='meals.php';</script>";
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
    <title>Meals</title>
    <link rel="stylesheet" href="meals.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
    
<button type="submit" name="button" id="back"><a href="home1.php">Back</a> </button>
            <button onclick="return adds(this);" type="button" id="bttt">ADD</button>
<div id="content">
  <table width="100%" border="1" >
                          <th colspan="4" style="line-height:2px;"><h2>Meals</h2></th>

    <tr>
      <th id="tt">Photo</th>
      <th id="dd">Category</th>
      <th>Diet</th>
      <th id="aa">Operations</th>
</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $sqli="SELECT * FROM meals";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
        $var=$row['ID'];
        $var1=$row['Photo'];
        $var2=$row['Category'];
        $var2=$row['Diet'];
        echo "<div id='fruits'>";
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";   
      echo "<td id='hh'><img src='images/".$row['Photo']."' height='150' width='150'> </td>";
      echo "<b><td id='ff'> <p>".$row['Category']."</p> </td>";
      echo "<b><td id='dr'> <div>".$row['Diet']."</div> </td></b>";
      echo "<td> 
      <button id='bt' onclick='return edit($var)'><a href='edit6.php?ID=$var'>EDIT</a></button>
      <button id='btt' onclick='return deletes($var)'>DELETE</button>
      </td>";
      echo "</tr>";
      echo "</table>";
      echo "</div>";
      }
    ?>
</div>
<div id="form1">
    <form  method="POST" action="" enctype="multipart/form-data">
      <table align="center" border="1px" style="width: 100%; line-height: 45px;">
        <tr>
          <th colspan="6" style="line-height:2px;"><h2>Meals</h2></th>
        </tr>
        <t>
  <input  type="hidden" name="ID"  value=""/>
          <th>Photo:</th>
          <td><input type="file" name="file" value=""  required/> </td>

          <th>Category:</th>
          <td><input type="text" name="category" value=""  required/> </td>
        
          <th>Diet:</th>
          <td><textarea name="text" cols="45" rows="7" placeholder="whats expected to eat"></textarea> </td>
      
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
  
  location.href="meals.php?id="+s1;
}}

  </script>
</body>
</html>