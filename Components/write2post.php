<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write2post</title>
</head>
<style>

    .post-bar {
        width: 100%;
        height: 60px;
        box-shadow: 0px 0px 2px 2px #FF9201;
        border-radius: 10px;
        text-align: center;
    }

    .post-input input{
        margin: 15px;
        width: 95%;
        height: 25px;
        border-radius: 30px;
        border: none;
        background-color:#E3E7E4;
        
    }
    @media only screen and (max-width: 1200px) {
            .post-bar {
                width: 80%;
                max-width: 600px;
            }

            .post-input input {
                width: 90%;
            }
        }

        @media only screen and (max-width: 992px) {
            .post-bar {
                width: 90%;
                max-width: 500px;
            }

            .post-input input {
                width: 85%;
            }
        }

        @media only screen and (max-width: 768px) {
            .post-bar {
                width: 90%;
                max-width: 400px;
            }

            .post-input input {
                width: 80%;
            }
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: gray;
            /* background-color: rgba(0, 0, 0, 0.5);  */
            border-radius: 10px;
            padding: 20px;
            z-index: 1000;
            display: none;
        }

        .popup.active {
            display: block;
        }

</style>
<body>
    <div class="post-bar">
        <div class="post-input" style="margin-bottom: 20px;" onclick="togglePopup()">
            <input type="text" class="input" placeholder="Write here to post">
        </div>

        <?php include '../Components/card.php'; ?>
    </div>

    <div class="popup" id="popup-1">
        
        <?php
            // session_start();
            if(isset($_SESSION['id']) && isset($_SESSION['email'])){
            ?>
                <?php include '../Components/create_post.php'; ?>
        <?php
            }else{
                echo "<h1>Please Login</h1>";
            }
        ?>
    </div>

    <script>
        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>

</body>
</html>