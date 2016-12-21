<?php
include("dbconnect.php");

// select database
mysqli_select_db($conn,"blog") or die("could not select database". mysqli_error());

// select table info
$sql="SELECT title,body FROM post ";

if ($result=mysqli_query($conn, $sql)) {

// Number of row in table 	
	$number_row=mysqli_num_rows($result);
      echo '<BR><BR><table border="1">';
     echo '<tr>';
     echo '<td>title</td>';
	 echo '<td>Body</td>';
     

	
     echo '</tr>';  
while($table_data=mysqli_fetch_row($result))
{

echo "<tr>";
foreach($table_data as $field )
   echo"<td>$field</td>";
 
   echo"</tr>";
   
 
	
}

 echo"</table>"; 
}
 
 else 
 {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<a href="../../index.html" >Go back home</a>