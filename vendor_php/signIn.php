<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../vendor_css/common.css">
    <link rel="stylesheet" href="../vendor_css/signIn.css">
</head>

<body>
    <!-- Header -->
    <?php
    include '../customer_html/header.php';
    ?>
    <!-- Log in -->
    <section id="vendorIn">
        <div class="bgcc">
        <form>
            <h1>SIGN IN</h1>
            <input type="text" placeholder="Username">
            <input type="text" placeholder="Password">
            <button type="submit">SIGN IN</button>
            <div >
                <input type="checkbox" placeholder="me" name="chkbx">
                <label for="chkbx">Remember me</label>
            </div>
            <div class="ntrmbr">
                <p>Not a Member Yet?</p>
                <a href="signUp.php">Sign Up Now</a>
            </div>
        </form>
        </div>
    </section>
    <hr>
    <!-- Who we are -->
    <?php
    include '../customer_html/whoWeAre.php';
    ?>

    <!-- Footer -->
    <?php
    include 'venFooter.php';
    ?>

</body>

</html>