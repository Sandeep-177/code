<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="customer_css/styles.css">
    <link rel="stylesheet" href="customer_css/order.css">
</head>

<body>
    <!-- Header -->
    <?php
    include 'header.php';
    ?>
    
    <!-- Order Form -->
    <section id="ord1">
        <h1>place your order</h1>
    <div id="loca">
        <form id="order1" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div>
                    <label for="category">Category:</label>
                    <button id="orderHidButn">Category Description</button>
                </div>
                <input type="text" name="category">
                <label for="subCategory"> SubCategory:</label>
                <input type="text" name="subCategory">
                <label for="fullName">FullName:</label>
                <input type="text" name="fullName">
                <label for="emailId">EmailId:</label>
                <input type="text" name="emailId">
                <label for="contactNo">ContactNo.:</label>
                <input type="text" name="contactNo">
            <div>
                <!-- <span> -->
                    <label for="location1">Location:</label>
                    <select name="location" id="location1">
                        <option value="SELECT" selected disabled>SELECT</option>
                        <option value="hSaheed Nagar">Saheed Nagar</option>
                        <option value="VSS Nagar">VSS Nagar</option>
                        <option value="Satya Nagar">Satya Nagar</option>
                    </select>
                <!-- </span> -->
            </div>
                <label for="address">Address:</label>
                <input type="text" name="address">
                <label for="landmark">Landmark:</label>
                <input type="text" name="landmark">
                <label for="visitCharge">VisitingCharge:</label>
                <input type="text" name="visitCharge">
                <label for="serviceCharge">ServiceCharge:</label>
                <input type="text" name="serviceCharge">
                <button id="orderButn" name="orderButnN">SUBMIT</button>
                <!-- <input type="submit" name="orderButnN" placeholder="submit"> -->
            </form>
            <?php
            if(isset($_POST['orderButnN'])){
                $category=$_POST['category'];
                $subCategory=$_POST['subCategory'];
                $fullName=$_POST['fullName'];
                $emailId=$_POST['emailId'];
                $contactNo=$_POST['contactNo'];
                $location=$_POST['location'];
                $address=$_POST['address'];
                $landmark=$_POST['landmark'];
                $visitCharge=$_POST['visitCharge'];
                $serviceCharge=$_POST['serviceCharge'];
                // echo "$location";
            };
            $conn=mysqli_connect('localhost','root','','hello');
            if(isset($conn)){
                echo "connection successful";
            }else{
                die("connection failed");
            };
            $query="INSERT_INTO Students ("
            ?>
        <div id="para">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam tenetur nostrum velit autem nesciunt
                impedit, soluta ratione iure ipsum, dicta nemo quisquam consequuntur, explicabo maxime sequi sunt
                voluptate temporibus ipsam fugit optio magni repellendus? Repudiandae incidunt recusandae veritatis
                corrupti vel assumenda cum, amet numquam ullam doloribus delectus, doloremque placeat libero pariatur
                voluptates aliquam nostrum veniam distinctio, maiores aspernatur voluptatem. Voluptates consequatur,
                velit at nobis ipsum culpa et omnis similique doloremque quidem iste magnam aspernatur optio. Voluptas
                error consequuntur accusantium deserunt alias. Voluptatibus vel veritatis est rerum eligendi sapiente,
                ad, commodi ex ducimus tempore necessitatibus velit natus, suscipit modi? Deleniti, consequuntur!
            </p>
        </div>
        </div>
        <!-- <input type="email" id="email" name="email" placeholder="Enter your email" required> -->
        <!-- <label for="email">Email Address:</label> -->
    </section>
    <hr>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
    <script src="customer_php/order.js"></script>
</body>

</html>