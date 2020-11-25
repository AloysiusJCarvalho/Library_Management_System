<?php

//connecting to database

$conn =mysqli_connect("localhost","root","");
$db=mysqli_select_db(lms_database,$conn);

//fetching data

$query = SELECT *FROM student (rollno,firstname,lastname,username,stream) VALUES('$rollno','$firstname','$lastname','$username','$stream')";;
$result =mysqli_query($query);
mysqli_query("SELECT *FROM student") or die(mysqli_error());

$row = mysqli_fetch_array($result);
