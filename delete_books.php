
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="library"; // Database name
$tbl_name="books"; // Table name
// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar
$name=$_GET['name'];
// "Deleted Successfully";
echo "<BR>";
//echo "<a href='facultymenu.php'>Back to main page</a>";
 //Delete data in mysql from row that has this id
$sql="DELETE FROM $tbl_name WHERE name='$name'";
$result=mysqli_query($conn,$sql);
// if successfully deleted
if($result){
echo "Successful";
echo "<BR>";
include 'book_view.php';
}
else
{
echo "ERROR";
}
?>
