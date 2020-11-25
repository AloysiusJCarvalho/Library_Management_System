<html>
<head>
</head>
<body>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="lms_database"; // Database name
$tbl_name="student"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar
$id=$_GET['id'];
// Retrieve data from database
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result)

?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form  name="form1" method="get" action="update_ac.php" >
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Student Information Update</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>

</tr>
<tr>

<td align="center">&nbsp;</td>
<td align="center"><strong>FirstName</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>phonenumber</strong></td>
<td align="center"><strong>email</strong></td>
<td align="center"><strong>password</strong></td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="center">
<input name="firstname" type="text"  value="<?php echo $rows['firstname']; ?>">
</td>
<td align="center">
<input name="lastname" type="text"  value="<?php echo $rows['lastname']; ?>"
size="15">
</td>
<td>
<input name="phonenumber" type="text"  value="<?php echo $rows['phonenumber']; ?>"
size="15">
</td>
<td>
<input name="email" type="text" value="<?php echo $rows['email']; ?>"
size="15">
</td>
    <td>
<input name="password" type="text"  value="<?php echo $rows['password']; ?>"
size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="id" type="hidden" value="<?php echo $rows['id']; ?>"></td>
<td align="center"><input type="submit" name="Submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
   
</body>
    
    
</html> 

