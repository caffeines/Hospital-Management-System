<?php 
$con=mysqli_connect("localhost","root","","hospital_msdb");
if(isset($_POST['login_submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query= "select * from login where username = '$username' and password = '$password' ";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:admin-panel.php");
    }
    else 
    {
        echo "<script> window.open('loginError.php','_self') </script>;";
    }
}
if(isset($_POST['app_submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $sex = $_POST['sex'];
    $adrs = $_POST['adrs'];
    $phno = $_POST['phno'];
    $dse = $_POST['dse'];
    $doc = 1;
    $query = "insert into book_app(fname,lname,age,weight,gender,address,phno,disease,docid) values ('$fname','$lname','$age','$weight','$sex','$adrs','$phno','$dse','$doc')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script> window.open('suc_app.php','_self') </script>;";
        echo "<script> window.open('admin-panel.php','_self') </script>;";
    }
    else
    {
        echo "<script> alert('Ragistration unsucessfull.') </script>";
        
    }
}
if (isset($_POST['succ-app']))
{
    header("Location:admin-panel.php");
}
if(isset($_POST['add_doc']))
{
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $fee = $_POST['fee'];
    $time = $_POST['time'];
    $query = "INSERT into doctor(doc_name,dept,fee,start) values ('$name','$dept','$fee','$time')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script> window.open('suc_app.php','_self') </script>;";
        echo "<script> window.open('add_doctor.php','_self') </script>;";
    }
    else
    {
        echo "<script> alert('Ragistration unsucessfull.') </script>";
        echo "<script> window.open('admin-panel.php','_self') </script>;";
    }
}    

function get_patient_details()
{
    global $con;
    $query = "SELECT * 
              from book_app";
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
function get_doctor_details()
{
    global $con;
    $query = "SELECT * 
              from doctor";
    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($result))
    {
        $docid = $row['docid'];
        $doc_name = $row['doc_name'];
        $area = $row['dept'];
        $fee = $row['fee'];
        $time = $row['start'];

        echo "<tr>
        <td>$docid</td>
        <td>$doc_name</td>
        <td>$area</td>
        <td>$fee</td>
        <td>$time</td>
        </tr>";
    }
}
function get_payslip()
{
    global $con;
    $query = "SELECT pid,fname,lname,age,weight,gender,address,phno,disease, doc_name, fee, total,satus,date
              from book_app b join doctor d
              on d.docid = b.docid
              join payment p on p.pid = b.pid
              where pid = 1";
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

        echo "
        Name : $sex
        ";
    }
}
function display_docs()
{
    global $con;
    $quer = "SELECT * from doctor";
    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($result))
    {
        $name = $row['doc_name'];
		$docid = $row['docid'];
        echo '<option value="'.$docid.'">'.$name.'</option>';
    }
}
?>
