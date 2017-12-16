<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Admin</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-light bg-primary">
  <form class="form-inline">
    <h3><b><font color="#ffffff" style="padding-left:5px;padding-right:15px;">LIFE FOR HOPE HOSPITAL </font></b></h3>
    <a href="admin-panel.php" class="btn btn-light">Home</a>
    <span style="padding-left:6px;"></span>
    <a href="patient_details.php" class="btn btn-light">Patient</a>
    <span style="padding-left:6px;"></span>
    <a href="doctor_details.php" class="btn btn-light">Doctor</a>
    <span style="padding-left:6px;"></span>
    <a href="admin-panel.php" class="btn btn-light">Staff</a>
    <span style="padding-left:6px;"></span>
    <a href="index.php" class="btn btn-light">Logout</a>
    <span style="padding-left:6px;"></span>
  </form>
</nav>
<div class="jumbotron" style="background: url('Image/hims.jpg') no-repeat;background-size: cover; height: 200px"></div>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3399ff ;color:#ffffff; border-color:#3399ff; > Patient</a>
				<a href="" class="list-group-item ">Patient</a>
				<a href="patient_details.php" class="list-group-item ">Patient Details</a>
				<a href="" class="list-group-item ">Add New Patient</a>
			</div>
			<hr>
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3399ff ;color:#ffffff;border-color:#3399ff;> doctor</a>
				<a href="" class="list-group-item ">Doctor</a>
				<a href="doctor_details.php" class="list-group-item ">Doctor Details</a>
				<a href="add_doctor.php" class="list-group-item ">Add New Doctor</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3399ff ;color:#ffffff;">
					Add Doctor
				</div>
				<div class="card-body">
					<form class="form-group", action="func.php" method = "post">
						<label>Name</label>
						<input type="text" name="name" placeholder="* Enter name" class="form-control" required><br>
						<label>Specialized at</label>
						<input type="text" name="dept" placeholder="* Enter Area of Specialization" class="form-control" required><br>
						<label>Fee</label>
						<input type="number" name="fee" placeholder="* Enter fee" class="form-control" required><br>
						<label>Schedule</label>
						<input type="text" name="time" placeholder="* Enter schedule" class="form-control" required><br>
						<button type="submit" name = "add_doc" class="btn btn-outline-primary">Add Doctor</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>		
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>