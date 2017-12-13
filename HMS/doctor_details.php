<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Doctor Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar sticky-top navbar-light bg-primary">
  <form class="form-inline">
    <h3><b><font color="#ffffff" style="padding-left:5px;padding-right:15px;">LIFE FOR HOPE HOSPITAL </font></b></h3>
    <a href="admin-panel.php" class="btn btn-light">Home</a>
    <span style="padding-left:6px;"></span>
    <a href="patient_details.php" class="btn btn-light">Patient</a>
    <span style="padding-left:6px;"></span>
    <a href="admin-panel.php" class="btn btn-light">Staf</a>
    <span style="padding-left:6px;"></span>
    <a href="admin-panel.php" class="btn btn-light">Doctor</a>
    <span style="padding-left:6px;"></span>
    <a href="index.php" class="btn btn-light">Logout</a>
    <span style="padding-left:6px;"></span>
  </form>
</nav>
	<div class="jumbotron" style="background: url('Image/hims.jpg') no-repeat;background-size: cover; height: 300px"></div>
  <nav class="navbar navbar-dark bg-faded">
  <form class="form-inline">
    <a href="add_doctor.php" class="btn btn-outline-primary">Add Doctor</a>
    <span style="padding-left:6px;"></span>
    <a href="" class="btn btn-outline-primary">Remove Doctor</a>
    <span style="padding-left:6px;"></span>
    <a href="doctor_details.php" class="btn btn-outline-primary">Doctor Details</a>
  </form>
</nav>
	<div class= "card">
		<div class="container-fluid">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff">
			<div class="row"> 
				<!--<div class="col-md-1">
				<a href="admin-panel.php" class = "btn btn-light">Go Back</a></div>-->
				<div class="col-md-5"><h3>Doctor Details</h3></div>
				<div class="col-md-6">
					<form class = "form-group" action="patient_search.php" metod = "POST">
						<div class="row">
							<div class="col-md-8">
								<input type="text" name="psearch" class="form-control" placeholder="Enter contact number"></div>
						<div class="col-md-2">
							<input type="submit" name="search" class="btn btn-light" value="Search"></div>
						</div>
					</form>
				</div>
			</div></div>
		<div class="card-body" style="background-color: #3498DB; color: #ffffff">
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Doctor ID</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Area of Specialization</th>
      <th scope="col">Fee</th>
      <th scope="col">Schedule</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php get_doctor_details();?>
    </tr>
  </tbody>
</table>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>