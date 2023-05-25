<?php
    require_once('include/dbConn.php');
    if(isset($_POST['register'])):
        $fullName = $_POST['sellerFullName'];
        $username = $_POST['username'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $role = $_POST['location'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if(empty($fullName) && empty($email) && empty($password) && empty($confirmPassword)):
            $_SESSION['error'] = "all field are mandatory";
            header('location:registerSeller.php?key=error');
            elseif($password == $confirmPassword):
                $registerUSer = $conn->query("INSERT INTO seller VALUES (null, '$fullName', '$username', '$phoneNumber', '$email', '$role', '$location', '$password') ");
                if($registerUSer):
                    $_SESSION['success'] = "registration Done";
                    header('location:login.php?key=success');
                    else:
                        echo mysqli_error($conn);
                endif;
            else:
                $_SESSION['error'] = "pass not match";
                header('location:registerSeller.php?key=error');
            endif;
    endif;
?>