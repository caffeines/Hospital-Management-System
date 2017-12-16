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
        header("Location:patient_details.php");
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
    $doc = $_POST['doctor'];
    $query = "insert into book_app(fname,lname,age,weight,gender,address,phno,disease,docid) values ('$fname','$lname','$age','$weight','$sex','$adrs','$phno','$dse','$doc')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Appointment sucessfully added.') </script>;";
        echo "<script> window.open('patient_details.php','_self') </script>;";
    }
    else
    {
        echo "<script> alert('Appointment addition unsucessfull.') </script>";
        
    }
}


if(isset($_POST['update_data']))
{
    $id = (int)$_POST['pid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $sex = $_POST['sex'];
    $adrs = $_POST['adrs'];
    $phno = $_POST['phno'];
    $dse = $_POST['dse'];
    $doc = $_POST['doctor'];


    $query = "UPDATE book_app SET fname='$fname', lname='$lname', age='$age', weight='$weight', gender='$sex', address='$adrs', phno='$phno', disease='$dse' WHERE pid = '$id'";
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo "<script> alert('Update sucessfull.') </script>";
        echo "<script> window.open('patient_details.php','_self') </script>;";
    }
    else
    {
        echo "<script> alert('Update unsucessfull.') </script>";
        echo "<script> window.open('patient_details.php','_self') </script>;";
        
    }
}

if(isset($_POST['update_doc']))
{
    $id = (int)$_POST['docid'];
    $name = $_POST['name'];
    $fee = (int)$_POST['fee'];
    $dept = $_POST['dept'];
    $time = $_POST['time'];
    $query = "UPDATE doctor SET doc_name='$name', dept='$dept',fee='$fee', start='$time' WHERE docid = '$id' ";
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo "<script> alert('Update sucessfull.') </script>";
        echo "<script> window.open('doctor_details.php','_self') </script>;";
    }
    else
    {
        echo "<script> alert('Update unsucessfull.') </script>";
        echo "<script> window.open('doctor_details.php','_self') </script>;";
        
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

        echo "<script> window.open('add_doctor.php','_self') </script>;";
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
function display_docs()
{
    global $con;
    $query = "SELECT * from doctor";
    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($result))
    {
        echo '<option value="'.$row['docid'].'">'.$row['doc_name'].'</option>';
    }
}
?>
