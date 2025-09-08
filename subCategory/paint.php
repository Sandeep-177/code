<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../customer_css/styles.css">
    <link rel="stylesheet" href="../customer_css/category.css">
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
        <div class="catCard" style=" background-image: url('../images/interior-paint.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>Interior Painting</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
        <div class="catCard" style=" background-image: url('../images/exterior-paint.jpg'); background-size: cover;">
            <div class="tryi">
                <h3>Exterior Painting</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <button class="catButton">Book Now</button>
            </div>
        </div>
        <div class="catCard" style=" background-image: url('../images/Waterproofing-Services.jpeg'); background-size: cover;">
            <div class="tryi">
                <h3>Waterproofing</h3>
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