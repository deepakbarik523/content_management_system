<?php 
include("header.php");

$header="Please Provide Your Details Here";
$con= mysqli_connect('localhost','root','','loginpage');

if(isset($_POST['submit'])){
    $uname=$_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];

    
    $sql="insert into details (uname,age,gender,city,pincode) VALUES ('$uname','$age','$gender','$city','$pincode')";
    $exec=mysqli_query($con,$sql);
    if($exec){
       header("Location:login.php");
    }else{
        header("Location:https://www.google.com");
    }
}


?>   

            <div id="article">
              <h1><?php echo $header ?> </h1>
                <form action="index.php" method="POST">
                    <input type="text" name="name" placeholder="Enter your name"><br>
                    <input type="text" name="age" placeholder="Enter your age">
                    <input type="text" name="gender" placeholder="Enter your gender">
                    <input type="text" name="city" placeholder="Enter your city">
                    <input type="text" name="pincode" placeholder="Enter your city pincode">
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>

            <div id="sidebar">
                
                <ul>
                    <li><a class="active" href="index.php">Details</a></li>
                    <li><a href="dashboard.php">About</a></li>
                    <li><a href="#">More</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
                
                
            </div>

            <?php 
            include("footer.php");
            ?>