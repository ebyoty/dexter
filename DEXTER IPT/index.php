<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['customerName'])) {
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $orderDetails = $_POST['orderDetails'];

    $sql = "INSERT INTO orders (customer_name, customer_email, order_details) VALUES ('$customerName', '$customerEmail', '$orderDetails')";
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCJ Coffee Shop</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Welcome to DCJ Coffee Shop</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#order">Order</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section id="home">
        <h2>Home</h2>
        <p>Enjoy the best coffee in DCJ Coffee!</p>
    </section>
    <section id="menu">
        <h2>Our Menu</h2>
        <ul>
            <li>Espresso</li>
            <li>Cappuccino</li>
            <li>Latte</li>
            <li>Americano</li>
            <li>Macchiato</li>
            <li>Flat White</li>
        </ul>
    </section>
    <section id="order">
        <h2>Order Your Coffee</h2>
        <div id="drinksGallery">
            <!-- Coffee items with pictures -->
            <div class="drinkItem">
                <img src="https://th.bing.com/th/id/OIP.-fN7-Y36OOQxV-zlueT-pgHaGQ?rs=1&pid=ImgDetMain" alt="Espresso">
                <p>Espresso</p>
                <button class="orderButton" data-drink="Espresso">Order</button>
            </div>
            <div class="drinkItem">
                <img src="https://th.bing.com/th/id/OIP.sORUCLQs6IFavbrcEWRPgAHaE8?rs=1&pid=ImgDetMain" alt="Cappuccino">
                <p>Cappuccino</p>
                <button class="orderButton" data-drink="Cappuccino">Order</button>
            </div>
            <div class="drinkItem">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Perfect_caffe_latte_from_Cafe_Coffee_Day.jpg" alt="Latte">
                <p>Latte</p>
                <button class="orderButton" data-drink="Latte">Order</button>
            </div>
            <div class="drinkItem">
                <img src="https://th.bing.com/th/id/OIP.BSP4bZJ0kWXLzrBgU_L0IQHaE8?rs=1&pid=ImgDetMain" alt="Americano">
                <p>Americano</p>
                <button class="orderButton" data-drink="Americano">Order</button>
            </div>
            <div class="drinkItem">
                <img src="https://topicimages.mrowl.com/large/prithvi_c/coffee/typesofcoffee/caff_macchiato_1.jpg" alt="Macchiato">
                <p>Macchiato</p>
                <button class="orderButton" data-drink="Macchiato">Order</button>
            </div>
            <div class="drinkItem">
                <img src="https://d2lswn7b0fl4u2.cloudfront.net/photos/pg-a-cup-of-flat-white-coffee-1630845655.jpg" alt="Flat White">
                <p>Flat White</p>
                <button class="orderButton" data-drink="Flat White">Order</button>
            </div>
        </div>

       
        <ul id="orderList">
        <h3>Your Order</h3>
            <!-- Order items will appear here -->
        </ul>

        <form id="orderForm" action="index.php" method="POST">
            <input type="hidden" id="orderDetails" name="orderDetails">
            <label for="customerName">Name:</label>
            <input type="text" id="customerName" name="customerName" required>
            
            <label for="customerEmail">Email:</label>
            <input type="email" id="customerEmail" name="customerEmail" required>
            
            <button type="submit">Place Order</button>
        </form>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm" action="index.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Send</button></br>
            <br></br>
        </form>
    </section>
    <footer>
        <p>&copy; 2024 DCJ Coffee Shop. All rights reserved.</p>
    </footer>
</body>
</html>
