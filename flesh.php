<?php
 $db=mysqli_connect("localhost","root","","nutrition");
if (isset($_POST['ADD'])) {
  $target="images/".basename($_FILES['file']['name']);
  $Photo=$_FILES['file']['name'];
  $Description=$_POST['Description'];
  $Nutrients=$_POST['Nutrients'];
  $Conditionn=$_POST['Conditionn'];
  $id=$_POST['ID'];
  if (isset($_REQUEST['update'])) {
  $sqll=mysqli_query($db,"delete from flesh where ID='$id'");
  if ($sqll) {
    echo "<script>alert('Details updated successfully');</script>";
  }
    
  }

    $sql="INSERT INTO flesh(Photo,Description,Nutrients,Conditionn) VALUES('$Photo','$Description','$Nutrients','$Conditionn')";

    $sqli=mysqli_query($db,$sql);

   if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  echo "<script>alert(' uploaded successfully');</script>";
}
else{
  echo "<script>alert('failed to upload');</script>";
}
  
}if (isset($_GET['id'])) {
  $id=$_GET['id'];
$res=mysqli_query($db,"delete from flesh where ID='$id'");
if($res){
 echo "<script type='text/javascript'>alert('Data deleted succussfully');
  window.location='flesh.php';</script>";
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
    <title>flesh foods</title>
    <link rel="stylesheet" href="fruits.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
    
<button type="submit" name="button" id="back"><a href="home1.php">Back</a> </button>
            <button onclick="return adds(this);" type="button" id="bttt">ADD</button>
<div id="content">
  <table width="100%" border="1" >
                          <th colspan="5" style="line-height:2px;"><h2>Flesh Foods</h2></th>

    <tr>
      <th id="tt">Photo</th>
      <th id="aa">Description</th>
      <th id="ww">Nutrients</th>
      <th>Benefits</th>
      <th id="dd">Operations</th>

</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $table='flesh';
      $sqli="SELECT * FROM flesh";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
        $var=$row['ID'];
        $var1=$row['Photo'];
        $var2=$row['Description'];
        $var2=$row['Nutrients'];
        $var2=$row['Conditionn'];
        echo "<div id='fruits'>";
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";   
      echo "<td id='hh'><img src='images/".$row['Photo']."' height='100' width='150'> </td>";
      echo "<td width='20%'> <p>".$row['Description']."</p> </td>";
      echo "<td width='20%'> <p>".$row['Nutrients']."</p> </td>";
      echo "<td width='20%'> <p>".$row['Conditionn']."</p> </td>";
       echo "<td> 
      <button id='bt' onclick='return edit($var)'><a href='edit3.php?ID=$var'>EDIT</a></button>
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
      <table align="center" border="1px" style="width: 99%; line-height: 45px;">
        <tr>
          <th colspan="8" style="line-height:2px;"><h2>Flesh Foods</h2></th>
        </tr>
        <t>
          <input  type="hidden" name="ID"  value=""/>      

          <th>Photo:</th>
          <td><input type="file" name="file" value=""  required/> </td>
        
          <th>Description:</th>
          <td><textarea name="Description" cols="30" rows="7" placeholder="say something about this image...."></textarea> </td>
      
          <th>Nutrients contained:</th>
          <td><textarea  name="Nutrients" cols="30" rows="7"></textarea> </td>

          <th>Benefits:</th>
          <td><textarea  name="Conditionn" cols="30" rows="7"></textarea> </td>
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
  
  location.href="flesh.php?id="+s1;
}}

  </script>
</body>
</html>