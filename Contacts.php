<?php

$id="id";
$fullname="fullname";
$email="email";
$phone="phone";
$address="address";

require_once ("php/db_connection.php"); 
if(isset($_POST['Send'])){
    $fullname = mysqli_real_escape_string($conn, ($_POST["fullname"]));
    $email = mysqli_real_escape_string($conn, ($_POST["email"]));
    $phone = mysqli_real_escape_string($conn, ($_POST["phone"]));
    $address = mysqli_real_escape_string($conn, ($_POST["address"]));
    //$message = mysqli_real_escape_string($conn, ($_POST["message"]));
}

$sql = "INSERT IGNORE INTO registration (fullname,email,phone,address)
VALUES('$fullname','$email','$phone','$address')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   //header("location:displaydata.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contacts.css">
</head>
<body>

    <a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="Contacts.php">Contact Us</a>
    <a href="login.php">Login</a>
    <a href="booking.php">Booking</a>
    <a href="payment.php">Payment</a>
    <a href="register.php">Register</a>


    <button>HELP</button>
    
    <h1>NEED SOME HELP</h1>
    <main>
            <section class="contact-us">
                <h1>Contact Us</h1>
                <p>We are here to assist you. Please fill out the form below and we will get back to you shortly.</p>
                <form  method = "POST">
        <h2 style="color:white">Send us a message</h2>
        <div class="inputBox">
            <input type="text" name="fullname" required="required">
            <span style="color:white">Full Name</span>
        </div>
        <div class="inputBox">
            <input type="text" name="email" required="required">
            <span style="color:white">Email</span>
        </div>
        <div class="inputBox">
            <input type="text" name="phone" required="required">
            <span style="color:white">Phone</span>
        </div>
        <div class="inputBox">
            <input type="text" name="address" required="required">
            <span style="color:white">Address</span>
        </div>
        <div class="inputBox">
            <input type="submit" name="Send"  value="Send">
            
        </div>

    </form>

            </section>
        </main>
</body>
</html>