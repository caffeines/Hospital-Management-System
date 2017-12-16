<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
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
    <a href="doctor_details.php" class="btn btn-light">Doctor</a>
    <span style="padding-left:6px;"></span>
    <a href="admin-panel.php" class="btn btn-light">Staff</a>
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
				<div class="col-md-3"><h3>Patient Details</h3>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Doctor ID</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Area of Specialization</th>
      <th scope="col">Fee</th>
      <th scope="col">Schedule</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php   
    $mysqli =new mysqli("localhost","root","","hospital_msdb");
    if($mysqli->connect_errno)
    {
      echo "Connection failed (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
    }
    if(isset($_GET['doc_search']))
    {
    $phno = $_GET['dsearch'];
    $query = "SELECT * FROM doctor ;";
    }
    while ($row = $query->fetch_assoc())
    {
      ?>
        <td><?php echo $row['docid'] ?></td>
        <td><?php echo $row['doc_name'] ?></td>
        <td><?php echo $row['dept'] ?></td>
        <td><?php echo $row['fee'] ?></td>
        <td><?php echo $row['start'] ?></td>
        <td>
      <a onclick="return confirm('Are you sure?')" href= "update_doc.php?edit_doc=<?php echo $row['docid'];?>" class="btn btn-warning"> Update</a>
    </td>
    <td>
      <a onclick="return confirm('Are you sure?')" href= "doctor_details.php?delete_doc=<?php echo $row['docid'];?>" class="btn btn-danger"> Delete</a>
    </td>
    </tr>
    <?php }
      if(isset($_GET['delete_doc']) && !empty($_GET['delete_doc']))
      {
        $d_id = (int)$_GET['delete_doc'];
        $result = $mysqli->query("DELETE FROM doctor
                WHERE docid = '$d_id'");

        if($result)
        {
          echo "<script> alert('Delete sucessfull.') </script>";
          echo "<script> window.open('doctor_details.php','_self') </script>;"; 
        }
        else
        {
          echo "Unsuccessful";
        }
      }
    ?>
    </tr>
  </tbody>
</table>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body> </html>
