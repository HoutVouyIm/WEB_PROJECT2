<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .locat_body{
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 50px;
        
        }
        .right_side{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <!-- Navbar Place -->
    <?php
        include '../Components/navbar.php';
    ?>

    <div class="locat_body">
        <!-- Sidebar Place -->
        <?php  include '../Components/sidebar.php'; ?>
        <?php include '../Components/write2post.php'; ?>

        <div class="right_side" >
            <!-- Category Box Place -->
            <?php include '../Components/category.php'; ?>
            <!-- Connection Place -->
            <?php include '../Components/connect.php'; ?>
        </div>
        
    </div>
   
</body>
</html>