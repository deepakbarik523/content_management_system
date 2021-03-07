<?php 

include("header.php");

$header= 'dashboard.php';

$con= mysqli_connect('localhost','root','','loginpage');

if(isset($_POST['submit'])){
    $image = $_FILES['post-image']['name'];
    if(isset($image)){
    $imageDirectory = "imageupload" . basename($_FILES['post-image']['name']);
    $query = "INSERT INTO post (image) VALUES ('$image')";
		$exec = mysqli_query($con,$query);
		if ($exec) {
			move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
			header('Location:dashboard.php');
		}
        
    }else{
        header("Location:login.php");
    }

    }



?>   

            <div id="article">
              <h1><?php echo $header ?> </h1>
              <h3>Please upload your passphoto  </h3>
                <form action="dashboard.php" method="POST" enctype="multipart/form-data">
                    <input type="File" name="post-image"><br>
                    
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
            
                <div id="sidebar">
                
                <ul>
                    <li><a  href="index.php">Details</a></li>
                    <li><a class="active" href="dashboard.php">About</a></li>
                    <li><a href="#">More</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
                
                
            </div>


            <?php 
            include("footer1.php");
            ?>