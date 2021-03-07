<?php

$con= mysqli_connect('localhost','root','','loginpage');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    
    $query = "SELECT * FROM register WHERE email = '$email'  AND passwd = '$passwd'";
	$exec = mysqli_query($con,$query);
	if ($foundAccount = mysqli_fetch_assoc($exec)) {
		
			session_start();
			$_SESSION['uname'] = $foundAccount['uname'];
			header("Location:index.php");
	}else {
		header("Location:https://www.google.com");
	}
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <link rel="stylesheet" href="prog.css">
</head>

<body>
    <header>
        <div class="login">
            <div class="form">
                <center>
                    <form action="login.php" method="post">
                        <img src="img/Screenshot%20(18).png" alt="" height="100px" width="auto"><br>
                        <label>EMAIL ID</label><br>
                        <input type="email" name="email" placeholder="write your mail"><br>
                        <label>PASSWORD</label><br>
                        <input type="password" name="passwd" placeholder="write your password"><br>
                        <input id="btn" type="submit" name="submit" value="login"> <br>
                        <a href="signup.php">signup</a>
                    </form>
                </center>

            </div>

        </div>
    </header>
</body>

</html>
