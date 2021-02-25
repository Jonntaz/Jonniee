
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>connect</title>
    <link rel="stylesheet" href="connect.css">
  </head>
<body style="background-image: url(images/image11.jpg);">
            <button type="submit" name="button" style="background-color: red;"><a href="home.php" style=" color: black;">Back</a> </button>

    <div id="content">
      <table width="100%" border="1" id="tt">
                  <th colspan="5" style="line-height:2px;"><h2>Connect</h2></th>

    <tr>
      <th>Photo</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Social Media</th>
</tr>
    </table>
    <?php
      $db=mysqli_connect("localhost","root","","nutrition");
      $sqli="SELECT * FROM connect";
      $result=mysqli_query($db,$sqli);
      while ($row=mysqli_fetch_array($result)) {
      echo "<table width='100%' border='1' id='gg'>"; 
      echo "<tr>";   
      echo "<td><img src='images/".$row['Photo']."' height='180' width='180'> </td></th>";
      echo "<td><p>".$row['Name']."<p> </td>";
      echo "<td><p>".$row['Phone']."<p> </td>";
      echo "<td><p>".$row['Email']."<p> </td>";
      echo "<td><p>".$row['Social']."<p> </td>";

      echo "</tr>";
      echo "</table>";
      }
      ?>
    </div>
  </body>
  </html>