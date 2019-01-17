<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {

$code=mysqli_real_escape_string($conn, $_POST['code']);

$delete = "DELETE FROM course WHERE CODE='$code';";
if(mysqli_query($conn,$delete))
{
    echo "<script type='text/javascript'>";
    echo "alert('Successfully deleted')";
    echo "</script>";
    header("Location: http://localhost/project/admin_course.php");

    
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('ERROR: Could not delete. Make sure the CODE is correct.')";
    echo "</script>";
    header("Location: http://localhost/project/admin_course.php");

}
mysqli_close($conn);}
else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}
?>