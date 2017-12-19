<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
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
				<div class="col-md-3"><h3>Test Log</h3></div>
    <?php 

    $con=mysqli_connect("localhost","root","","hospital_msdb");

    if(isset($_GET['pid']))
    {
    	$phno = $_GET['pid'];
    	$query1 = "SELECT fname, lname
                FROM book_app where pid='$phno'";
      $query2 = "SELECT * FROM test";
      $result1 = mysqli_query($con,$query1);
    	$result2 = mysqli_query($con,$query2);
      $row = mysqli_fetch_array($result1);
    	echo "<br>
           <div class='card-body' style='background-color: #3498DB; color: #ffffff'>
              Patient Name:";
    	
            $fname = $row['fname'];
            $lname = $row['lname'];
            ?><br><h3><?php echo $fname." ".$lname ?></h3>
            </div>"
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Test Name</th>
                    <th scope="col">Test Fee</th>
                    <th scope="col">Select</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <form action="test.php?pidd=<?php echo $phno;?>" method='POST'>
                  <?php   
                  $mysqli =new mysqli("localhost","root","","hospital_msdb");
                  if($mysqli->connect_errno)
                  {
                    echo "Connection failed (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
                  }
                  $query=$mysqli->query("SELECT * 
                                        from test");
                  while ($row = $query->fetch_assoc())
                  {
                    ?>
                  <td><?php echo $row['test_name']; ?></td>
                  <td><?php echo $row['tfee']; ?></td>
                  <td><?php echo "<input type='checkbox' name='test_count[]' value=".$row['tid'].">" ;?></td>
                  
                  </tr><?php }?>
                  
                </tbody>
              </table>
              <hr>
              <input type="submit" name = "test_submit" value="Submit" class="btn btn-light"></form>
              <?php }

                if(isset($_REQUEST['test_submit'])){
                  $test = $_REQUEST['test_count'];
                  $test = implode(',', $test);
                  $bill = 0;
                  $pidd = $_GET['pidd'];
                  $te = explode(',', $test);
                  $a = count($te);
                  $tname=array();
                  for ($i=0; $i <$a ; $i++) { 
                    $queryQ = "SELECT * FROM test WHERE tid = '$te[$i]'";
                    $res = mysqli_query($con,$queryQ);
                    $fees = mysqli_fetch_array($res);
                    $bill += $fees['tfee'];
                    $tname[$i] = $fees['test_name'];
                  }
                  if ($bill > 0) {
                    $status = 'Unpaid';
                  }
                    $query3 = "INSERT INTO `bill_n_report`(`pid`, `all_test`, `due`,`status`) VALUES ('$pidd', '$test','$bill','$status')";
                    $result = mysqli_query($con,$query3);
                    if($result)
                    {
                        echo "<script>alert('Test Submit sucessfully added.') </script>;";
                        echo "<script> window.open('patient_details.php','_self') </script>;";
                    }
                    else
                    {
                        echo "<script> alert('Test Submit unsucessfull.') </script>";
                    }
                  }
              ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body> </html>