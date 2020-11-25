<?php
$nm=$_GET["search"];
    mysqli_connect("localhost","root","");
    mysqli_select_db("lms_database");
    $result=mysqli_query("SELECT * FROM student firstname like ('$nm%')");
echo "<table border='1'>";

while($rows-mysqli_fetch_array($result))
{
    echo "<tr>";
    
   echo "<td>";echo $row["firstname"]; echo"</td>";
    
    echo "<tr>";
    
}

echo "</table>";
?>