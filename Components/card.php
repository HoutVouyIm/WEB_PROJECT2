<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Comment</title>
</head>
<style>
    .profile-card {
        width: 300px;
        height: 400px;
        border: 1px solid #ccc;
        padding: 10px;
    }
    .profile-picture{
        width: 200px;
        height: 200px;
        border-radius: 100px;
        overflow: hidden;
        margin: 0 auto;

    }
    .profile-picture img{
        width: 200px;
        height: 200px;
    }
    #comment-box{
        width: 170px;
        height: 30px;
        padding: 15px;
        border-radius: 20px;
        background-color: #f5f5f5;
        margin: 0 auto;
        margin-bottom: 10px;
        text-align: center;
    }
</style>
<body>
    <div class="profile-card">
        <div class="profile-pic">
            <img src="/Components/Pitures/cardDino.jpg" alt="">
         </div>
         <div class="message">
            <input type="text" name="" id="">//check condition
            <i class="fa-solid fa-circle-plus"><input type="image" src="" alt=""></i>//font awesome to input image
         </div>
         <div class="interation">
            <div id="interac-btn">
                <button id="like-btn"><i class="fa-regular fa-heart"></i>Like</button>
                <button id="comment-btn"><i class="fa-regular fa-comment"></i>Comment</button>//onclick appear submit comment
                <button id="save"><i class="fa-regular fa-bookmark"></i></button>//save
            </div>
            <div id="comment-box">
                <div>
                    <img src="/Components/Pitures/cardDino.jpg" alt="">//jab picture pi log in acc
                </div>
                <button type="submit" id="add-comment">
                    <p >Add a comment...</p>//onclick disappear
                    <i id="addcommentpic"class="fa-regular fa-image"></i>
                </button>
                <button type="submit"></button>//onclick submit the text from add-comment 
            </div>
            <div id="comment-history">//show if have any comment
                <div>
                    <img src="/Components/Pitures/cardDino.jpg" alt="">//store previous comment
                </div>

            </div>
         </div>
    </div>
</body>
</html>