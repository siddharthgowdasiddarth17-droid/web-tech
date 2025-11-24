<?php
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $plan = htmlspecialchars($_POST['plan']);

    $success = "🎉 Thank you, $name! Your membership for the $plan plan has been submitted.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FitLife Membership</title>

<style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:Poppins, sans-serif; }

    body { background:#111; color:white; }

    /* NAVBAR */
    nav {
        display:flex; justify-content:space-between; align-items:center;
        padding:20px 60px;
        background:rgba(255,255,255,0.05);
        backdrop-filter:blur(12px);
        position:sticky; top:0;
    }

    nav .logo { font-size:32px; font-weight:700; color:#00f5a0; }
    nav ul { display:flex; list-style:none; }
    nav ul li { margin-left:25px; }
    nav ul li a { color:white; text-decoration:none; transition:.3s; }
    nav ul li a:hover { color:#00f5a0; }

    /* FORM BOX */
    .membership-container {
        width:45%; margin:60px auto;
        background:rgba(255,255,255,0.06);
        padding:40px; border-radius:18px;
        border:2px solid rgba(255,255,255,0.2);
        backdrop-filter:blur(10px);
    }

    .section-title { text-align:center; margin-bottom:25px; font-size:32px; }

    .membership-form input,
    .membership-form select {
        width:100%; padding:14px;
        background:rgba(255,255,255,0.08);
        border:none; border-radius:10px;
        margin-bottom:18px; 
        color:#fff; font-size:16px;
    }

    .membership-form input::placeholder { color:#bbb; }

    .btn {
        width:100%; padding:14px;
        background:#00f5a0; color:black;
        border:none; border-radius:10px;
        font-size:17px; font-weight:bold;
        cursor:pointer; transition:.3s;
    }

    .btn:hover { background:#00d48c; }

    /* SUCCESS MESSAGE */
    .success-msg {
        background:#00f5a044;
        padding:12px;
        border-left:4px solid #00f5a0;
        margin-bottom:20px;
        border-radius:5px;
        text-align:center;
        font-weight:500;
    }

    @media(max-width:768px){
        .membership-container { width:85%; }
        nav { padding:15px 25px; }
    }
</style>

</head>
<body>

<!-- NAVIGATION -->
<nav>
  <h1 class="logo">FitLife</h1>
  <ul>
    <li><a href="index.html#home">Home</a></li>
    <li><a href="index.html#services">Services</a></li>
    <li><a href="index.html#trainers">Trainers</a></li>
    <li><a href="membership.php">Membership</a></li>
  </ul>
</nav>

<!-- MEMBERSHIP FORM -->
<div class="membership-container">

    <h2 class="section-title">Join Our Membership</h2>

    <?php if($success): ?>
        <p class="success-msg"><?= $success ?></p>
    <?php endif; ?>

    <form class="membership-form" method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <select name="plan" required>
            <option disabled selected>Select Membership Plan</option>
            <option value="Basic">Basic – ₹499 / month</option>
            <option value="Standard">Standard – ₹899 / month</option>
            <option value="Premium">Premium – ₹1299 / month</option>
        </select>

        <button type="submit" class="btn">Submit</button>
    </form>

</div>

</body>
</html>
