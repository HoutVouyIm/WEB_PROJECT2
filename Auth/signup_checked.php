<?php
    session_start();
    include "../ConnectDB/connect.php";
    if(isset($_POST['uname']) && isset($_POST['password']) 
        && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['email'])){

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $uname = validate($_POST['uname']);
        $pass  = validate($_POST['password']);
        $name = validate($_POST['name']);
        $re_pass  = validate($_POST['re_password']);
        $email = validate($_POST['email']);

        $user_data = 'uname='.$uname. '&name='.$name;
        
        if(empty($name)){
            header("Location: register.php?error= Full Name is required&$user_data");
            exit();
        }else if(empty($uname)){
            header("Location: register.php?error= User Name is required&$user_data");
            exit();
        }
        else if(empty($email)){
            header("Location: register.php?error= Email is required&$user_data");
            exit();
        }else if(empty($pass)){
            header("Location: register.php?error= Password is required&$user_data");
            exit();
        }else if(empty($re_pass)){
            header("Location: register.php?error= Re Password is required&$user_data");
            exit();
        }else if($pass !== $re_pass){
            header("Location: register.php?error= Password and Re Password does not match&$user_data");
            exit();
        }
        else{

            // hasing password
           $pass = md5($pass);

           $sql = "SELECT * FROM user_tb WHERE user_name = '$uname' ";
           $result = mysqli_query($conn,$sql);

           if(mysqli_num_rows($result) > 0){
                header("Location: register.php?error= The username is taken try another&$user_data");
                exit();
           }else{

                $sql2 = "INSERT INTO user_tb (`full_name`,`user_name`,`email` ,`password`,`position`,`gender`,`dob`,`phone`,`image`)
                 VALUES('$name','$uname','$email' ,'$pass','Developer','Male','2002-10-27','0962422747','null') ";
                $result2 = mysqli_query($conn, $sql2);

                if($result2){
                    header("Location: login.php?success= Your Account Has Been Create Successfully ");
                    exit();
                }else{
                    header("Location: register.php?error= Unkonw Error Occurred&$user_data");
                    exit();
                }
           }
        }

    }else{
        header("Location: ../Layout/index.php");
        exit();
    }
?>