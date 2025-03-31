<?php 
ob_start();
session_start();

// Include the database connection file
include 'teachers-form-conn.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Firstname = $_POST["firstname"];
    $Lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone-no"];
    $Teachers_ID = $_POST["teacherID"];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $Address = $_POST["Address"];
    $present_class = $_POST["present-class"];

    // Insert user into the database
    $sql = "INSERT INTO teachers (First, Last, Email, Teacher, phone, Password, Address, Current) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $Firstname,$Lastname, $email, $Teachers_ID ,$phone_no, $password, $Address, $present_class);

    if ($stmt->execute()) {
         header('Location: login.php');;
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-up.css">
    <title>Sign up</title>
</head>
<body style="background-color: rgb(248, 248, 244);margin: 0;">
    <div class="logo-div"><img src="project pics/Logo.png" class="logo"></div>
    <div class="name"><h>GIBBORS HUB SCHOOLS</h></div>
    <div class="nav-bar">
        <ul class="ul">
        
            <li class="li a"><a  href="project1.php">Home</a> </li>
            <li class="li a"><a href="team.php">Meet the Team</a> </li>
            <li class="li a"><a href="E-portal.php">E-Portal</a> </li>
            <li class="li a"><a href="Gallery.php">Gallery</a> </li>
            <li class="li a"><a href="Activities">Activities</a> </li> 
            <li class="li a"><a href="#">Contact us</a> </li>   
  
        </ul>
    </div>
    <h2 class="teachers-heading ">
        Teachers Sign Up
    </h2>

    
    <div class="sign-up-container">
            <form  action="sign-up.php" method="POST">
 
                    <input type="text" class="sign-up-input-box  " name="firstname" placeholder="First Name" required>
                    <input type="text" class="sign-up-input-box " name="lastname" placeholder="Last Name" required>
                    <input type="email" class="sign-up-input-box " name="email" placeholder="Email" required>
                    <input type="text" class="sign-up-input-box " name="teacherID" placeholder="Teachers ID" required>
                    <input type="text" class="sign-up-input-box " name="phone-no" placeholder=" Telephone number" required>
                    <input type="Password" class="sign-up-input-box " name="password" placeholder="Password" required>
                    <input type="Password" class="sign-up-input-box " placeholder="Repeat Password" required>
                    <input type="text" class="sign-up-input-box " name="present-class" placeholder=" class presently teaching" required>
                    <input type="text" class="sign-up-input-box " name="Address" placeholder="Address" required>

                    <p class="Already-signup">Already have an account? <a href="login.php">Login here</a></p>
                    <input value="Register" type="submit" name="submit" class="register-btn">
                    
                
            </form> 
    </div>
 
    
</body>
</html>