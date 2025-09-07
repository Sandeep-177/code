<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin_css/commonAdmincss.css">
    <link rel="stylesheet" href="../admin_css/editVisitCharge.css">
</head>
<body>
    <!-- Header -->
    <?php
    include 'adminHeader.php';
    ?>

    <!-- content -->
    <div class="divFist">
     <p class="fist" style="background-color: rgb(215, 248, 215); color: rgb(108, 143, 108);">Edit Category</p>
     <div>
        <form id="orders">
        <label for="locEdt">Category Name:</label>
        <!-- <input type="text" name="locEdt" class="locedt" id="input1"> -->
         <select name="select1" id="input1">
            <option value="select1" selected>Select Category</option>
            <option value="select1">One</option>
            <option value="select1">Two</option>
            <option value="select1">Three</option>
         </select>
        <label for="locEdt3">Subcategory Name :</label>
        <!-- <input type="text" name="locEdt3" class="locedt" id="input3"> -->
        <select name="select2" id="input3">
            <option value="select2" selected>Select Subcategory</option>
            <option value="select2">One</option>
            <option value="select2">Two</option>
            <option value="select2">Three</option>
         </select>
        <label for="locEdt4">Edit Visiting Charge :</label>
        <textarea name="locEdt4" class="locedt" id="input4"></textarea>
        <label for="locEdt5">Edit Service Charge :</label>
        <input type="text" name="locEdt5" class="locedt" id="input5">
        <!-- <input type="text" name="locEdt4" class="locedt" id="input4"> -->
        <!-- <label for="locEdt2">Subcategory Image:</label>
        <input type="file" name="locEdt2" class="locedt" id="input2"> -->
        
        <div>
        <button id="add" class="btn">ADD</button>
        <button id="reset" class="btn">RESET</button>
        </div>
        </form>
     </div>
     <p class="fist" style="background-color: rgb(227, 233, 227); color: rgb(130, 136, 130);"><b>Note: </b> Please note that changes will be seeen by users and vendors.</p>

     </div>

    <!-- Footer -->
    <?php
    include 'adminFooter.php';
    ?>
    
</body>
</html>