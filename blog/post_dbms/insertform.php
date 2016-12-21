<?php
include("dbconnect.php");
$id=$_POST['id']; 
$title=$_POST['title'] ;//$_=global variable
$body=$_POST['body'] ;
$date=$_POST['date'] ;
$db='blog';
// select database
mysqli_select_db($conn,$db) or die("could not select database". mysqli_error());

$sql = "INSERT INTO post (id,title, body,date)
VALUES ('$id', '$title', '$body','$date')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	//$last_id = mysqli_insert_id($conn);
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<br><br><a href="../../index.html" >Go back home</a>