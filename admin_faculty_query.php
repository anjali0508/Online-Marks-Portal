<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {

$query = "SELECT * FROM faculty;";  
$result = mysqli_query($conn ,$query);

echo "<table>"; // start a table tag in the HTML
echo "<tr><th>Faculty ID</th><th>Name</th><th>Course 1</th><th>Course 1 SEC</th><th>Course 2</th><th>Course 2 SEC</th><th>Course 3</th><th>Course 3 SEC</th><th>Password</th></tr>";

while($row = mysqli_fetch_array($result)){ 

    echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['NAME'] . "</td><td>"  . $row['Course1_ID'] . "</td><td>" . $row['Course1_Sec'] . "</td><td>" . $row['Course2_ID'] .  "</td><td>" . $row['Course2_Sec'] . "</td><td>" . $row['Course3_ID'] .  "</td><td>" . $row['Course3_Sec'] . "</td><td>" . $row['Password'] . "</td></tr>";  
}

echo "</table>";

}

else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}


?>