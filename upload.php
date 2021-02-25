<?php
if (isset($_POST['upload'])) {
	$target="images/".basename($_FILES['file']['name']);
	$db=mysqli_connect("localhost","root","","nutrition");
	$image=$_FILES['file']['name'];
	$text=$_POST['text'];
	$sql="INSERT INTO test(Photo,Description) VALUES('$image','$text')";
	mysqli_query($db,$sql);
	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  echo "<script>alert(' uploaded successfully');</script>";
	}
	else{
  echo "<script>alert('failed to upload');</script>";
	}
}



?>
<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="upload.css">
	</head>
	<body>
	<div id="content">
		<?php
			$db=mysqli_connect("localhost","root","","nutrition");
			$sqli="SELECT * FROM test";
			$result=mysqli_query($db,$sqli);
			while ($row=mysqli_fetch_array($result)) {
			echo "<div id='img_div'>";
            echo "<td><img src='images/".$row['Photo']."' height='100' width='150'> </td></th>";
			echo "<p>".$row['Description']."<p>";
			echo "</div>";
			}




		?>
		<form method="POST" action="#" enctype="multipart/form.data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="file">
			</div>
			<div>
				<textarea name="text" cols="40" rows="4" placeholder="say something about this image...."></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="upload image">
			</div>
		</form>
	</div>
	</body>
	</html>