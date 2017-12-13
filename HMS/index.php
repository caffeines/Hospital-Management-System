<!DOCTYPE html>
<html>
<head>
	<title>HMS</title>
	   <link rel="stylesheet" href="stylesheet.css">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body style="background:url('Image/login.jpg') no-repeat; background-size: cover; opacity: 5;">
	<div class = "container" style="width: 530px; margin-left:480px; margin-top: 10px";>
		<div class = "card " style="background-color: #0080ff; color: #ffffff">
			<h1><b><font color="white" style="padding-left:05px;">HOPE FOR LIFE HOSPITAL</font></b></h1>
			
		</div>
	</div>
</div>
<div class = "container" style="width: 300px; margin-left:80px; margin-top: 100px";>
	<div class = "card">
		<h2><b><font color="#3399ff" style="padding-left:90px;">Login </font></b></h2>
		<div class="card-body">
			<form class = "form-group" action="func.php", method="post">
				<label>Username </label><br>
				<input type="text" name="username" class="form-control" placeholder="Enter username"><br>
				<label>Password </label><br>
				<input type="password" name="password" class="form-control" placeholder="Enter password"><br>
				<span style="padding-left:80px;"></span>
				<button type="submit" name = "login_submit" id="ab1" class="btn btn-outline-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>