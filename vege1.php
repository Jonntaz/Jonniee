<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vegetables</title>
    <link rel="stylesheet" href="fruits.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
    
            <button type="submit" name="button"><a href="home.php">Back</a> </button>
<div id="content">
  <table width="100%" border="1" >
                          <th colspan="4" style="line-height:2px;"><h2>Vegetables</h2></th>

    <tr>
      <th id="tqt">Photo</th>
      <th id="ddd">Description</th>
      <th id="qq">Nutrients</th>
      <th>Benefits</th>
</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $table='images';
      $sqli="SELECT * FROM vege";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";   
      echo "<td id='hhh'><img src='images/".$row['Photo']."' height='100' width='150'> </td>";
      echo "<td width='25%'> <p>".$row['Description']."</p> </td>";
      echo "<td width='25%'> <p>".$row['Nutrients']."</p> </td>";
      echo "<td width='25%'> <p>".$row['Conditionn']."</p> </td>";
      echo "</tr>";
      echo "</table>";
      }

   
    ?>
  </div>
</body>
</html>