<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {

$query = "SELECT * FROM student ORDER BY SEM, SEC, USN;"; 
$result = mysqli_query($conn,$query);

echo "<table >"; // start a table tag in the HTML
echo "<tr><th>USN</th><th>Name</th><th>Semester</th><th>Section</th></tr>";

while($row = mysqli_fetch_array($result)){ 


    echo "<tr><td>" . $row['USN'] . "</td><td>" . $row['NAME'] . "</td><td>"  . $row['SEM'] . "</td><td>" . $row['SEC'] . "</td></tr>";  
}

echo "</table>"; 
mysqli_close($conn); }

else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}


?>