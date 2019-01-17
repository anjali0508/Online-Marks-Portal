<?php

include("databaseconn.php");
session_start();
mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {
//pass values from previous page here
$course_code = $_GET['course'];
$sem = $_GET['sem'];
$sec = $_GET['sec'];


$query = "SELECT * FROM academic WHERE COURSE_ID='$course_code' AND SEM=$sem AND SEC='$sec'";

$result = mysqli_query($conn,$query);

echo "<div class=marks_table>";
    echo '<table>';

$head = "<tr><th>USN</th><th>NAME</th>";

$query1 = "SELECT * FROM course WHERE CODE='$course_code'";

$course =  mysqli_fetch_array(mysqli_query($conn,$query1));
if($course['QUIZ1']!=0)     $head.="<th>QUIZ 1</th>";
if($course['QUIZ2']!=0)     $head.="<th>QUIZ 2</th>";
if($course['TEST1']!=0)     $head.="<th>TEST 1</th>";
if($course['TEST2']!=0)     $head.="<th>TEST 2</th>";
if($course['LAB1']!=0)     $head.="<th>LAB 1</th>";
if($course['LAB2']!=0)     $head.="<th>LAB 2</th>";
if($course['PROJECT']!=0)     $head.="<th>PROJECT</th>";
$head.="</tr>";
echo $head;

while($row = mysqli_fetch_array($result)){
    $usn = $row['USN'];
    $query2 = "SELECT NAME FROM student WHERE USN='$usn'";
    $name =  mysqli_fetch_array(mysqli_query($conn,$query2));
    echo '<tr><td>'.$row['USN']."</td><td>".$name['NAME']."</td>";
    
if($course['QUIZ1']!=0)    echo "<td>".$row['QUIZ1']."</td>";
if($course['QUIZ2']!=0)     echo "<td>".$row['QUIZ2']."</td>";
if($course['TEST1']!=0)     echo "<td>".$row['TEST1']."</td>";
if($course['TEST2']!=0)     echo "<td>".$row['TEST2']."</td>";
if($course['LAB1']!=0)     echo "<td>".$row['LAB1']."</td>";
if($course['LAB2']!=0)     echo "<td>".$row['LAB2']."</td>";
if($course['PROJECT']!=0)     echo "<td>".$row['PROJECT']."</td>";
    
}

echo "</table>";
echo "<button> <a href=faculty_input_page.php?course=$course_code&sem=$sem&sec=$sec>Edit Marks</a></button>";
echo "</div>";
mysqli_close($conn);
}
else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}
?>