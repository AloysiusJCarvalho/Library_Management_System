<?php
$server="localhost";
$user="root";
$pass="";
$dbname="library";

$conn = new mysqli($server,$user,$pass,$dbname);
if($conn->connect_error)
{
    die("Connection failed" .$conn->connect_error);
    
}

    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $authors=mysqli_real_escape_string($conn,$_POST['authors']);
$edition=mysqli_real_escape_string($conn,$_POST['edition']);
    $status=mysqli_real_escape_string($conn,$_POST['status']);
$quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
    $department=mysqli_real_escape_string($conn,$_POST['department']);

    
$sql="INSERT INTO books (name,authors,edition,status,quantity,department) VALUES('$name','$authors','$edition','$status','$quantity','$department')";

if($conn->query($sql)==TRUE)
{
    echo'Book Inserted Successfully!!please wait...';
     header("refresh:2;url=http://localhost/LMS%20system/book_view.php");

    
}

else
{
    
    echo"error".$sql ."<br/>".$conn->error;
}

$conn->close();

?>