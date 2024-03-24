<?php
    session_start();
    include "../ConnectDB/connect.php";
    if(isset($_POST['email']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $email = validate($_POST['email']);
        $pass  = validate($_POST['password']);

        if(empty($email)){
            header("Location: login.php?error= Email is required");
            exit();
        }else if(empty($pass)){
            header("Location: login.php?error= Password is required");
            exit();
        }else{
            // hasing password
           $pass = md5($pass);

           $sql = "SELECT * FROM user_tb WHERE email = '$email' AND password = '$pass' ";
           $result = mysqli_query($conn,$sql);

           if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                // print_r($row)
                if($row['email'] === $email && $row['password'] === $pass){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: ../Pages/index.php");
                    exit();

                }
           }else{
                header("Location: login.php?error= Incorrect Email or Password");
                exit();
           }
        }

    }else{
        header("Location: login.php");
        exit();
    }
?>