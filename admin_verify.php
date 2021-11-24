<?php
    session_start();
    include "./functions/db_conn.php";

    if (isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        
        if(empty($username)){
            header("Location: login.php?error=User name required");
            exit();
        }else if(empty($password)){
            header("Location: login.php?error=password required");
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $username && $row['password'] === $password){
                    $_SESSION['username'] = $row['username'];
                    header("Location: dashboard.php");
                 exit();
                }
            }else{
                echo $username;
                echo $password;
                header("Location: login.php?error=Invalid Login&username=" . $username . "&password=" . $password);
                 exit();
            }
        }

    } else {
        header("Location: login.php");
        exit();
    }
?>