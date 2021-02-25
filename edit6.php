<?php
$id=$_REQUEST['ID'];
$db=mysqli_connect("localhost","root","","nutrition");
$query = "SELECT * from meals where ID='".$id."'";
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="meals.css" />
</head>
<body style="background-image: url(images/image11.jpg);">
<div id="content">
  <table width="100%" border="1">
                      <th colspan="3" style="line-height:2px;"><h2>Update Details</h2></th>

    <tr>
      <th id="ttt">Photo</th>
      <th style="width: 35%;">Category</th>
      <th>Diet</th>      
</tr>
    </table>
<form  method="POST"  action="meals.php" enctype="multipart/form-data" >
      <table align="center" border="1px" style="width: 100%; line-height: 30px;">
        <t>
        <input  type="hidden" name="ID"  value="<?php echo $row['ID'];?>" />
        <input style="display: none;" type="text" name="update" value="<?php echo $row['ID'];?>" required></td>      
          <td id="ss"><input type="file" name="file"><?php echo "<img src='images/".$row['Photo']."' height='150' width='150'>"?></td>
        
          <td id="bk"><input type="text" name="category" value="<?php echo $row['Category'];?>" required></td>
      

          <td><textarea  name="text" cols="50" rows="10"  required><?php echo $row['Diet'];?></textarea> </td>
      </t>
      </table>   
      <input type="submit" name="ADD" value="UPDATE"  class="save">  

</form>
</div>
</div>
</body>
</html>
