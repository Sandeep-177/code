<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin_css/commonAdmincss.css">
    <link rel="stylesheet" href="../admin_css/changePassword.css">
</head>

<body>
    <!-- Header -->
    <?php
    include 'adminHeader.php';
    ?>

    <!-- Content -->
    <div class="parent" id="parent1">
        <h3 style="color: rgb(250, 101, 101);">DASHBOARD</h3>
        <div class="pDiv" style="height: 3px; width:auto; background-color: rgb(250, 101, 101);"></div>
        <div class="childDiv">
            <form>
                <h4>Change Password:</h4>
                <label for="oldP">Old Password:</label>
                <input type="text" name="oldP">
                <label for="newP">New Password:</label>
                <input type="text" name="newP">
                <label for="confP">Confirm Password:</label>
                <input type="text" name="confP">
                <div class="chilD" style="height: 1px; background-color: rgb(227,233,227);"></div>
                <button type="submit">change password</button>
            </form>
        </div>
</div>

    <!-- Footer -->
     <?php
     include 'adminFooter.php';
     ?>
</body>

</html>