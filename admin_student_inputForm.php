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
    <link rel="stylesheet" type="text/css" href="admin_form_design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    
        <script>
    
            function checkname()
            {
                var name1=document.getElementById('name');
                var pos=name1.value.search(/^[A-Za-z]+$/);
                dom=document.getElementById('errorname')
                if(pos!=0)
                    {
                        dom.innerHTML="Name can only contain alphabets and spaces";
                        name1.value="";
                        name1.select();
                        name1.focus();
                        return false;
                    }
                else{
                    dom.innerHTML="";
                    return true;
                }
            }
            function checkusn()
            {
                var usn1=document.getElementById('usn');
                var pos=usn1.value.search(/^\d[A-Z][A-Z]\d\dCS\d\d\d$/);
                if(pos!=0)
                    {
                    dom=document.getElementById('errorusn');
                        dom.innerHTML="USN should be in the format 1BMddCSddd. 'd' represents a digit.";
                        usn1.value="";
                        usn1.focus();
                        usn1.select();
                        return false;
                    }
                else{
                    dom.innerHTML="";
                    return true;
            }
            }
                function checkpass()
            {
                var pass1=document.getElementById('pass');
                if(pass1.value.length<8)
                    {
                        dom=document.getElementById('errorpass');
                        dom.innerHTML='Minimum 8 character password';
                        pass1.value="";
                        pass1.focus();
                        pass1.select();
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
        
       <div class="input_form">
        <form action="ad_studentinput_query.php" method="POST">
            <div class="title">STUDENT REGISTRATION</div>
            <table class="input_table">
            <tr>
                    <td>NAME<sup>*</sup></td>
                    <td><input type="text" name="name" id="name" required onchange="checkname();"/><span class=error></span></td>
                <td><span id="errorname" class="error"></span></td>
            </tr>
            <tr>
                <td>USN<sup>*</sup></td>
                <td><input required type="text" name="usn" id="usn" onchange="checkusn();"/><span class=error></span></td>
                <td><span id="errorusn" class="error"></span></td>
            </tr>
            <tr>
                <td>PASSWORD<sup>*</sup></td>
                <td><input type="text"  required name="pass" id="pass" onchange="checkpass();"/><span class=error></span></td>
                <td><span id="errorpass" class="error"></span></td>
            </tr>
                <tr>
                       <td>SEMESTER<span class=error><sup>*</sup></span></td>     
                        <td><input type="radio" value="3" name="sem" required/>THIRD
                            <input type="radio" value="5" name="sem"/>FIFTH
                            <input type="radio" value="7" name="sem"/>SEVENTH</td>
                   </tr>
            <tr>
                       <td>SECTION<span class=error><sup>*</sup></span></td>     
                       <td><input type="radio" value="A" name="sec" required/>A
                           <input type="radio" value="B" name="sec"/>B
                           <input type="radio" value="C" name="sec"/>C
                       </td>
                   </tr>
            </table>
                

            <input type="submit" value="SUBMIT" />
            
    
        </form>
        </div>
    </body>
</html>