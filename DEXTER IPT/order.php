<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['customerName']);
    $email = htmlspecialchars($_POST['customerEmail']);
    $orderDetails = htmlspecialchars($_POST['orderDetails']);

    // Split the order details into readable format
    $orders = explode('|', $orderDetails);
    $orderList = '<ul>';
    foreach ($orders as $order) {
        list($quantity, $coffeeType) = explode(':', $order);
        $orderList .= "<li>$quantity x $coffeeType</li>";
    }
    $orderList .= '</ul>';

    // Process order data here (e.g., save to a database, send an email)
    // For this example, we'll just display a message.

    echo "<h1>Thank you, $name!</h1>";
    echo "<p>Your order has been placed and will be processed soon. We will contact you at $email for further details.</p>";
    echo "<p>Your order:</p>";
    echo $orderList;
    
}
?>