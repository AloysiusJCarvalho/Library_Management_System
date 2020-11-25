<html>
<head>
</head>
<body>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="library"; // Database name
$tbl_name="books"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar
$name=$_GET['name'];
// Retrieve data from database
$sql="SELECT * FROM $tbl_name WHERE name='$name'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result)

?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form  name="form1" method="get" action="book_update_ac.php" >
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
<td align="center">&nbsp;</td>

</tr>
<tr>

<td align="center">&nbsp;</td>
<td align="center"><strong>name</strong></td>
<td align="center"><strong>authors</strong></td>
    <td align="center"><strong>edition</strong></td>
    <td align="center"><strong>status</strong></td>
    <td align="center"><strong>quantity</strong></td>
    <td align="center"><strong>department</strong></td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="center">
<input name="name" type="text"  value="<?php echo $rows['name']; ?>">
</td>
<td align="center">
<input name="authors" type="text"  value="<?php echo $rows['authors']; ?>"
size="15">
</td>
    
    
    <td align="center">
<input name="edition" type="text"  value="<?php echo $rows['edition']; ?>"
size="15">
</td>
    
    
    <td align="center">
<input name="status" type="text"  value="<?php echo $rows['status']; ?>"
size="15">
</td>
    
    
    <td align="center">
<input name="quantity" type="text"  value="<?php echo $rows['quantity']; ?>"
size="15">
</td>
    
    
    <td align="center">
<input name="department" type="text"  value="<?php echo $rows['department']; ?>"
size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="name" type="hidden" id="name" value="<?php echo $rows['name']; ?>"></td>
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

