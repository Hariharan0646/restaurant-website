<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://www.fontainebleaulasvegas.com/uploads/2024/02/Restaurant-Grid_desktop%E2%80%93Dons.png');
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}
.reservation-form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(8, 8, 8, 0);
    color:white;
    background:transparent;
}

.reservation-form label {
    display: block;
    margin: 10px 0 5px;
}
.reservation-form input, .reservation-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.reservation-form button {
    background: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
footer
 {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
 }
</style>
</head>
<body>
    <header>
    <nav>
        <div class="logo">Gourmet Delight</div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="Reservation.php">Reservation</a></li>
        </ul>
    </nav>
    </header>
    <section class="reservation-form">
        <h2>Make a Reservation</h2>
        <form action="process_reservation.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>
            
            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" required>
            
            <label for="message">Special Requests:</label>
            <textarea id="message" name="message"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2023 Gourmet Delight. All rights reserved.</p>
    </footer>
</body>
</html>