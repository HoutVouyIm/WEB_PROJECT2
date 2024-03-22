<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connect More</title>
    <style>
      .contain_connect{
        display: flex;
        flex-direction: column;
        border-radius: 5px;
        border: 1px solid red;
        padding: 10px;
        margin-right: 30px;
      }
      .headline{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border-radius: 15px;
      }
      .person {
        display: flex;
        flex-direction: row;
        justify-content: space-between; 
        margin-top: 20px;
        gap: 70px; 
      }
      .person img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

    @media only screen and (max-width: 1200px){
      .person {
        display: flex;
        flex-direction: row;
        justify-content: space-between; 
        margin-top: 20px;
        gap: 50px; 
      }
      .person img{
        width: 30px;
        height: 30px;
        border-radius: 50%;
      }
    }

    @media only screen and (max-width: 992px){
      .person {
        display: flex;
        flex-direction: row;
        justify-content: space-between; 
        margin-top: 20px;
        gap: 30px; 
      }
      .person img{
        width: 20px;
        height: 20px;
        border-radius: 50%;
      }
    }


    </style>
  </head>
  <body>
    <div class="contain_connect">
      <div class="headline">
        <span>Connect More</span>
        <span class="dots">&#8226;&#8226;&#8226;</span>
      </div>

      <div class="person">
        <img src="person1.jpg" alt="Person 1" />
        <div class="person-details">
          <p class="name">Ta Nit</p>
          <p class="role">Teacher</p>
        </div>
        <div class="icon1">👤</div>
      </div>


    </div>
  </body>
</html>