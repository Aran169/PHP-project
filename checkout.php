<?php
session_start();
include './navbar.php';
if (empty($_SESSION['cart'])) {
    header("Location: cart.php"); 
    exit;
}
$address = '';
$payment_method = '';
$success_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['address']) && isset($_POST['payment_method'])) {
        $address = $_POST['address'];
        $payment_method = $_POST['payment_method'];
        unset($_SESSION['cart']);
        $success_message = "Your order has been placed successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Checkout</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Checkout</h1>
        <?php if ($success_message): ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="address">Shipping Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required><?php echo htmlspecialchars($address); ?></textarea>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="" disabled <?php echo $payment_method ? '' : 'selected'; ?>>Select a payment method</option>
                    <option value="credit_card" <?php echo $payment_method === 'credit_card' ? 'selected' : ''; ?>>Credit Card</option>
                    <option value="cod" <?php echo $payment_method === 'cod' ? 'selected' : ''; ?>>COD</option>
                    <option value="bank_transfer" <?php echo $payment_method === 'bank_transfer' ? 'selected' : ''; ?>>Bank Transfer</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/
