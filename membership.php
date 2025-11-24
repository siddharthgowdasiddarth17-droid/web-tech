<?php
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $plan = htmlspecialchars($_POST['plan']);

    // Here you can add DB insert later
    // For now just show a success message
    $success = "🎉 Thank you, $name! Your membership ($plan plan) has been submitted.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitLife Membership</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAV -->
<nav>
  <h1 class="logo">FitLife</h1>
  <ul>
    <li><a href="index.html#home">Home</a></li>
    <li><a href="index.html#services">Services</a></li>
    <li><a href="index.html#trainers">Trainers</a></li>
    <li><a href="membership.php">Membership</a></li>
  </ul>
</nav>

<div class="membership-container">

    <h2 class="section-title">Join Our Membership</h2>

    <?php if($success): ?>
        <p class="success-msg"><?= $success ?></p>
    <?php endif; ?>

    <form class="membership-form" method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <select name="plan" required>
            <option value="" disabled selected>Select Membership Plan</option>
            <option value="Basic">Basic – ₹499 / month</option>
            <option value="Standard">Standard – ₹899 / month</option>
            <option value="Premium">Premium – ₹1299 / month</option>
        </select>

        <button type="submit" class="btn">Submit</button>
    </form>

</div>

</body>
</html>
