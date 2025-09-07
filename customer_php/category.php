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
    include 'header.php';
    ?>

    <!-- Service Category -->
    <section id="category">
        <h2>CATEGORY</h2>
        <div class="category-cards">
        <div class="catCard" style=" background-image: url('/code/images/plumbing.jpg'); background-size: cover;">
            <div id="plumb" data-new="0" class="tryi" >
                <h3>Plumbing Services</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/electrician.jpg'); background-size: cover;">
            <div id="electric" data-new="1" class="tryi">
                <h3>Electrical Services</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/wallpaint2.jpg'); background-size: cover;">
            <div id="paint" data-new="2" class="tryi">
                <h3>House Painting</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/cleaning-copy.jpeg'); background-size: cover;">
            <div id="clean" data-new="3" class="tryi">
                <h3>House Cleaning</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style="background-image: url('/code/images/pest-control.jpg'); background-size: cover;">
            <div id="pest" data-new="4" class="tryi">
                <h3>Pest Control</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/home-appliance-repair-service.jpg'); background-size: cover;">
            <div id="kitchen" data-new="5" class="tryi">
                <h3>Kitchen Appliances</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/laundry_appliances_copy2.jpg'); background-size: cover;">
            <div id="lundry" data-new="6" class="tryi">
                <h3>Lundry Appliances</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/ac_con.jpg'); background-size: cover;">
            <div id="ac" data-new="7" class="tryi">
                <h3>Air Conditioning</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/Photography-Videography-Services-copy.jpg'); background-size: cover;">
            <div id="photVideo" data-new="8" class="tryi">
                <h3>Photography & Videography</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/event-management2.jpg'); background-size: cover;">
            <div id="event" data-new="9" class="tryi">
                <h3>Event Management</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/asian-technician-repairing-smartphones-motherboard.jpg'); background-size: cover;">
            <div id="compMob" data-new="10" class="tryi">
                <h3>Computer & Mobile Services</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
        <div class="catCard" style=" background-image: url('/code/images/moving-shifting.jpg'); background-size: cover;">
            <div id="moveShift" data-new="11" class="tryi">
                <h3>Moving and Shifting</h3>
                <p>Get plumbing issues fixed quickly and efficiently.</p>
                <!-- <button>Book Now</button> -->
            </div>
        </div>
    </div>
    </section>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
    <script src="category.js"></script>
</body>

</html>