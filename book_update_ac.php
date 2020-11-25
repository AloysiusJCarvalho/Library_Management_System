<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="library"; // Database name
$tbl_name="books"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
$name=$_GET['name'];
$authors=$_GET['authors'];
$edition=$_GET['edition'];
$status=$_GET['status'];
$quantity=$_GET['quantity'];
$department=$_GET['department'];
// update data in mysql database
$sql="UPDATE $tbl_name SET name='$name', authors='$authors',edition='$edition',status='$status',quantity='$quantity',department='$department'WHERE name='$name'";
$result=mysqli_query($conn,$sql);
// if successfully updated.
if($result){
include'book_view.php';
}
else
{
echo "ERROR";
}
?>

