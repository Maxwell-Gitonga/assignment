<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="Contacts.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="displaydata.php">Display</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Find Your Dream Car</h1>
        <p>Search and book your favorite car today!</p>
        <button>Search Cars</button>
    </section>

    <!-- Search Section -->
    <section class="search">
        <h2>Search Cars</h2>
        <form>
            <label for="make">Make:</label>
            <select id="make" name="make">
                <option value="">Select Make</option>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Ford">Ford</option>
            </select>

            <label for="model">Model:</label>
            <select id="model" name="model">
                <option value="">Select Model</option>
                <option value="Camry">Camry</option>
                <option value="Civic">Civic</option>
                <option value="Mustang">Mustang</option>
            </select>

            <label for="year">Year:</label>
            <select id="year" name="year">
                <option value="">Select Year</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select>

            <button type="submit">Search</button>
        </form>
    </section>

    <!-- Car Listings Section -->
    <section class="car-listings">
        <h2>Car Listings</h2>
        <ul>
            <li>
                <img src="images/Mazda.jpeg" alt="Car 1">
                <h3>Toyota Camry 2020</h3>
                <p>Price: $25,000</p>
                <button>Book Now</button>
            </li>
            <li>
                <img src="images/honda.jpg" alt="Car 2">
                <h3>Honda Civic 2019</h3>
                <p>Price: $20,000</p>
                <button>Book Now</button>
            </li>
            <li>
                <img src="images/Nissan.jpeg" alt="Car 3">
                <h3>Ford Mustang 2018</h3>
                <p>Price: $30,000</p>
                <button>Book Now</button>
            </li>
        </ul>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2023 Car Booking Website</p>
    </footer>

</body>
</html>