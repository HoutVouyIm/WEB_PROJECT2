<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="auth_style.css">
</head>
<body>
    <div class="signup_box">
 
        <h1>Create an account</h1>
        <h4>To continue, fill out your personal info</h4>

        <form action="#" method="post">
            <label>Full Name: </label>
            <input type="text" name="fullname" placeholder="Full Name">

            <label>User Name</label>
            <input type="text" name="username" placeholder="User Name">

            <label>E-mail</label>
            <input type="email" name="email" placeholder="123@gmail.com">

            <label>Password</label>
            <input type="password" name="password">

            <label>Repeat Password</label>
            <input type="password" name="re_pass">

            <input type="button" value="Sign Up"/>
        </form>
        <p>By clicking the Sign Up button, you are agree to our </br>
        <a href="#">Terms and Condition</a> and <a href="#">Privacy</a></p>
        <p class="para-2">Already have an account? <a href="login.php">Login here</a></p> 
    </div>
    
</body>
</html>