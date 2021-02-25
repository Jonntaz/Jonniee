<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diagnosis</title>
    <link rel="stylesheet" href="diagnosis.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
            <button type="submit" name="button"><a href="home.php">Back</a> </button>
<div id="content">
  <table width="100%" border="1" >
                      <th colspan="6" style="line-height:2px;"><h2>Diagnosis</h2></th>

    <tr>
      <th id="tt">Ailment</th>
      <th id="ddd">Description</th>
      <th>Diet</th>
</tr>
    </table>
      <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $sqli="SELECT * FROM diagnosis";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";
      echo "<td id='hh'> <p>".$row['Ailment']."</p> </td>";
      echo "<td width='40%'> <p>".$row['Description']."</p> </td>";
      echo "<td width='40%'> <p>".$row['Diet']."</p> </td>";
      echo "</tr>";
      echo "</table>";
      }
   
    ?>
  </div>
</body>
</html>