<!DOCTYPE html>

<html>
<head>
	<title>Payment</title>
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
    <a href="patient_search.php" class="btn btn-light">Payment</a>
    <span style="padding-left:6px;"></span>
    <a href="index.php" class="btn btn-light">Logout</a>
    <span style="padding-left:6px;"></span>
  </form>
</nav>
	<div class="jumbotron" style="background: url('Image/hims.jpg') no-repeat;background-size: cover; height: 300px"></div>
	<a href="admin-panel.php" class="btn btn-outline-info btn-lg btn-block" ><b><i>Add patient</i></b></a>
	<div class= "card">
		<div class="container-fluid">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff">
			<div class="row"> 
				<div class="col-md-3"><h3>Patient Details</h3></div><hr>
				<div class="col-md-8">
					<form class = "form-group" action="patient_search.php" method = "get">
						<div class="row">
							<span style="padding-left:230px;"></span>
							<div class="col-md-6">
								<input type="text" name="psearch" class="form-control" placeholder="Patient search here"></div>
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
      <th scope="col">PID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Disease</th>
      <th scope="col">Doctor</th>
      <th> Bill </th>
      <th> Status </th>
      <th> Payment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
    $id = 0;	
    $mysqli =new mysqli("localhost","root","","hospital_msdb");
    $con=mysqli_connect("localhost","root","","hospital_msdb");
    $pd = $_GET['pid'];
    if($mysqli->connect_errno)
    {
    	echo "Connection failed (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
    }
    
    $queryqw= "SELECT b.pid,fname,lname,phno,disease,doc_name,status,due
                          from book_app b join doctor d
                          on d.docid = b.docid
                          join bill_n_report r on b.pid = r.pid
                          WHERE b.pid = $pd";
    $result = mysqli_query($con,$queryqw);
    while ($row = mysqli_fetch_array($result))
    {
    	?>
      <form action="payment.php?pid=<?php echo $row['pid'];?>" method="POST">
      <?php $id = $row['pid'] ?>
        <td><?php echo $row['pid'] ?></td>
  		<td><?php echo $row['fname'] ?>
  			<?php echo $row['lname'] ?></td>
  		<td><?php echo $row['phno'] ?></td>
  		<td><?php echo $row['disease'] ?></td>
      <td><?php echo $row['doc_name'] ?></td>
  		<td><?php echo $row['due'] ?></td>
      <td><?php echo $row['status']?></td>
      <td><select name="payment" class="form-control">
                <option value ='Paid'>Paid</option>
                <option value ='Unpaid'>Unpaid</option>
      </select></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
    <input type="submit" name = "pay" value="Payment" class="btn btn-light">
</form>
  <?php 
  if(isset($_POST['pay']))
  {
        $opt = $_POST['payment'];
        $d = 0;
        $id = $_POST['pid'];
        
        $query = "UPDATE bill_n_report SET due='$d', status='$opt' WHERE pid = '$id'";
        $r = mysqli_query($con, $query);

        if($r)
        {
          echo "<script> alert('Update sucessfull.') </script>";
          echo "<script> window.open('patient_details.php','_self') </script>;"; 
        }
        else
        {
          echo "Unsuccessful";
        }
      }
  ?>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>