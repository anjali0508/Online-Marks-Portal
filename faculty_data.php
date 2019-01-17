<?php
session_start();

$username=$_SESSION['username'];

include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {

$query = "SELECT * FROM faculty where ID='$username';"; 
$result = mysqli_query($conn ,$query);

echo "<table>"; // start a table tag in the HTML
echo "<tr><th>COURSE ID</th><th>COURSE NAME</th><th>SEMESTER</th><th>SECTION</th></tr>";

$row = mysqli_fetch_array($result) ;
$x = $row['Course1_ID'];

if($row['Course1_ID']!=NULL){
    $course_query1 = "SELECT NAME , SEM FROM COURSE WHERE CODE='$x'";
    
    $result_1 = mysqli_query($conn ,$course_query1);
    
    $row1 = mysqli_fetch_array($result_1);
    
    echo "<tr><td>".$row['Course1_ID']."</td><td>"."<a href=faculty_marks_page.php?course=".$row['Course1_ID']."&sem=".$row1['SEM']."&sec=".$row['Course1_Sec']."> ".$row1['NAME']."</a>"."</td><td>".$row1['SEM']."</td><td>".$row['Course1_Sec']."</td></tr>";
}

$y = $row['Course2_ID'];
if($row['Course2_ID']!=NULL){
    $course_query2 = "SELECT NAME , SEM FROM COURSE WHERE CODE='$y'";
    
    $result_2 = mysqli_query($conn ,$course_query2);
    
    $row2 = mysqli_fetch_array($result_2);
    
   echo "<tr><td>".$row['Course2_ID']."</td><td>"."<a href=faculty_marks_page.php?course=".$row['Course2_ID']."&sem=".$row2['SEM']."&sec=".$row['Course2_Sec']."> ".$row2['NAME']."</a>"."</td><td>".$row2['SEM']."</td><td>".$row['Course2_Sec']."</td></tr>";
}

$z = $row['Course3_ID'];
if($row['Course3_ID']!=NULL){
    $course_query3 = "SELECT NAME , SEM FROM COURSE WHERE CODE='$z'";
    
    $result_3 = mysqli_query($conn ,$course_query3);
    
    $row3 = mysqli_fetch_array($result_3);
    
    echo "<tr><td>".$row['Course3_ID']."</td><td>"."<a href=faculty_marks_page.php?course=".$row['Course3_ID']."&sem=".$row3['SEM']."&sec=".$row['Course3_Sec']."> ".$row3['NAME']."</a>"."</td><td>".$row3['SEM']."</td><td>".$row['Course3_Sec']."</td></tr>";
}
   

echo "</table>"; 
mysqli_close($conn); 
}

else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}


?>