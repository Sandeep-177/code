<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin_css/commonAdmincss.css">
    <link rel="stylesheet" href="../admin_css/customerOrders.css">
</head>
<body>
    <!-- Header -->
    <?php
    include 'adminHeader.php';
    ?>

    <!-- content -->
    <div class="parent" id="coParent1">
        <h3 style="color: rgb(250, 101, 101);">CUSTOMER ORDERS</h3>
        <div class="pDiv" style="height: 3px; width:auto; background-color: rgb(250, 101, 101);"></div>
        <div class="pDiv2" style="height: 1px; width:auto; background-color: rgb(227,233,227);"></div>
        <div class="pDiv2" style="height: 1px; width:auto; background-color: rgb(227,233,227);"></div>

        <!-- <hr>
        <hr> -->
    
     <!-- table database div -->
     <div class="divFist tble">
        <!-- <p class="fist" style="background-color: rgb(227, 233, 227);">Manage Categories</p> -->
        <table border="1">
            <tr>
                <th>Order id</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Location</th>
                <th>Address</th>
                <th>Customer Name</th>
                <th>Email id</th>
                <th>Contact No.</th>
                <th>Order date</th>
                <th>Vendor Name</th>
                <th>Vendor Phone No.</th>
                <th>Order Status</th>
            </tr>
        </table>
     </div>
     </div>

    <!-- Footer -->
    <?php
    include 'adminFooter.php';
    ?>
    
</body>
</html>