<?php
$conn =mysqli_connect("localhost","root","","lms_system");
if(isset($_POST['button']))
{
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `table1` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    
    if($row>=1)
    {
        
       
header("refresh:5;url=http://localhost/LMS System/after_admin_login.php");
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