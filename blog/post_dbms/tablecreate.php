<?php
include("dbconnect.php");

$db='blog';
// select database
mysqli_select_db($conn,$db) or die("could not select database". mysqli_error());

// create table

$tab .= "CREATE TABLE post (
id INT(15) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
title TEXT(1000) NOT NULL,
body TEXT(2000) NOT NULL,
date  TIMESTAMP	
)";

if (mysqli_multi_query($conn, $tab)) {
    echo "Tables creation successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 