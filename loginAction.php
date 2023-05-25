<?php
    require_once('include/dbConn.php');
    if(isset($_POST['login'])):
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username) && empty($password)):
            $_SESSION['error'] = "all field are mandatory";
            header('location:login.php?key=error');
        else:
            $findUSer = $conn->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' limit 1");
            if(mysqli_num_rows($findUSer) > 0):
                $result = mysqli_fetch_array($findUSer);
                $_SESSION['adminData'] = $result;
                if($_SESSION['adminData']['role'] == "isAdmin"):
                    header('location:admin/');
                endif;
            else:
                $findSeller = $conn->query("SELECT * FROM seller WHERE username = '$username' AND password = '$password' limit 1");
                if(mysqli_num_rows($findSeller) > 0):
                    $result = mysqli_fetch_array($findSeller);
                    $_SESSION['sellerData'] = $result;
                    if($_SESSION['sellerData']['role'] == "isSeller"):
                        header('location:seller/');
                    endif;
                else:
                    $_SESSION['error'] = "Wrong Username Or Password";
                    header('location:login.php?key=error');
                endif;
            endif;
        endif;
    endif;
?>