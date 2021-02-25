<Doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>forgot password</title>
	<style type="text/css">
	
		p{
			color: red;
			font-style: italic;
			font-size: 18px;
		}
		.yy{
			width: 50%;
			height: 50px;
		}
		body{
			background-image: url(images/image11.jpg);
		}
		.tt{
			width: 10%;
			color: black;
			background-color: green;
			height: 40px;
			font-size: 20px;
			font-weight: bold;
			border-radius: 8px;
		}
        #forgot{
        	margin-left: 20%;
        	margin-top: 20%;

        }
	</style>
	</head>
	<body>
		<form id="forgot" method="post" action="loginform.php">
	<input type="email" name="forgot"  placeholder="enter your email" required="" class="yy">
	<input type="submit" name="forgott" value="SUBMIT" class="tt">
	<p>*Your password will be sent to your email.Please check your email for confirmation.*</p>
	</form>
	</body>
	</html>