<?php
$server="localhost";
$user="root";
$pass="";
$dbname="lms_database";

$conn = new mysqli($server,$user,$pass,$dbname);
if($conn->connect_error)
{
    die("Connection failed" .$conn->connect_error);
    
}

    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
    $phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']); 

$sql="INSERT INTO student (firstname,lastname,phonenumber,email,password) VALUES('$firstname','$lastname','$phonenumber','$email','$password')";

if($conn->query($sql)==TRUE)
{
    
     header("refresh:4;url=http://localhost/LMS%20system/slogin.php");
echo'Registered Successfully!!please wait...';
    
}

else
{
    
    echo"error".$sql ."<br/>".$conn->error;
}

$conn->close();

?>