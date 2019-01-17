<?php
session_start();
if (!isset($_SESSION['logged_in'])){
 header("Location: http://localhost/project/login.php");
} 
?>
<html>
    <head>
         <title>Faculty Input Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin_design.css">
    <link rel="stylesheet" type="text/css" href="admin_form_design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
        <script>
            function checkname()
            {
                var name1=document.getElementById('name');
                var pos=name1.value.search(/^[A-Za-z]+$/);
                if(pos!=0)
                    {
                    dom=document.getElementById('errorname')
                        dom.innerHTML="It can only contain alphabets and spaces";
                        name1.value="";
                        name1.focus();
                        name1.select();
                        return false;
                    }
                else{
                    dom.innerHTML="";
                    return true;
                }
            }
            function checkid()
            {
                var id1=document.getElementById('id');
                var pos=id1.value.search(/^[A-Z0-9]+$/);
                if(pos!=0)
                    {
                    dom=document.getElementById('errorid');
                        dom.innerHTML="It can only contain alphabets and numbers";
                        id1.value="";
                        id1.focus();
                        id1.select();
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
                if(pass1.value.length<=8)
                    {
                        dom=document.getElementById('errorpass');
                        dom.innerHTML='Minimum 8 character password';
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
 
    <div class="faculty_input_form">
        <form action="ad_facultyinput_query.php" method="POST">
        <div class="title">FACULTY REGISTRATION</div>
            <table class="faculty_input_table">
            <tr>
                <td>NAME<sup>*</sup></td>
                <td><input type="text" name="name" onchange="checkname();" id="name"  required/><span class=error></span></td>
                <td><span id="errorname"></span></td>
                <td></td>
            </tr>
            <tr>
                <td>ID<sup>*</sup></td>
                <td><input type="text" name="id" id="id" onchange="checkid();" required/><span class=error></span></td>
                <td><span id="errorid"></span></td>
                <td></td>
            </tr>
            <tr>
                <td>PASSWORD<sup>*</sup></td>
                <td><input type="text" name="pass" id="pass" onchange="checkpass();" required/><span class=error></span></td>
                <td><span id="errorpass"></span></td>
                <td></td>
            </tr>
            </table>
            <input type="submit" value="SUBMIT" />
        </form>
    
          
    
    
    <form action="admin_faculty_delete.php" method="post">
        <label for="id"> Enter Faculty ID to delete: 
        <input type=text name='code'/>
        </label>
        
        <input type="submit" value="Delete"/>
    
    </form>
        
    
        </body>
    
</html>

            
        