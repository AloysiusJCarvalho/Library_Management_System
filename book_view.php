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
<th>bid</th>
<th>name</th>
<th>authors</th>
<th>edition</th>
<th>status</th>
<th>quantity</th>
<th>department</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "library");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT bid,name, authors,edition,status,quantity,department FROM books ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['bid']; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['authors']; ?></td>
<td><?php echo $rows['edition']; ?></td>
<td><?php echo $rows['status']; ?></td>
<td><?php echo $rows['quantity']; ?></td>
<td><?php echo $rows['department']; ?></td>

<td align="center"><a href="update_book_details.php?name=<?php echo $rows['name']; ?>">update</a></td>
<td align="center"><a href="delete_books.php?name=<?php echo $rows['name']; ?>">delete</a></td>
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
