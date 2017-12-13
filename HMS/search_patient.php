<!DOCTYPE html>
<?php include('func.php');?>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<?php
if(isset($_POST['psearch']))
{
	$contact = $_POST['psearch'];
	$query = "select * from book_app where phno = '$contact' ";
	$result = mysqli_query($con,$query);
	echo "<div class 'card-body style = 'background-color:#3498DB; color: '#ffffff'> 
	<table class='table table-hover' style='background-color:#3399ff ;color:#ffffff;'>
  <thead>
    <tr>
      <th >Patient ID</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Age</th>
      <th >Weight</th>
      <th >Sex</th>
      <th >Address</th>
      <th >Contact</th>
      <th >Disease</th>
      <th >Appointed Doctor</th>
    </tr>
  </thead>
  <tbody>";
	while($row = my_sqli)
	{
		while ($row = mysqli_fetch_array($result))
    {
        $pid = $row['pid'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];
        $weight = $row['weight'];
        $sex = $row['gender'];
        $adrs = $row['address'];
        $phno = $row['phno'];
        $dse = $row['disease'];
        $docid = $row['docid'];

        echo "<tr>
        <td>$pid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$age</td>
        <td>$weight</td>
        <td>$sex</td>
        <td>$adrs</td>
        <td>$phno</td>
        <td>$dse</td>
        <td>$docid</td>
        </tr>";
    }
	}

}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
?>