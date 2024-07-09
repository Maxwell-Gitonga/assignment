<!-- register.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <header>
    <a href="index.php">Home</a>
    <a href="aboutus.html">About Us</a>
    <a href="Contacts.html">Contact Us</a>
    <a href="login.php">Login</a>
    <a href="booking.html">Booking</a>
    <a href="payment.php">Payment</a>
    <a href="register.php">Register</a>
</header>  
    <section class="register">
        <h1>Register</h1>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password"><br><br>
            <button type="submit">Register</button>
        </form>
    </section>
</body>
</html>