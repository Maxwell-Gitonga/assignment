<!-- payment.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/payment.css">
</head>
<body>
    <header>
    <<a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="Contacts.php">Contact Us</a>
    <a href="login.php">Login</a>
    <a href="booking.php">Booking</a>
    <a href="payment.php">Payment</a>
    <a href="register.php">Register</a>
</header>
    
    <section class="payment">
        <h1>Payment</h1>
        <form>
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number"><br><br>
            <label for="expiration-date">Expiration Date:</label>
            <input type="date" id="expiration-date" name="expiration-date"><br><br>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv"><br><br>
            <button type="submit">Make Payment</button>
        </form>
    </section>
</body>
</html>