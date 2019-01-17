

<html>
<head>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
    <div class="loginbox">
        <img src="avatar-default-icon.png" class="avatar"/>
        <h1>LOGIN HERE</h1>
        <form action="login_backend.php" method="POST">
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="userpwd" placeholder="Enter Password">
        <br/><br/>
        <input type="submit" name="fac_login" id="fac_login" value="Faculty Login">
        <input type="submit" name="stu_login" id="stu_login" value="Student Login"/>
        <br/><br/>
        <a href="#">Forget Password</a>
        </form>
    
        
    </div>
</body>
</html>