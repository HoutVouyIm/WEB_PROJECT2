<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .navbar {
            width: 100vw;
            position: fixed;
            top: 0;
            background: red;
        }

        .navbar_style {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px;
        }

        .logo {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        }      

        .signup-btn {
        padding: 10px 15px;
        background-color: #FF9201;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar_style">

            <a href="#" class="logo">Your Logo</a>


        <?php
        session_start();
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){
        ?>
            <div>
                <?php echo $_SESSION['full_name'] ?>
            </div>

        <?php
            }else{
                
                echo '<div class="login-signup">
                        <a href="../Auth/login.php" class="login-btn">Login</a>
                        <a href="../Auth/register.php" class="signup-btn" id="SignupBtn">Sign Up</a>
                    </div>';

            }
        ?>

        </div>
    </nav>
</body>
</html>