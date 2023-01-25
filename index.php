<?php
// REFER THE PHP NOTES WRITTEN IN SPIRALBOOK
if(isset($_POST['name']))
{
    $insert=false;
    $server = "localhost";
    $username= "root";
    $password= "";

    $con = mysqli_connect($server,$username ,$password);

    if(!$con)
    {
        die("connection failed due to". mysqli_connect_error());
    }
    // echo"sucessfully connected to db";

    $name= $_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $department=$_POST['department'];
    $sem=$_POST['sem'];
    $description=$_POST['description'];
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `department`, `sem`, `description`, `time`) 
    VALUES ('$name', '$age', '$email', '$department', '$sem', '$description', current_timestamp())";

    if($con->query($sql)==true)
    {
        // echo"sucessfully inserted";
        $insert=true;
    }
    else{
        echo"error: $sql $con->error";
    }
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
    <title>Travelform</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <img class="imagebg" src="https://cdn.pixabay.com/photo/2017/03/05/00/34/panorama-2117310__340.jpg" alt="travel image">
    <div class="container">
        <H1>
            Welcome to SCE Trip!!
        </H1>
        <h3>
            <a href="https://www.sapthagiri.edu.in/" target="blank">Sapthagiri College of Engineering</a>
        </h3>
        <p>Please fill the form to join the trip</p>
        
        <?php
        if($insert==true)
        {
         echo"<p class='msgsubmit'>Thank you for submitting the form, Your going to enjoy the trip!!</p>";
        }
        ?>

         </div><br>
    <div class="form1">
    <center>
            <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name"><br>
            <input type="text" name="age" id="age" placeholder="Enter your age"><br>
            <input type="email" name="email" id="email" placeholder="Enter your mail"><br>
            <input type="text" name="department" id="department" placeholder="Enter your department"><br>
            <input type="text" name="sem" id="sem" placeholder="Enter your semester"><br>
            <textarea name="description" id="description" cols="10" rows="5" placeholder="Enter any other details" >
            </textarea><br>
            <button class="button" type="submit">Submit</button>
            <button class="button" type="reset">Reset</button>
        </form>
    </center>
    </div>
    <script src="index.js"></script>
</body>
<footer class="foot">
    <p>Website by <a href="http://https://twitter.com/_Shyam_G">Shyam G</a> </p>
    </footer>

</html>


<!-- 
    NOTE::::
    WRITE THE HTML IN HTML AND DO THE DESIGNING WITH CSS
    THEN WRITE THE PHP AND PASTE THE HTML FILE TO THE PHP FILE
 -->