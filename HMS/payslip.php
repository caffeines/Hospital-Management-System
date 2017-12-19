<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<h1><b><font color="black" style="padding-left:520px;">Hope For Life Hospital </font></b></h1>
<h5><font color="black" style="padding-left:650px;">Dhaka, Bangladesh </font></h5>
<h3>Payment slip</h3>
<hr>

<?php 
global $con;
    $query = "SELECT pid,fname,lname,age,weight,gender,address,phno,disease, doc_name
              from book_app b join doctor d
              on d.docid = b.docid
              join payment p on p.pid = b.pid";

    $result = mysqli_query($con,$query);
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
        $docid = $row['doc_name'];

        echo "Name ".$fname;
      }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>