<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0px;
        margin: 0px 30px;
        /* background-color: #f0f0f0; */
        }

        .logo {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        }

        .search-bar {
        display: flex;
        align-items: center;
        background-color: gray;
        border-radius: 5px;
        padding: 5px;
        }

        .search-bar input {
        border: none;
        outline: none;
        padding: 5px;
        font-size: 16px;
        width: 100%;
        }

        .search-bar button {
        border: none;
        background-color: transparent;
        cursor: pointer;
        }

        .signup-btn {
        padding: 10px 15px;
        background-color: #FF9201;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        }

        .menu-icon {
        display: none;
        }

        /* Media Queries for responsiveness */
       /* @media screen and (max-width: 768px) {
        .navbar {
            flex-wrap: wrap;
        }

        .search-bar,
        .login-signup {
            display: none;
        }

        .menu-icon {
            display: block;
        }
        }  */

    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">Your Logo</a>
        
        <!-- <div class="search-bar" id="searchBar">
            <input type="text" placeholder="Search">
            <button type="button"><i class="fas fa-search"></i></button>
        </div> -->

        <div class="login-signup">
            <a href="#" class="login-btn">Login</a>
            <a href="#" class="signup-btn" id="SignupBtn">Sign Up</a>
        </div>
        
        <!-- <div class="menu-icon" id="menuIcon">
            <i class="fas fa-bars"></i>
        </div> -->

    </nav>
</body>
</html>