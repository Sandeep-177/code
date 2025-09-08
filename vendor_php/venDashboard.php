<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../vendor_css/common.css">
    <link rel="stylesheet" href="../vendor_css/venDashboard.css">
    <!-- <link rel="stylesheet" href="../customer_css/styles.css"> -->
</head>

<body>
    <!-- Header -->
    <?php
    include 'venHeader.php';
    ?>
    <!-- Vendor Dashboard -->
    <section>
    <!-- <div class="heading"><h1>Service Orders</h1></div> -->
        <!-- <div class="heading"><h1>VENDOR DASHBOARD</h1></div> -->
        <!-- <div class="card3">
            <div class="card3_1"><p>SERVICE ORDERS</p></div>
            <div class="card3_1"><p>EDIT PROFILE</p></div>
            <div class="card3_1"><p>CHANGE PASSWORD</p></div>
        </div> -->
        <?php
    // phpinfo();

    mysqli_report(MYSQLI_REPORT_OFF);
    error_reporting(E_ALL & ~E_WARNING);
    $conn=mysqli_connect('localhost','root','','student');
    // if(!$conn){
    //     die("connection failed: " . mysqli_connect_error());
    // }else{
    //     echo "connection successful";
    // }

    if (!$conn) {
        echo "<p style='color:red;'>⚠️ Database connection failed: " . mysqli_connect_error() . "</p>";
    } else {
        echo "<p style='color:green;'>✅ Connection successful</p>";
        mysqli_close($conn);
    }
    
    // mysqli_close($conn);
    // if ($conn) {
    //     mysqli_close($conn);
    // }
    
    ?>
    <h1>SERVICE ORDERS</h1>
    <table border=2 >
        <tr>
            <th>Complain No.</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Location</th>
            <th>Address</th>
            <th>Landmark</th>
            <th>Customer Name</th>
            <th>Email Id</th>
            <th>Contact No.</th>
            <th>Order Date</th>
            <th>Order Status</th>
            <th>Action</th>
        </tr>
        <!-- <tr>
            <td></td>
        </tr> -->
    </table>
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