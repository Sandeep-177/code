<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="/code/customer_css/styles.css">
    <link rel="stylesheet" href="/code/customer_css/category.css">
</head>

<body>
    <!-- Header -->
    <?php
    include '../customer_php/header.php';
    ?>

    <!-- Service Category -->
    <section id="category">
        <h2>SUB CATEGORY</h2>
        <div class="category-cards">
        <div class="catCard" style=" background-image: url('/code/images/ac-installtion.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>AC Installation</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/AC-Repair.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>AC Repair</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/ac-maintainance2.jpeg'); background-size: cover;">
            <div class="tryi">
                <h3>AC Maintenance</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
    </div>
    </section>

    <!-- Footer -->
    <?php
    include '../customer_php/footer.php';
    ?>
    <script src="subCategory.js"></script>
</body>

</html>