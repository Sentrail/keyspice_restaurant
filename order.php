<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email'] ?? '');
    $items = htmlspecialchars($_POST['items']);
    $payment = htmlspecialchars($_POST['payment']);

    $message = "New Takeaway Order!\n\nName: $name\nPhone: $phone\nEmail: $email\nItems:\n$items\nPayment: $payment";

    // Send email to restaurant (replace with your email)
    mail($business['email'], 'New Order from Website', $message, "From: $phone");

    // Optional: Send confirmation to customer if email provided
    if (!empty($email)) {
        mail($email, 'Order Received - Keyspice', "Thank you $name! We'll prepare your order soon. Contact us at {$business['phone']}.");
    }

    echo "<h2>Order Submitted Successfully!</h2><p>We'll contact you shortly on $phone. Thank you!</p>";
    echo '<a href="index.php">Back to Home</a>';
} else {
    header('Location: index.php');
}
?>