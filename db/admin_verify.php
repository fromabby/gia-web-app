<?php
    session_start();
    include "./auth.php";
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['email']) && isset($_POST['password'])){
        print_r($_POST);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        
        if(empty($email)){
            header("Location: ../login.php?error=User name required.");
        }else if(empty($password)){
            header("Location: ../login.php?error=Password required.");
        }
        else{
            $result = $obj->login($email, $password);
            
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['email'] === $email && $row['password'] === $password){
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../admins/profile.php?view=$email&message=Logged in successfully.");
                }
            }else{
                // header("Location: ../login.php?error=Invalid credentials.");
                header("Location: ../login.php?error=Cannot login");

            }
            exit();
        }
    } else {
        header("Location: ../login.php");
    }
    exit();
?>