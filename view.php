<!DOCTYPE html>
<html>
<head>
<title>Student database</title>

</head>
<body>

<table>
<style>
table {

	  border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

</style>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>phonenumber</th>
<th>email</th>
<th>password</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "lms_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,firstname, lastname,phonenumber,email,password FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['firstname']; ?></td>
<td><?php echo $rows['lastname']; ?></td>
<td><?php echo $rows['phonenumber']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['password']; ?></td>
<td align="center"><a href="update.php?id=<?php echo $rows['id']; ?>">update</a></td>
<td align="center"><a href="delete.php?id=<?php echo $rows['id']; ?>">delete</a></td>
</tr>
<?php
}

echo "</table>";



} else { echo "No results found"; }
$conn->close();
?>
</table>

</body>
</html>
