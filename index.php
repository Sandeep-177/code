<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Home Service</title>
    <link rel="stylesheet" href="customer_css/styles.css">
</head>

<body>
    <!-- Header -->
    <?php
    include './customer_php/header.php';
    ?>

    <!-- Hero Section -->
    <section class="hero">
        <div id="pyellowPrnt">
        <p id="pyellow">
            HOW 
            <span class="pyellowSpan">CAN WE</span>
        </p>
        <p id="pyellow2">

        </p>
        </div>
        <div id="heroc">
            <p id="abou">About Us</p>
            <p>
                We provide reliable home services, including AC repairing, wall painting, plumbing, and more. Our
                skilled professionals ensure quality, timely solutions tailored to your needs, making your home
                maintenance hassle-free and convenient.
            </p>
            <a class="lernm" href="./customer_php/aboutUs.php">LEARN MORE</a>
        </div>
    </section>

     <!-- Services Section -->
     <section id="services">
        <h2>Popular Services</h2>
        <div class="service-cards">
            <div id="cardser" class="card" 
            style=" background-image: url('./images/cleaning-copy.jpeg'); background-size: cover;">
                <div id="clean" data-new="3" class="tryi">
                    <h3>House Cleaning</h3>
                    <p>Professional home cleaning for spotless spaces.</p>
                    <!-- <button>Book Now</button> -->
                </div>
            </div>
            <div class="card" style=" background-image: url('./images/electrician.jpg'); background-size: cover;">
                <div id="electric" data-new="1" class="tryi">
                    <h3>Electrician Services</h3>
                    <p>Expert electricians for repairs and installations.</p>
                    <!-- <button>Book Now</button> -->
                </div>
            </div>
            <div class="card" style=" background-image: url('./images/plumbing.jpg'); background-size: cover;">
                <div id="plumb" data-new="0" class="tryi">
                    <h3>Plumbing Services</h3>
                    <p>Get plumbing issues fixed quickly and efficiently.</p>
                    <!-- <button>Book Now</button> -->
                </div>
            </div>
            <div class="card" style=" background-image: url('./images/wallpaint2.jpg'); background-size: cover;">
                <div id="paint" data-new="2" class="tryi">
                    <h3>House Painting</h3>
                    <p>Upgrade your home with smart automation.</p>
                    <!-- <button>Book Now</button> -->
                </div>
            </div>
        </div>
        <div id="servicesBtnP"><button id="servicesBtn">All Services</button></div>
    </section>
    <hr>
    
    <!-- Who we are -->
    <?php
    include './customer_php/whoWeAre.php';
    ?>

    <!-- Footer -->
    <?php
    include './customer_php/footer.php';
    ?>
    <script src="./customer_php/category.js" defer></script>
    <!-- <script src="./customer_php/smScrnNav.js" defer></script> -->
    <script>
        document.getElementById("servicesBtnP").addEventListener('click',(event)=>{
            event.preventDefault();
            console.log("first");
            window.location.href="./customer_php/category.php";
            console.log('last');
        })
    </script>
    
</body>

</html>