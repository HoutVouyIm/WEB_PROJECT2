<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            /* background-color: gray; */
        }
        .all{
            display: flex;
            flex-direction: column;
            /* background: gray; */
        }
        .locat_body{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 50px;
            margin-top: 20px;
        }
        .right_side{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="all">
    <!-- Navbar Place -->
    <?php
        include '../Components/navbar.php';
    ?>

    <div class="locat_body">
        <!-- Sidebar Place -->
        <?php  include '../Components/sidebar.php'; ?>
        <!-- Card Place -->
        <?php  include '../Components/card.php';  ?>

        <div class="right_side">
            <!-- Category Box Place -->
            <?php include '../Components/category.php'; ?>
            <!-- Connection Place -->
            <?php include '../Components/connect.php'; ?>
        </div>
        
        
    </div>
    
    </div>
   
</body>
</html>