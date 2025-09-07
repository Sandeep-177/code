<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="/code/vendor_css/common.css">
    <link rel="stylesheet" href="/code/vendor_css/editProfile.css">
</head>

<body>
    <!-- Header -->
    <?php
    include 'venHeader.php';
    ?>
    <!-- Sign up -->
    <section id="editP">
        <div class="formsP">
            <div class="forms2P">
                <form id="ch-formP">
                    <h1>EDIT PROFILE</h1>
                    <label for="enter">Name:</label>
                    <input type="text" placeholder="Enter new Name">
                    <label for="enter">Shop Name:</label>
                    <input type="text" placeholder="Enter Shop Name">
                    <label for="enter">Contact No:</label>
                    <input type="text" placeholder="Enter Number">
                    <label for="enter">Email id:</label>
                    <input type="email" placeholder="Enter Email">
                    <label for="enter">Address:</label>
                    <input type="text" placeholder="Enter Address">
                    <button type="submit">UPDATE</button>
                </form>
            </div>
        </div>
    </section>

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