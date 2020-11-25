<?php
$conn =mysqli_connect("localhost","root","","lms_database");
if(isset($_POST['button']))
{
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `student` WHERE `email`='$email' AND `password`='$password'";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    
    if($row>=1)
    {
        
       
header("refresh:5;url=http://localhost/LMS System/after_student_login.php");
echo'Loading!!please wait...';
    }
    
    else
    {
        
        $a="PLEASE ENTER A VALID USERNAME OR PASSWORD";
        
        echo"<script>alert('".$a."')</script>";
        
       // header("Location:http://localhost/LMS/login.php");
    }
    
    exit();
    
}

?>