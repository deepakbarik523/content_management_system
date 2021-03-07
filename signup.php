<?php

$con= mysqli_connect('localhost','root','','loginpage');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    
    $query = " insert into register (email,passwd) values ( '$email' , '$passwd' )";
	$exec = mysqli_query($con,$query);
	if ($exec) {
			header("Location:login.php");
	}else {
		header("Location:https://www.google.com");
	}
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup page</title>
    <link rel="stylesheet" href="prog.css">
</head>

<body>
    <header>
        <div class="login">
            <div class="form">
                <center>
                    <form action="signup.php" method="POST">
                        <img src="img/Screenshot%20(18).png" alt="" height="100px" width="auto"><br>
                        <label>EMAIL ID</label><br>
                        <input type="email" name="email" placeholder="write your mail"><br>
                        <label>PASSWORD</label><br>
                        <input type="password" name="passwd" placeholder="write your password"><br>
                        <input id="btn" type="submit" name="submit" value="signup"> <br>
                        <a href="login.php">login</a>
                    </form>
                </center>

            </div>

        </div>
    </header>
</body>

</html>
