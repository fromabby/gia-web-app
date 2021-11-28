<?php
    session_start();
    include ".//db_conn.php";

    if (isset($_POST['email']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        
        if(empty($email)){
            header("Location: ../login.php?error=User name required");
            exit();
        }else if(empty($password)){
            header("Location: ../login.php?error=password required");
            exit();
        }
        else{
            $sql = "SELECT * FROM `users` WHERE email='$email' AND `password`='$password'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['email'] === $email && $row['password'] === $password){
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../admins/dashboard.php");
                 exit();
                }
            }else{
                header("Location: ../login.php?error=Invalid Login");
                 exit();
            }
        }

    } else {
        header("Location: ../login.php");
        exit();
    }
?>