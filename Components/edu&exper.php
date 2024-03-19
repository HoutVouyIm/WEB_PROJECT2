<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Education&Experience</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        width:800px;
        
        margin: 0 auto;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0px 0px 2px 2px #dad4d4;
        padding: 25px;
}
    .part1{
        height: 30px;
        display: flex;
        justify-content: space-between;
    }

    .icon{
        
       
        display: inline;
        margin-left: 16px;
        
    }
    .part2{
        height: 160px;
      
       
       
    }
    .prf{
        width: 50px;
        height:50px;
        background-color: grey;
        margin-top: 5px;
    }
    

    .part3{
        height: 90px;
       
     
    }
    .flex-text{
        display: flex;
        gap: 15px;
        padding-top: 10px;
    }

    @media (max-width: 1200px) {
    .container {
      padding: 20px;
    }

    .part1 {
      height: 25px;
    }

    .icon {
      margin-left: 14px;
    }

    .prf {
      width: 45px;
      height: 45px;
    }

    .flex-text {
      gap: 10px;
      padding-top: 5px;
    }
  }

  @media (max-width: 992px) {
    .container {
      padding: 15px;
    }

    .part1 {
      height: 20px;
    }

    .icon {
      margin-left: 12px;
    }

    .prf {
      width: 40px;
      height: 40px;
    }

    .flex-text {
      gap: 5px;
      padding-top: 0px;
    }
  }

  @media (max-width: 768px) { 
    .container {
         width: 100%; padding: 10px; 
        } 
    .part1 { 
        height: 15px; 
    } 
    .icon { 
        margin-left: 10px; font-size: 12px;
    } 
    .prf { 
        width: 30px; height: 30px; 
    } 
    .flex-text { 
        gap: 2px; padding-top: 0px; 
    } 
    .info { 
        margin-top: 5px; font-size: 12px; 
    } 
}
   
    

        
</style>
<body>
    <div class="container">
      <div class="part1">
            <h3>Education</h3>
            <div class="icon">
                <i class="fa-solid fa-plus"></i>
                <i class="fa-solid fa-pencil"></i>
            </div>
      </div>
      <div class="part2">
            <div class="flex-text">
                <div class="prf">
                    <a href=""></a>
                </div>
                <div class="info">
                    <h4>Royal University of Phnom Penh</h4>
                    <p>Bachelor's degree, Computer Science</p>
                </div>
            </div>

            <div class="flex-text">
                <div class="prf">
                    <a href=""></a>
                </div>
                <div class="info">
                    <h4>Royal University of Phnom Penh</h4>
                    <p>Bachelor's degree, Computer Science</p>
                </div>
            </div>
      </div>
      <div class=part3>
            <h3>Experience</h3>
            <div class="flex-text">
                <div class="prf">
                    <a href=""></a>
                </div>
                <div class="info">
                    <h4>Web Developer</h4>
                    <p>Coca-Cola, Phnom Penh</p>
                </div>
            </div>
      </div>
    </div>

</body>
</html>