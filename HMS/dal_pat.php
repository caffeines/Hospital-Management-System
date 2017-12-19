<?php 
$con=mysqli_connect("localhost","root","","hospital_msdb");


if(isset($_GET['delete']))
{
    echo "Sadat";
    $pid = $_GET['pid'];
    
    $query="DELETE FROM book_app
            WHERE pid = '$pid'; ";
    $result = mysqli_query($con,$query);
    if($result)
        echo "$pid";
    else {
        echo "muri kha";
    }
}
?>