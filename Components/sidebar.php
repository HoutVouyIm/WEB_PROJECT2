<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sidebar</title>
</head>
<style>
    *{
        margin: 0;
    }
    #sidebar {
        width: 240px;
        height: 95vh;
    
        box-shadow: 0px 0px 2px 2px #dad4d4;
        padding: 10px;
    }

    .list{
        margin:0;
        padding:0;
    }
    #sidebar ul {
        margin-left: 0;
        list-style-type: none;
        }

    #sidebar ul li a{
        display: flex;
        /* justify-content: center; */
        align-items:center;
        gap: 10px;

        & img{
            width: 20px;
            height: 20px;
            margin:0;
            border-radius: 100%;
        }
    }
    /* #sidebar li {
        list-style-type: style none;;
        margin-bottom: 10px;
        margin-left: 10px;
        
     } */

    #sidebar a {
        display: block;
        padding: 5px;
        color: #333;
        text-decoration: none;
        
        }

    #sidebar li a:hover {
        background-color: #ccc;
        
        }
    

    #bottom-bar{
        margin-top: 490px;
    }
</style>
<body>
    <div id="sidebar">
    <ul class="list">
        <div id="head-bar">
            <li><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
            <li>
                <a href="#">
                    <img src="https://static-00.iconduck.com/assets.00/profile-circle-icon-2048x2048-cqe5466q.png" alt="">
                <p>Profile</p>
                </a>
            </li>
            <li><a href="#"><i class="fa-solid fa-people-group"></i>Connection</a></li>
        </div>
        <div id="bottom-bar">
            <li><a href="#"><i class="fa-regular fa-circle-question"></i>Help & Support</a></li>
            <li><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a></li>
        </div>
    </ul>
    </div>
</body>
</html>