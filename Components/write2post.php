<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write2post</title>
</head>
<style>
    .post-bar {
        margin: 50px auto;
        width: 570px;
        height: 60px;
        box-shadow: 0px 0px 2px 2px #FF9201;
        border-radius: 10px;
        text-align: center;
}

    .post-input input{
        margin: 15px;
        width: 500px;
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
</style>
<body>
    <div class="post-bar">
        <div class="post-input">
            <input type="text" class="input" placeholder="Write here to post">
        </div>
  </div>
</body>
</html>