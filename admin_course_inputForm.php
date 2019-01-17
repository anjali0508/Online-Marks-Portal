<?php
session_start();
if (!isset($_SESSION['logged_in'])){
 header("Location: http://localhost/project/login.php");
} 
?>

<html>
     <head>
         <title>Student Input Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin_design.css">
    <link rel="stylesheet" type="text/css" href="admin_course_design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
        <script>
            function checkname(x)
            {
                var name1=document.getElementById('name');
                var pos=x.value.search(/^[A-Za-z]+$/);
                if(pos!=0)
                    {
                    dom=document.getElementById('errorname');
                        dom.innerHTML="It can only contain alphabets and spaces";
                       
                       x.value = ""; document.getElementById('name').focus();
                        x.select();
                        return false;
                    }
                else{
                    
                    dom.innerHTML="";
                    return true;
                }
            }
            function checkcode(x)
            {
                var code1=document.getElementById('code');
                var pos=code1.value.search(/^[A-Z0-9]+$/);
                if(pos!=0)
                    {
                    dom=document.getElementById('errorcode')
                        dom.innerHTML="It can only contain alphabets and numbers";
                        x.value="";
                        x.focus();
                        x.select();
                        return false;
                    }
                else{
                    
                    dom.innerHTML="";
                    return true;
            }
            }
        </script>
    
    </head>
   <body>
       <div id="fixed">
    <ul>
    <li><a href="logout.php">Log Out</a></li>
    <li><a href="admin_home.php">Home</a></li>
    </ul>
    </div>
    <div class="header">
    <img src="BMS_College_of_Engineering.svg" class="logo"/>
    <h1>BMSCE<br/>
    DEPARTMENT OF COMPUTER SCIENCE</h1>
    </div>
       
       <?php include("databaseconn.php"); ?>
       
       <div class="input_form">
        <form action="ad_courseinput_query.php" method="POST">
            <div class="title">COURSE ADDITION</div>
            <table class="input_table">
            <tr>
                       <td>COURSE NAME<sup>*</sup></td>
                       <td><input type="text" name="coursename" id="name" onchange="checkname(this);" required><span class=error></span></td>
                       <td><span class="error" id="errorname"></span></td>
                   </tr>
                   <tr>
                       <td>COURSE CODE<sup>*</sup></td> 
                       <td><input type="text" name="code" id="code" onchange="checkcode(this);" required/><span class=error></span></td>
                           <td><span class="error" id="errorcode"></span></td>
                   </tr>
                   <tr>
                       <td>CREDITS<sup>*</sup><span class=error></span></td>
                       <td><select name='credits' required>
                           <option val='3'>3</option>
                           <option val='4'>4</option>
                           <option val='5'>5</option>
                           <option val='6'>6</option>
                        </select></td>
                   </tr>
                   <tr>
                       <td>SEMESTER<sup>*</sup><span class=error></span></td>     
                       <td>  THIRD
                           <input type="radio" value="3" name="sem" required/>
                           FIFTH
                           <input type="radio" value="5" name="sem"/>
                           SEVENTH
                           <input type="radio" value="7" name="sem"/>
                       </td>
                   </tr>
                   <tr>
                       <td>FACULTY<sup>*</sup><span class=error></span></td>
                   <td>Section-A
                   <select name='fac1' required>
                    <?php
                    $sql = "SELECT NAME FROM faculty";
                    $result = mysqli_query($conn,$sql);
                    echo '<option value="">NONE</option>';
                    while ( $row = mysqli_fetch_array($result) ){
                        $x=$row['NAME'];
                        echo "<option value='$x'>$x</option>";
                    }
                    ?>
                       </select>
                       <br/>
                    Section-B
                   <select name='fac2' required>
                    <?php
                    $sql = "SELECT NAME FROM faculty";
                    $result = mysqli_query($conn,$sql);
                    echo '<option value="">NONE</option>';
                    while ( $row = mysqli_fetch_array($result) ){
                        $x=$row['NAME'];
                        echo "<option value='$x'>$x</option>";
                    }
                    ?>
                    </select>
                       <br/>
                   Section-C
                   <select name='fac3' required>
                    <?php
                    $sql = "SELECT NAME FROM faculty";
                    $result = mysqli_query($conn,$sql);
                    echo '<option value="">NONE</option>';
                    while ( $row = mysqli_fetch_array($result) ){
                        $x=$row['NAME'];
                        echo "<option value='$x'>$x</option>";
                    }
                    ?>
                    </select>
                       </td>
                   </tr>
                   <tr>
                       <td>QUIZ-1<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="q1" required/>NO<input type="radio" value="0" name="q1"   required/></td>
                   </tr>
                   <br/>
                   <tr><td>QUIZ-2<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="q2" required/>NO<input type="radio" value="0" name="q2" required/></td>
                   </tr>
                   <tr>
                       <td>TEST-1<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="t1" required/>NO<input type="radio" value="0" name="t1"/></td>
                   <tr/>
                   <tr>
                       <td>TEST-2<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="t2" required/>NO<input type="radio" value="0" name="t2"/></td>
                   <tr/>
                   <tr>
                       <td>LAB-1<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="l1" required/>NO<input type="radio" value="0" name="l1"/></td>
                   <tr/>
                   <tr>
                       <td>LAB-2<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="l2" required/>NO<input type="radio" value="0" name="l2"/></td>
                   <tr/>
                   <tr>
                       <td>PROJECT<sup>*</sup><span class=error></span></td>
                       <td>YES<input type="radio" value="1" name="p" required/>NO<input type="radio" value="0" name="p"/></td>
                   <tr/>
            </table>
            <input type="submit" value="SUBMIT"/>
    
           
           </form>
       </div>
    </body>
</html>