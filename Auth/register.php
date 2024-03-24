<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <div class="signup_box">
 
        <h1>Create an account</h1>
        <h4>To continue, fill out your personal info</h4>

        <form action="signup_checked.php" method="POST">

            <?php
                if(isset($_GET['error'])){
                    ?>
                        <p class="error"><?php echo $_GET['error'] ; ?></p>
                    <?php
                }
            ?>

            <?php
                if(isset($_GET['success'])){
                    ?>
                        <p class="success"><?php echo $_GET['success'] ; ?></p>
                    <?php
                }
            ?>

            <label>Full Name: </label>
            <?php
                if(isset($_GET['full_name'])){
                    ?>
                        <input 
                            type="text" 
                            name="name"
                            placeholder="Full Name"
                            value="<?php echo $_GET['full_name']; ?>"><br>
                    <?php }else{ ?>
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Full Name"><br>
                    <?php
                }
            ?>

            <label>User Name</label>
            <?php
                if(isset($_GET['user_name'])){
                    ?>
                        <input 
                            type="text" 
                            name="uname"
                            placeholder="User Name"
                            value="<?php echo $_GET['user_name']; ?>"><br>
                        <?php }else{?>
                        <input 
                            type="text" 
                            name="uname" 
                            placeholder="User Name"><br>
                    <?php
                }
            ?>

            <label>E-mail</label>
            <input type="email" name="email" placeholder="123@gmail.com">

            <label>Password</label>
            <input type="password" name="password">

            <label>Repeat Password</label>
            <input type="password" name="re_password">

            <input type="submit" class="button" value="Sign Up"/>
        </form>
        <p>By clicking the Sign Up button, you are agree to our </br>
        <a href="#">Terms and Condition</a> and <a href="#">Privacy</a></p>
        <p class="para-2">Already have an account? <a href="login.php">Login here</a></p> 
    </div>
    
</body>
</html>