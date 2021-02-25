<?php
$db=mysqli_connect("localhost","root","","nutrition");
if (isset($_POST['ADD'])) {
  $Ailments=$_POST['disease'];
  $Description=$_POST['text'];
  $Diet=$_POST['nutrients'];
  $id=$_POST['ID'];
  if (isset($_REQUEST['update'])) {
  $sqll=mysqli_query($db,"delete from diagnosis where ID='$id'");
  if ($sqll) {
    echo "<script>alert('Details updated successfully');</script>";
  }
    
  }
    $sql="INSERT INTO diagnosis(Ailment,Description,Diet) VALUES('$Ailments','$Description','$Diet')";

    $sqli=mysqli_query($db,$sql);

   if ($sqli) {
  echo "<script>alert(' Added successfully');</script>";
}
else{
  echo "<script>alert('failed to Add');</script>";
}
  
}
   if (isset($_GET['id'])) {
  $id=$_GET['id'];
$res=mysqli_query($db,"delete from diagnosis where ID='$id'");
if($res){
 echo "<script type='text/javascript'>alert('Data deleted succussfully');
  window.location='diagnosis.php';</script>";
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
    <title>Diagnosis</title>
    <link rel="stylesheet" href="diagnosis.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
    
            <button type="submit" name="button" id="back"><a href="home1.php">Back</a> </button>
            <button onclick="return adds(this);" type="button" id="bttt">ADD</button>

<div id="content">
  <table width="100%" border="1" >
                          <th colspan="4" style="line-height:2px;"><h2>Diagnosis</h2></th>

    <tr>
      <th id="tt">Ailment</th>
      <th id="dd">Description</th>
      <th>Diet</th>
       <th id="dr">Operations</th>

</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $sqli="SELECT * FROM diagnosis";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
        $var=$row['ID'];
        $var1=$row['Ailment'];
        $var2=$row['Description'];
        $var2=$row['Diet'];
      echo "<div id='fruits'>";
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";
      echo "<td id='hh'> <p>".$row['Ailment']."</p> </td>";
      echo "<td width='30%'> <p>".$row['Description']."</p> </td>";
      echo "<td width='30%'> <p>".$row['Diet']."</p> </td>";
      echo "<td> 
      <button id='bt' onclick='return edit($var)'><a href='edit5.php?ID=$var'>EDIT</a></button>
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
          <th colspan="6" style="line-height:2px;"><h2>Diagnosis</h2></th>
        </tr>
        <t> 
        <input  type="hidden" name="ID"  value=""/>      
        
          <th>Ailment:</th>
          <td><input type="text" name="disease"> </td>
      
          <th>Description:</th>
          <td><textarea id="file" name="text" cols="45" rows="7"></textarea> </td>

          <th>Diet:</th>
          <td><textarea id="file" name="nutrients" cols="45" rows="7"></textarea> </td>
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
  
  location.href="diagnosis.php?id="+s1;
}}

  </script>
</body>
</html>