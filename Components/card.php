<?php
    include '../ConnectDB/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>Card</title>
</head>
<style>
    
    * {
        box-sizing: border-box;
    }
    .profile-card {
        border-radius: 15px;
        box-shadow: 0px 0px 2px 2px #dad4d4;
    }

    .profile-pic {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .profile {
        display: flex;
        gap: 15px;
    }

    .fa-solid {
        font-size: 20px;
        color: rgb(172, 170, 170);
    }

    .pic {
        width: 60px;
        height: 60px;

        & img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }
    }

    .name {
        font-size: 18px;
    }

    .message {
        /* width: 90%; */
        padding: 15px 30px;
        font-size: 20px;
        color: gray;  
    }

    .interaction {
        padding: 30px;
        display: flex;
        justify-content: space-between;

        & .likecomment {
            display: flex;
            align-items: center;
            gap: 50px;

            & span {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 18px;
                color: rgb(128, 125, 125);

            }
        }

        & .fa-solid {
            font-size: 20px;
            color: rgb(172, 170, 170);
        }
    }

    @media only screen and (max-width: 1200px) {
        /* .container{
            width: 100%;
        } */
        .profile-card {
            /* width: 90%; */
            box-shadow: 0px 0px 2px 2px #dad4d4;
        }
        .profile {
        display: flex;
        gap: 15px;

    }

    .fa-solid {
        font-size: 20px;
        color: rgb(172, 170, 170);
    }

    .pic {
        width: 50px;
        height: 50px;

        & img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }
    }

    .name {
        font-size: 16px;
    }
        .message {
        
        padding: 15px 30px;
        font-size: 20px;
        color: gray;
     
    }
        .interaction {
        padding: 30px;
        display: flex;
        justify-content: space-between;

        & .likecomment {
            display: flex;
            align-items: center;
            gap: 35px;

            & span {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 20px;
                color: rgb(128, 125, 125);

            }
        }

        & .fa-solid {
            font-size: 20px;
            color: rgb(172, 170, 170);
        }
    }
    }
    @media only screen and (max-width: 992px) {
        /* .container{
            width: 100%;
        } */
        .profile-card {
            /* width: 90%; */
            box-shadow: 0px 0px 2px 2px #dad4d4;
        }
        .profile {
        display: flex;
        gap: 15px;

    }

    .fa-solid {
        font-size: 20px;
        color: rgb(172, 170, 170);
    }

    .pic {
        width: 50px;
        height: 50px;

        & img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }
    }

    .name {
        font-size: 16px;
    }
        .message {
        
        padding: 15px 30px;
        font-size: 18px;
        color: gray;
        
    }
        .interaction {
        padding: 30px;
        display: flex;
        justify-content: space-between;

        & .likecomment {
            display: flex;
            align-items: center;
            gap: 30px;

            & span {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 18px;
                color: rgb(128, 125, 125);

            }
        }

        & .fa-solid {
            font-size: 18px;
            color: rgb(172, 170, 170);
        }
    }
    }
    @media only screen and (max-width: 768px) {
        /* .container{
            width: 100%;
        } */
        .profile-card {
            width: 100%;
            box-shadow: 0px 0px 2px 2px #dad4d4;
        }
        .profile {
        display: flex;
        gap: 15px;

    }

    .fa-solid {
        font-size: 16px;
        color: rgb(172, 170, 170);
    }

    .pic {
        width: 40px;
        height: 40px;

        & img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }
    }

    .name {
        font-size: 12px;
    }
        .message {
        width: 90%;
        padding: 15px 30px;
        font-size: 16px;
        color: gray;
        
    }
        .interaction {
        padding: 30px;
        display: flex;
        justify-content: space-between;

        & .likecomment {
            display: flex;
            align-items: center;
            gap: 20px;

            & span {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 16px;
                color: rgb(128, 125, 125);

            }
        }

        & .fa-solid {
            font-size: 16px;
            color: rgb(172, 170, 170);
        }
    }
    }
</style>

<body>
    <?php
        $sql = "SELECT * FROM create_post_tb";
        $results = mysqli_query($conn, $sql);
    ?>
    <?php foreach($results as $row) : ?>
    <div class="container" style="margin-bottom: 20px;">
        <div class="profile-card">
            <div class="profile-pic">
                <div class="profile">
                    <?php
                        $select_name_image = "SELECT full_name, image FROM user_tb WHERE id=" . $row['user_id'];
                        $result_info_users = mysqli_query($conn, $select_name_image);
                    ?>
                    <?php foreach($result_info_users as $name_image): ?>
                    <div class="pic">
                        <?php if($name_image['image'] === "null"): ?>
                            <img src="https://static-00.iconduck.com/assets.00/profile-circle-icon-2048x2048-cqe5466q.png" alt="">
                        <?php else: ?>
                            <img src="../Assert/images/<?php echo $name_image['image']; ?>" style="border-radius: 50%; width: 50px; height: 50px;">
                        <?php endif; ?>
                    </div>
                    <div class="name">
                        <p style="padding-top:10px;"><?php echo $name_image['full_name']; ?></p> 
                    </div>
                    <?php endforeach; ?>
                </div>
                <div id="add-card">
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>
            <hr>
            <div class="message">
                <h3 style="text-align: left;"><?php echo $row['title']; ?></h3>
                <!-- <p>I'm currently unemployed and broke as hell🫠</p> -->
                <p style="text-align: left;"><?php echo $row['des'] ?></p>
                <img src="../Assert/images/<?php echo $row['image']; ?>" alt="image" style="max-width: 100%; max-height: 30vh; object-fit: cover;" />
            </div>
            <hr>
            <div class="interaction">
                <div class="likecomment">
                    <span><i class="fa-solid fa-heart"></i>Like</span>
                    <span><i class="fa-solid fa-comment"></i>Comment</span>
                </div>
                <div class="save-btn">
                    <i class="fa-solid fa-bookmark"></i>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; ?>
</body>

</html>