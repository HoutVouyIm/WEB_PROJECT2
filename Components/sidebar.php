<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sidebar</title>
</head>
<style>
    *{
        margin: 0;
    }
    #sidebar {
        height: 90vh;
        padding: 10px;
        margin-left: 30px;
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
        
        align-items:center;
        gap: 15px;

        & img{
            width: 20px;
            height: 20px;
            margin:0;
            border-radius: 100%;
        }
    }


    #sidebar a {
        display: block;
        padding: 5px;
        color: #333;
        text-decoration: none;
        
        }

    #sidebar li a:hover {
        background-color: #ccc;
        border-radius: 8px;
        background-color:#FF9201;
        }

    .list_style {
        height: 90vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
    }
    
    @media only screen and (max-width: 1200px) {
    #sidebar {
        width: 200px;
    }
}


@media only screen and (max-width: 992px) {
    #sidebar {
        width: 150px;
    }
}


    @media only screen and (max-width: 768px) {
            #sidebar{
                display: flex;
                align-items: center;
                /* justify-content: center; */
            }

            #sidebar ul.list div#head-bar li a p,
            #sidebar ul.list div#bottom-bar li a p {
                display: none; 
            }
           
        }

</style>
<body>
    <div id="sidebar">
    <ul class="list">
    <div class="list_style">
        <div id="head-bar">
            <li><a href="#"><i class="fa-solid fa-house"></i><p>Home</p></a></li>


        <?php
        session_start();
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){

            echo '
                <li>
                    <a href="#">
                        <img src="https://static-00.iconduck.com/assets.00/profile-circle-icon-2048x2048-cqe5466q.png" alt="">
                    <p>Profile</p>
                    </a>
                </li>
                <li><a href="#"><i class="fa-solid fa-people-group"></i><p>Connection</p></a></li>

                </div>

                <div id="bottom-bar">
                    <li><a href="#"><i class="fa-regular fa-circle-question"></i><p>Help & Support</p></a></li>
                    <li><a href="../Auth/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><p>Logout</p></a></li>
                </div>
            ';

            }else{
                
                echo '';

            }
        ?>

        

    </div>
        
    </ul>
    </div>
</body>
</html>