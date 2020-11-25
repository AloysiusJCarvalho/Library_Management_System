<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="lms_database"; // Database name
$tbl_name="student"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
$id=$_GET['id'];
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$phonenumber=$_GET['phonenumber'];
$email=$_GET['email'];
$password=$_GET['password'];
// update data in mysql database
$sql="UPDATE $tbl_name SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber',email='$email',password='$password' WHERE id='$id'";
$result=mysqli_query($conn,$sql);
// if successfully updated.
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='view.php'>View result</a>";
}
else
{
echo "ERROR";
}
?>

