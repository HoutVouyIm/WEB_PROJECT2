<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="auth_style.css">
    <style>
        .button{
        width: 105%;
        padding: 7px;
        height: 35px;
        margin-top: 20px;
        border: none;
        background-color: #FF9201;
        color: white;
        }
    </style>
</head>
<body>
    <div class="login_box">
        <h1>Login account</h1>
        <form action="login_checked.php" method="POST">
            <?php
                if(isset($_GET['error'])){
                    ?>
                        <p class="error"><?php echo $_GET['error'] ; ?></p>
                    <?php
                }
            ?>
            
            <label>E-mail</label>
            <input type="email" name="email" placeholder="123@gmail.com">

            <label>Password</label>
            <input type="password" name="password">

            <input type="submit" class="button" value="Login">
        </form>
        <p class="para-2">Not have account yet ? <a href="register.php">Sign Up</a></p>
    </div>
  
</body>
</html>