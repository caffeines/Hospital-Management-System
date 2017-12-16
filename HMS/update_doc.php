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
				<a href="" class="list-group-item active" style="background-color:#3399ff ;color:#ffffff;border-color:#3399ff;> doctor</a>
				<a href="" class="list-group-item ">Doctor</a>
				<a href="doctor_details.php" class="list-group-item ">Doctor Details</a>
				<a href="add_doctor.php" class="list-group-item ">Add New Doctor</a>
			</div>
		</div> 
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3399ff ;color:#ffffff;">
					Update An Appoinment
				</div>
				<div class="card-body">
					<?php
						if(isset($_GET['edit_doc'])){
							$id = (int)$_GET['edit_doc']; 	
					    	$mysqli =new mysqli("localhost","root","","hospital_msdb");
						    if($mysqli->connect_errno)
						    {
						    	echo "Connection failed (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
						    }
						    $query=$mysqli->query("SELECT * from doctor where docid = '$id'");
						    $row = $query->fetch_assoc();
						}
			    	?>
					<form class="form-group", action="func.php" method = "POST">
						<label>Doctor ID</label>
						<input type="text" name="docid" class="form-control" value = "<?php echo $row['docid']?>" readonly><br>
						<label>Name</label>
						<input type="text" name="name" class="form-control" value = "<?php echo $row['doc_name']?>"><br>
						<label>Specialized</label>
						<input type="text" name="dept" value = "<?php echo $row['dept']?>" class="form-control"><br>
						<label>fee</label>
						<input type="number" name="fee" value = "<?php echo $row['fee']?>" class="form-control"><br>
						<label>Schedule</label>
						<input type="text" name="time" value = "<?php echo $row['start']?>" class="form-control"><br>
						<button type="submit" name = "update_doc" class="btn btn-outline-primary">Update</button>
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