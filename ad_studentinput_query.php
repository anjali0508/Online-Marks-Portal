<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {

$name=mysqli_real_escape_string($conn, $_POST['name']);
$usn=mysqli_real_escape_string($conn, $_POST['usn']);
$sem=mysqli_real_escape_string($conn, $_POST['sem']);
$sec=mysqli_real_escape_string($conn, $_POST['sec']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$select="insert into student(USN,NAME,SEM,SEC,PASSWORD) values ('$usn','$name','$sem','$sec','$pass');";

#$result=mysqli_query($conn,$select);
if(mysqli_query($conn,$select))
{
    echo "<script type='text/javascript'>";
    echo "alert('Student Details Added into Student Table')";
    echo "</script>";
}
else
{
    echo "<script type='text/javascript'>";
    //$error = mysqli_error($conn);
    echo "alert('ERROR: Could not execute the query. This maybe due to a repeated USN.')";
    echo "</script>";
    
}

$course_query = "SELECT CODE FROM COURSE WHERE SEM = '$sem'";
$result = mysqli_query($conn,$course_query);

while($row = mysqli_fetch_array($result)){ 
    $course = $row['CODE'];
    $query = "INSERT INTO academic(USN,SEM,SEC,COURSE_ID) values ('$usn','$sem','$sec','$course');";
    mysqli_query($conn,$query);
    
}

$error = mysqli_error($conn);
if($error)
{
    echo "<script type='text/javascript'>";
    echo "alert('ERROR: Could not execute the query.')";
    echo "</script>";
}
header("Location: http://localhost/project/admin_student.php");


mysqli_close($conn);}
else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}
?>
