<!-- booking.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>
<header>
        
    <a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="Contacts.php">Contact Us</a>
    <a href="login.php">Login</a>
    <a href="booking.php">Booking</a>
    <a href="payment.php">Payment</a>
    <a href="register.php">Register</a>

</header>
    
    <section class="booking">
        <h1>Booking</h1>
        <form>
            <label for="car-model">Car Model:</label>
            <select id="car-model" name="car-model">
                <option value="">Select Car Model</option>
                <option value="Toyota Camry">Toyota Camry</option>
                <option value="Honda Civic">Honda Civic</option>
                <option value="Ford Mustang">Ford Mustang</option>
            </select><br><br>
            <label for="pickup-date">Pickup Date:</label>
            <input type="date" id="pickup-date" name="pickup-date"><br><br>
            <label for="return-date">Return Date:</label>
            <input type="date" id="return-date" name="return-date"><br><br>
            <button type="submit">Book Now</button>
        </form>
    </section>
</body>
</html>