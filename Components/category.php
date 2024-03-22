<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contain_category {
            border-radius: 5px;
            border: 1px solid red;
            padding: 10px;
            margin-right: 30px;
        }
        .contain_category h1 {
            text-align: center;
        }
        .category_name{
            border-radius: 5px;
            border: 1px solid red;
            width: 150px;
            text-align: center;
        }
        .category_name:hover {
            background-color: orange;
        }
        .category_name:focus {
            background-color: red;
        }
        .category_name a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="contain_category">
        <h1>Category</h1>
        <a class="category_name" href="#">
            Developer
        </a>
    </div>
    
</body>
</html>