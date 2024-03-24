<?php
    include '../ConnectDB/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <style>
        .contain_category {
            border-radius: 5px;
            border: 1px solid red;
            padding: 10px;
            margin-right: 30px;
            margin-bottom: 20px;
        }
        .contain_category h1 {
            text-align: center;
        }
        .category_name{
            border-radius: 5px;
            border: 1px solid red;
            text-align: center;
            padding: 5px;
        }
        .category_name:hover {
            background-color: orange;
        }
        .category_name:focus {
            background-color: red;
        }
        .category_name {
            text-decoration: none;
            color: black;
        }
        .category_control {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 20px;
        }

        @media only screen and (max-width: 1200px) {
            .category_control {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 20px;
            }
        }

        @media only screen and (max-width: 992px) {
            .category_control {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 20px;
            }
        }

    </style>
</head>
<body>
    <div class="contain_category">
        <h1>Category</h1>
        <div class="category_control">
            <?php 
                $sql = "SELECT * FROM category_tb";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "
                        <a href='#' class='category_name'>
                            $row[category_name]
                        </a>
                    ";
                        
                    
                }
            ?>
          
        </div>
        
    </div>
    
</body>
</html>