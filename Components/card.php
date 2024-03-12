
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Card</title>
</head>
<style>
   
    .profile-card {
        width: 800px;
        height: 500px;
        border: 2px solid #FF9201;
        padding: 10px;
        margin: 0 auto;
        position: relative;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
   
    .profile-pic{
        height: 100px;
        display: flex;
        margin-top: 10px;
        
    }
    .profile-pic img{
        width: 60px;
        height: 60px;
        border-radius: 100px;
        overflow: hidden;
        margin-left: 60px;
        object-fit: cover;
    }
    .message{
        height: 300px;
        
        border: 2px solid  #1D8348;
        border-radius: 20px;
    }
    .message p{
        margin-left: 40px;
    }
    #acc-name{
        margin: 10px;
    }
    #add-card i{
        margin-left: 510px;
        font-size: 2rem;
        color: #FF9201;
        margin-top: 20px;
    }
    .interaction{
        height: 100px;
        
    }
    #interac-btn{
        margin-left: 30px;
        margin-top: 20px;
    }
    #like-btn, #comment-btn, #save-btn {
        font-size: 1rem;
        margin-top: 40px;
        border: none;
        margin-right: 30px;
        
    }
    
    #save-btn{
        margin-left: 465px;
    }
</style>
<body>
    <div class="profile-card">
        <div class="profile-pic">
            <img src="/Components/Pictures/cha eunwoo.jpg" alt="">
            <div id="acc-name">
                <p>Ty Sonita</p>
            </div>
            <div id="add-card">
                <i class="fa-solid fa-circle-plus"></i>
            </div>
        </div>
        <div class="message">
           <p>Hello to all viewers!!</p>
           <p>I'm currently unemployed and broke as hell🫠</p>
           <p>So I'm here to look for a job.</p>
           <p>Thanks><</p>
        </div>
        <div class="interaction">
            <div id="interac-btn">
                <button id="like-btn"><i class="fa-regular fa-heart"></i>Like</button>
                <button id="comment-btn"><i class="fa-regular fa-comment"></i>Comment</button>
                <button id="save-btn"><i class="fa-regular fa-bookmark"></i></button>
            </div>
            
         </div>
    </div>
    
</body>
</html>