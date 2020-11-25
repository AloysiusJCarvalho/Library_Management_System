
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="lms_database"; // Database name
$tbl_name="student"; // Table name
// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar
$id=$_GET['id'];
// "Deleted Successfully";
echo "<BR>";
//echo "<a href='facultymenu.php'>Back to main page</a>";
 //Delete data in mysql from row that has this id
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($conn,$sql);
// if successfully deleted
if($result){
echo "Successful";
echo "<BR>";
include 'view.php';
}
else
{
echo "ERROR";
}
?>
