<?php
include("databaseconn.php");
mysqli_select_db($conn,'wp project');
session_start();
if (isset($_SESSION['logged_in'])== true) {

//Getting all post values
$usn = $_POST['usn'];
$course_code = $_GET['code'];//passed in url
$sem = $_GET['sem'];
$sec = $_GET['sec'];
$counter = count($usn);
if(isset($_POST['q1']))
    $q1 = $_POST['q1'];
else $q1 = array_fill(0, $counter, 'NULL');//creating a null array if the array doesnt exist so that sql query execution is easy.
if(isset($_POST['q2']))
    $q2 = $_POST['q2'];
else $q2 = array_fill(0, $counter, 'NULL');
if(isset($_POST['t1']))
    $t1 = $_POST['t1'];
else $t1 = array_fill(0, $counter, 'NULL');
if(isset($_POST['t2']))
    $t2 = $_POST['t2'];
else $t2 = array_fill(0, $counter, 'NULL');
if(isset($_POST['lab1']))
    $lab1 = $_POST['lab1'];
else $lab1 = array_fill(0, $counter, 'NULL');
if(isset($_POST['lab2']))
    $lab2 = $_POST['lab2'];
else $lab2 = array_fill(0, $counter, 'NULL');
if(isset($_POST['pro']))
    $pro = $_POST['pro'];
else $pro = array_fill(0, $counter, 'NULL');


for($i=0;$i<$counter;$i++)
{
    $query = "UPDATE `academic` SET `QUIZ1` = $q1[$i] , `QUIZ2` = $q2[$i] , `TEST1` = $t1[$i] , `TEST2` = $t2[$i] , `LAB1` = $lab1[$i] , `LAB2` = $lab2[$i] , `PROJECT` = $pro[$i] WHERE USN = '$usn[$i]' AND COURSE_ID = '$course_code'";
    
    mysqli_query($conn ,$query);
    
} 

header("Location: http://localhost/project/faculty_marks_page.php?course=$course_code&sem=$sem&sec=$sec");
mysqli_close($conn);

}
else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}

?>