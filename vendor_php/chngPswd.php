<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Password Update</title>
    <link rel="stylesheet" href="../vendor_css/common.css">
    <link rel="stylesheet" href="../vendor_css/chngPswd.css">
</head>

<body>
    <!-- Header -->
    <?php
    include 'venHeader.php';
    ?>
    <!-- Password Update Form -->
    <section id="vendorIn">
        <div class="bgcc">
        <form>
            <h1>CHANGE YOUR PASSWORD</h1>
            <input type="text" placeholder="old password">
            <input type="text" placeholder="new password">
            <input type="text" placeholder="confirm password">
            <button type="submit">CHANGE PASSWORD</button>
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