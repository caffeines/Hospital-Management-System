<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar sticky-top navbar-light bg-primary">
  <form class="form-inline">
    <h3><b><font color="#ffffff" style="padding-left:5px;padding-right:15px;">LIFE FOR HOPE HOSPITAL </font></b></h3>
    <a href="admin-panel.php" class="btn btn-light">Pitent Details</a>
    <span style="padding-left:6px;"></span>
    <a href="patient_details.php" class="btn btn-light">Add Patient</a>
    <span style="padding-left:6px;"></span>
    <a href="admin-panel.php" class="btn btn-light">Staff</a>
    <span style="padding-left:6px;"></span>
    <a href="admin-panel.php" class="btn btn-light">Doctor</a>
    <span style="padding-left:6px;"></span>
    <a href="index.php" class="btn btn-light">Logout</a>
    <span style="padding-left:6px;"></span>
  </form>
</nav>
	<div class="jumbotron" style="background: url('Image/hims.jpg') no-repeat;background-size: cover; height: 300px"></div>
<div class= "card">
		<div class="container-fluid">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff">
			<div class="row"> 
				<!--<div class="col-md-1">
				<a href="admin-panel.php" class = "btn btn-light">Go Back</a></div>-->
				<div class="col-md-3"><h3>Remove Patient</h3></div><hr>
				<div class="col-md-8">
					<form class = "form-group" action="dal_pat.php" metod = "post">
						<div class="row">
							<span style="padding-left:230px;"></span>
							<div class="col-md-6">
								<input type="text" name="pid" class="form-control" placeholder="Enter Patient ID"></div>
							<div class="col-md-2">
							<input type="submit" name="delete" class="btn btn-danger" value="Delete"></div>
						</div>
					</form>
				</div>
</div></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body> </html>
