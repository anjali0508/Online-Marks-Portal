<?php
session_start();
$username = $_SESSION['username'];

include('databaseconn.php');

if (isset($_SESSION['logged_in'])== true) {


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn,'wp project');

$query = "SELECT * FROM academic WHERE USN='$username';";  //MODIFY WHERE CLAUSE
$result = mysqli_query($conn,$query);

echo "<table>"; // start a table tag in the HTML

echo "<tr><th>Course Code</th><th>Course Name</th><th>Quiz 1</th><th>Quiz 2</th><th>Test 1</th><th>Test 2</th><th>Lab 1</th><th>Lab 2</th><th>Project</th></tr>";

while($row = mysqli_fetch_array($result)){ 
$query1 = "SELECT * FROM course WHERE CODE ='".$row['COURSE_ID']."'";
$course =  mysqli_fetch_array(mysqli_query($conn,$query1));
if($course['QUIZ1']==0)     $quiz1='NA';
else    $quiz1 = $row['QUIZ1'];
if($course['QUIZ2']==0)     $quiz2='NA';
else    $quiz2 = $row['QUIZ2'];
if($course['TEST1']==0)     $test1='NA';
else    $test1 = $row['TEST1'];
if($course['TEST2']==0)     $test2='NA';
else    $test2 = $row['TEST2'];
if($course['LAB1']==0)     $lab1='NA';
else    $lab1 = $row['LAB1'];
if($course['LAB2']==0)     $lab2='NA';
else    $lab2 = $row['LAB1'];
if($course['PROJECT']==0)     $project='NA';
else    $project = $row['PROJECT'];

    echo "<tr><td>" . $row['COURSE_ID'] . "</td><td>" . $course['NAME'] . "</td><td>"  . $quiz1 . "</td><td>" . $quiz2 . "</td><td>" . $test1 .  "</td><td>" . $test2 .  "</td><td>" . $lab1 .  "</td><td>" . $lab2 .  "</td><td>" . $project .  "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; 
mysqli_close($conn);
}

else
{
    mysqli_close($conn);
    header("Location: http://localhost/project/login.php");
    
}
 

?>