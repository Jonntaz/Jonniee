<?php
$id=$_REQUEST['ID'];
$db=mysqli_connect("localhost","root","","nutrition");
$query = "SELECT *from connect where ID='".$id."'";
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="connect.css" />
</head>
<body style="background-image: url(images/image11.jpg);">
<div id="content">
  <table width="100%" border="1" id="ttt">
                      <th colspan="5" style="line-height:2px;"><h2>Update Details</h2></th>

    <tr>
      <th>Photo</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Social Media</th>
      
</tr>
    </table>
<form  method="POST"  action="connect1.php" enctype="multipart/form-data" >
      <table id="ss" align="center" border="1px" style="width: 100%; line-height: 30px;">
        <t>
  	    <input type="hidden" name="new" value="1" />
        <input  type="hidden" name="ID"  value="<?php echo $row['ID'];?>" />      
          <td><input type="file" name="file"><?php echo "<img src='images/".$row['Photo']."' height='150' width='150'>"?></td>
        
         
          <td><input type="text" name="name" value="<?php echo $row['Name'];?>" required></td>
      
          
          <td><input type="phone" name="phone" value="<?php echo $row['Phone'];?>" required></td>

          
          <td><input type="email" name="email" value="<?php echo $row['Email'];?>" required></td>
<input style="display: none;" type="email" name="update" value="<?php echo $row['Email'];?>" required></td>
           
          <td><textarea  name="Social" cols="28" rows="4"  required><?php echo $row['Social'];?></textarea> </td>
      </t>
      </table>   
      <input type="submit" name="ADD" value="UPDATE"  class="save">  

</form>
</div>
</div>
</body>
</html>
