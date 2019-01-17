<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {


$name=mysqli_real_escape_string($conn, $_POST['name']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$id=mysqli_real_escape_string($conn, $_POST['id']);

$sql= "INSERT INTO faculty(ID,NAME,Course1_ID,Course1_Sec,Course2_ID,Course2_Sec,Course3_ID,Course3_Sec,Password) VALUES ('$id','$name','','','','','','','$pass');";//Empty strings are inserted for courses.


if(mysqli_query($conn,$sql))
{
    echo "<script type='text/javascript'>";
    echo "alert('Data Entered into Faculty Table')";
    echo "</script>";
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('SQL Query Execution Problem')";
    echo "</script>";
}

header("Location: http://localhost/project/admin_faculty.php");}

else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}

mysqli_close($conn);
?>