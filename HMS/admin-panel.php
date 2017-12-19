<!DOCTYPE html>
<?php include("func.php");?>
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
    <a href="test.php" class="btn btn-light">Test</a>
    <span style="padding-left:6px;"></span>
    <a href="index.php" class="btn btn-light">Logout</a>
    <span style="padding-left:6px;"></span>
  </form>
</nav>
<div class="jumbotron" style="background: url('Image/hims.jpg') no-repeat;background-size: cover; height: 200px"></div>
<div class="container-fluid">
<hr>
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
				<div class="card-body" style="background-color:#3399ff ;color:#ffffff;"><h4>
					Book An Appoinment</h4>
				</div>
				<div class="card-body">
					<form class="form-group", action="func.php" method = "post">
						<label>First Name</label>
						<input type="text" name="fname" placeholder="* Enter first name" class="form-control" required><br>
						<label>Last Name</label>
						<input type="text" name="lname" placeholder="* Enter last name" class="form-control" required ><br>
						<label>Age</label>
						<input type="number" name="age" placeholder="* Enter age" class="form-control" required><br>
						<label>Weight</label>
						<input type="number" name="weight" placeholder="* Enter weight" class="form-control" required><br>
						<label>Sex</label>
						<select name="sex" class="form-control">
							<option value = Male >Male</option>
							<option value = Female >Female</option>
							<option value = Other >Other</option>
						</select> <br>
						<label>Address</label>
						<input type="text" name="adrs" placeholder="* Enter patient address" class="form-control" required><br>
						<label>Phone NO</label>
						<input type="text" name="phno" placeholder="* Enter phone number" class="form-control" required><br>
						<label>Disease</label>
						<input type="text" name="dse" placeholder=" Enter disease" class="form-control" required><br>
						<label>Doctor Appoinment</label>
						<select name="doctor" class="form-control">
							<?php display_docs();?>
						</select><br>
						<button type="submit" name = "app_submit" class="btn btn-outline-primary">Enter Appoinment</button>
					</form>
				</div>
				  </div>
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