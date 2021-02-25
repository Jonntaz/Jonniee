<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meals</title>
    <link rel="stylesheet" href="meals.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
    
            <button type="submit" name="button"><a href="home.php">Back</a> </button>
<div id="content">
  <table width="100%" border="1" >
                          <th colspan="3" style="line-height:2px;"><h2>Meals</h2></th>

    <tr>
      <th id="tt">Photo</th>
      <th id="dd">Category</th>
      <th>Diet</th>

</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $sqli="SELECT * FROM meals";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";   
      echo "<td id='hh'><img src='images/".$row['Photo']."' height='100' width='150'> </td>";
      echo "<b><td id='ff'> <p>".$row['Category']."</p> </td></b>";
      echo "<b><td> <p>".$row['Diet']."</p> </td></b>";
      echo "</tr>";
      echo "</table>";
      }

   
    ?>
  </div>
</body>
</html>