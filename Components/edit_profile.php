<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container_edit_pro {
            width: 70vw;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 2px 2px #dad4d4;
            padding: 25px;
        }
        .edit_pro_style{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 10px;
        }
        .img{
            display: flex;
            flex-direction: column;
        }
        .btn_choose_img{
            margin-top: 15px;
            border: 2px solid #FF9201;
            border-radius: 6px;
            padding: 7px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"]{
            width: 40vw;
            padding: 7px;
            border-radius: 6px;
        }

        input[type="submit"]{
            padding: 7px;
            height: 35px;
            margin-top: 20px;
            border: none;
            background-color: #FF9201;
            color: white;
            border-radius: 6px;
        }

        @media only screen and (max-width: 1200px) {
            .img_style{
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container_edit_pro">
    <form action="" method="post">
        <h2>Edit Profile</h2>
        <hr/>
        <div class="edit_pro_style">
            <div class="info">
                <label for="">Full Name</label><br/>
                <input type="text" name="" id=""><br/><br/>

                <label for="">User Name</label><br/>
                <input type="text" name="" id=""><br/><br/>

                <label for="">Position</label><br/>
                <input type="text" name="" id=""><br/><br/>

                <label for="">Gender</label><br/>
                <input type="text" name="" id=""><br/><br/>

                <label for="">Date of Birth</label><br/>
                <input type="date" name="" id=""><br/><br/>

                <label for="">Phone Number</label><br/>
                <input type="number" name="" id=""><br/><br/>

                <input type="submit" value="Save Change"> 
            </div>
            <div class="img">
                <img src="https://static-00.iconduck.com/assets.00/profile-circle-icon-2048x2048-cqe5466q.png" 
                    alt="" style="max-width: 200px; max-height: 200px;" class="img_style">
                <button onclick="document.getElementById('fileInput').click()" class="btn_choose_img">Choose Image</button>
                <input type="file" name="" id="fileInput" style="display: none;">
            </div>
        </div>
    </form>
    </div>
</body>
</html>