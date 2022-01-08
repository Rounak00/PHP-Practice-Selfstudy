<?php
    
$insert=false;
if(isset($_POST['name'])){ 
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection error due to".mysqli_connect_error());

}

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$place=$_POST['place'];

$sqlq="INSERT INTO `travel'.'travel` ( `name`, `age`, `gender`, `email`, `phone`, `location`,`date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$place', current_timestamp())";


if(con->query($sql)==true){
   $insert=true;
}
else{
  
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
    <link rel="stylesheet" href="style.css">
    <title>Register Your Data</title>
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h3>Register Where you want to visit</h3>
        <p>Enter your details and submit this form to confirm your registration in the trip </p>
        
        <?php
          if($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting your form. </p>";
            }
        ?>
        
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <select name="place">
                <option value="London">London</option>
                <option value="Australia">Australia</option>
                <option value="Singapore">Singapore</option>
                <option value="Spain">Spain</option>
              </select>
            <button class="btn">Submit</button> 
        </form>
    </div>

<script src="index.js"></script>    
</body>
</html>
