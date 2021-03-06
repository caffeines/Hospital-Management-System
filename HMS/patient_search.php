<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
<head>
	<title>Patient Details</title>
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
				<div class="col-md-3"><h3>Patient Details</h3></div>
    <?php $con=mysqli_connect("localhost","root","","hospital_msdb");

    if(isset($_GET['search']))
    {
    	$phno = $_GET['psearch'];
    	$query = "SELECT pid,fname,lname,age,weight,gender,address,phno,disease,doc_name
                FROM book_app natural join doctor
                WHERE fname like '%{$phno}%' OR lname like '%{$phno}%' OR phno like '%{$phno}%' ";
    	$result = mysqli_query($con,$query);
    	echo "<hr>
           <div class='card-body' style='background-color: #3498DB; color: #ffffff'>
            <table class='table table-hover'>
              <thead>
                <tr>
                  <th> PID</th>
                  <th> Name</th>
                  <th> Age</th>
                  <th> Weight</th>
                  <th> Sex</th>
                  <th> Contact</th>
                  <th> Disease</th>
                  <th> Doctor</th>
                  <th> Test </th>
                  <th> Payment</th>
                  <th> Update</th>
                  <th> Delete </th>
               </tr>
           </thead><tbody>";
    	while ($row = mysqli_fetch_array($result))
      {
            $pid = $row['pid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $age = $row['age'];
            $weight = $row['weight'];
            $sex = $row['gender'];
            $phno = $row['phno'];
            $dse = $row['disease'];
            $doc = $row['doc_name'];
            echo "<tr>
            <td>$pid</td>
            <td>$fname 
            $lname</td>
            <td>$age</td>
            <td>$weight</td>
            <td>$sex</td>
            <td>$phno</td>
            <td>$dse</td>
            <td>$doc</td>";?>
            <td>
      <a href= "test.php?pid=<?php echo $row['pid'];?>" class="btn btn-dark">Test</a>
    </td>
    <td>
      <a href= "payment.php?pid=<?php echo $row['pid'];?>" class="btn btn-success">Payment</a>
    </td>
            <td>
      <a onclick="return confirm('Are you sure?')" href= "update.php?edit=<?php echo $row['pid'];?>" class="btn btn-warning">Update</a>
    </td>
    <td>
      <a onclick="return confirm('Are you sure?')" href= "patient_details.php?delete=<?php echo $row['pid'];?>" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    <?php 
      if(isset($_GET['delete']) && !empty($_GET['delete']))
      {
        $delete_id = (int)$_GET['delete'];
        $result = $mysqli->query("DELETE FROM book_app
                WHERE pid = '$delete_id'");

        if($result)
        {
          echo "Successful";
          echo "<script> window.open('patient_details.php','_self') </script>;"; 
        }
        else
        {
          echo "Unsuccessful";
        }
      }
    	}
    	echo "</tbody> </table> </div> </div>";
    }
  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body> </html>
