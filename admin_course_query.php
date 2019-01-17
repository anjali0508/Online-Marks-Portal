<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {


$query = "SELECT * FROM course;";  
$result = mysqli_query($conn,$query);
echo "<table border>"; 
    
echo "<tr><th>Course Code</th><th>Course Name</th><th>Sem</th><th>Credits</th><th>Quiz 1</th><th>Quiz 2</th><th>Test 1</th><th>Test 2</th><th>Lab 1</th><th>Lab 2</th><th>Project</th><th>SECTION A</th><th>SECTION B</th><th>SECTION C</th></tr>";
while($row = mysqli_fetch_array($result)){ 


    echo "<tr><td>" . $row['CODE'] . "</td><td>" . $row['NAME'] . "</td><td>"  . $row['SEM'] . "</td><td>" . $row['CREDITS'] . "</td><td>" ;
    if($row['QUIZ1']!=0)
        echo "&#10004;</td><td>";
    else
        echo "&times;</td><td>";
    
    if($row['QUIZ2']!=0)
        echo "&#10004;</td><td>";
    else
        echo "&times;</td><td>";
    
    if($row['TEST1']!=0)
        echo "&#10004;</td><td>";
    else
        echo "&times;</td><td>";
    
    if($row['TEST2']!=0)
        echo "&#10004;</td><td>";
    else
        echo "&times;</td><td>";
    
    if($row['LAB1']!=0)
        echo "&#10004;</td><td>";
    else
        echo "&times;</td><td>";
    
    if($row['LAB2']!=0)
        echo "&#10004;</td><td>";
    else
        echo "&times;</td><td>";
    
    if($row['PROJECT']!=0)
        echo "&#10004;</td>";
    else
        echo "&times;</td>";
    
    echo "<td>".$row['SEC_A_FAC']."</td>";
    echo "<td>".$row['SEC_B_FAC']."</td>";
    echo "<td>".$row['SEC_C_FAC']."</td>";

    echo "</tr>";
    echo "</tr>";
      
}

    
echo "</table>";
    mysqli_close($conn); 
}

else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}





?>