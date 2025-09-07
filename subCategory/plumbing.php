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
        <div class="catCard" style=" background-image: url('/code/images/leak-reapir.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>Leak Repairs</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/pipe-installation.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>Pipe Installation</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/Bathroom-Drain-Cleaning.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>Drain Cleaning</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton" onclick="alert('hello');">Book Now</button>
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