
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
    width: 800px;
    height: 300px;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 0 auto;
    position: relative;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    }
    .message{
        width: 100px;
        height: 100px;
        background-color: blue;
    }

    .profile-pic img{
        width: 80px;
        height: 80px;
        border-radius: 100px;
        overflow: hidden;
        margin-left: 60px;
    }
    
   
    #like-btn, #comment-btn, #save-btn {
        
        border: none;
    }
</style>
<body>
    <div class="profile-card">
        <div class="profile-pic">
            <img src="/Components/Pictures/cha eunwoo.jpg" alt="">
         </div>
         <div class="message">
            
            <i class="fa-solid fa-circle-plus"></i>
         </div>
         <div class="interation">
            <div id="interac-btn">
                <button id="like-btn"><i class="fa-regular fa-heart"></i>Like</button>
                <button id="comment-btn"><i class="fa-regular fa-comment"></i>Comment</button>
                <button id="save-btn"><i class="fa-regular fa-bookmark"></i></button>
            </div>
            
         </div>
    </div>
</body>
</html>