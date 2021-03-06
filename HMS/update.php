<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Update</title>
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
				<a href="" class="list-group-item active" style="background-color:#3399ff ;color:#ffffff;border-color:#3399ff;> Staff</a>
				<a href="" class="list-group-item ">Staff</a>
				<a href="" class="list-group-item ">Staff Details</a>
				<a href="" class="list-group-item ">Add New Staff</a>
				<a href="" class="list-group-item ">Remove Staff</a>
			</div>
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3399ff ;color:#ffffff;border-color:#3399ff;> doctor</a>
				<a href="" class="list-group-item ">Doctor</a>
				<a href="doctor_details.php" class="list-group-item ">Doctor Details</a>
				<a href="add_doctor.php" class="list-group-item ">Add New Doctor</a>
				<a href="" class="list-group-item ">Remove Doctor</a>
			</div>
		</div> 
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3399ff ;color:#ffffff;">
					Update An Appoinment
				</div>
				<div class="card-body">
					<?php
						if(isset($_GET['edit'])){
							$id = (int)$_GET['edit']; 	
					    	$mysqli =new mysqli("localhost","root","","hospital_msdb");
						    if($mysqli->connect_errno)
						    {
						    	echo "Connection failed (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
						    }
						    $query=$mysqli->query("SELECT * from book_app where pid = '$id'");
						    $row = $query->fetch_assoc();
						}
			    	?>
					<form class="form-group", action="func.php" method = "POST">
						<label>Patient ID</label>
						<input type="text" name="pid" class="form-control" value = "<?php echo $row['pid']?>" readonly><br>
						<label>First Name</label>
						<input type="text" name="fname" class="form-control" value = "<?php echo $row['fname']?>"><br>
						<label>Last Name</label>
						<input type="text" name="lname" value = "<?php echo $row['lname']?>" class="form-control"><br>
						<label>Age</label>
						<input type="number" name="age" value = "<?php echo $row['age']?>" class="form-control"><br>
						<label>Weight</label>
						<input type="number" name="weight" value = "<?php echo $row['weight']?>" class="form-control"><br>
						<label>Sex</label>
						<select name="sex" class="form-control">
							<option value = Male >Male</option>
							<option value = Female >Female</option>
							<option value = Other >Other</option>
						</select> <br>
						<label>Address</label>
						<input type="text" name="adrs" value = "<?php echo $row['address']?>" class="form-control"><br>
						<label>Phone NO</label>
						<input type="text" name="phno" value = "<?php echo $row['phno']?>" class="form-control"><br>
						<label>Disease</label>
						<input type="text" name="dse" value = "<?php echo $row['disease']?>" class="form-control"><br>
						<label>Doctor Appoinment</label>
						<select name="doctor" class="form-control">
							<?php display_docs();?>
						</select><br>
						
						<button type="submit" name = "update_data" class="btn btn-outline-primary">Update</button>
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