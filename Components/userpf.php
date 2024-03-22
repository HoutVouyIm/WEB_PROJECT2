<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"> -->
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .profile-card {
            position: relative;
            width: 80vw;
            margin: 40px auto;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            /* background-color: rgb(242, 237, 237); */
            /* padding: 40px; */
            border-radius: 20px;
        }

        .cover {
            position: relative;
            width: 100%;
            height: 90px;
            border-radius: 10px 10px 0 0;
            /* margin-top: 60px; */
            background-color: red;
            object-fit: cover;
            background-color: rgba(218, 216, 216, 0.848)
        }
        .profile-pic {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 100%;
            top: 25px;
            left: 40px;
            
            & img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 100%;
            }
        }
        .edit{
            position: absolute;
            right: 20px;
            padding: 20px;
        }

        .profile-info {
            background-color: white;
            padding: 65px 30px 40px 40px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            border-radius: 0 0 10px 10px;
            & ul{
                list-style: none;
                & li i{
                    margin-right: 16px;
                    margin: 3px;
                }
            }
            & h3{
                text-transform: uppercase;
            }
            & p{
                color: grey;
                margin-top: 3px;
            }
        }
        
        .list-info{
            margin-top: 18px;
        }
        .fa-solid{
            font-size: 18px;
            color: grey;
        }
        .fa-image{
            position: absolute;
            font-size: 28px;
            color:white;
            right: 20px;
            padding: 20px;
        }
        & li,  a{
            color: grey;
        }
        
    </style>
</head>

<body>
    <div class="profile-card">
        <div class="cover">
            <img src="" alt="">
            <i class="fa-solid fa-image "></i>
            <div class="profile-pic">
                <a href="">
                    <img src="https://i.pinimg.com/564x/b4/9b/2e/b49b2e9a25eaa18c24b7a0591c2058be.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="edit">
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div class="profile-info">
            
            <h3 class="name">
                Thakvon Smos
            </h3>
            <p class="username">
                @Thakvon
            </p>
            <p class="job">
                developer
            </p>
            <div >
                <ul class="list-info">
                    <li><i class="fa-solid fa-person"></i> Male</li>
                    <li><i class="fa-solid fa-cake-candles"></i> Born Dec 23, 2001</li>
                    <li><i class="fa-solid fa-at"></i> <a href="mailto:thavon@gmail.com">thavon@gmail.com</a></li>
                    <li>
                        <i class="fa-solid fa-phone"></i> (+855) 4874988839
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
