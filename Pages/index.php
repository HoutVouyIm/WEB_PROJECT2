<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body_style{
            display: flex;
            flex-direction: row; 
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- Navbar Place -->
    <?php
        include '../Components/navbar.php';
    ?>
    <div class="body_style">
        <?php  include '../Components/sidebar.php'; ?>
        <div style="margin: 0 auto; width:70%; margin-top: 100px;">
            <?php include '../Components/write2post.php'; ?>
        </div>
    </div>
   
</body>
</html>