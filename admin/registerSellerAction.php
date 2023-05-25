<?php
    require_once('../include/dbConn.php');
    if(isset($_POST['register'])):
        $fullName = $_POST['sellerFullName'];
        $username = $_POST['username'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if(empty($fullName) && empty($email) && empty($password) && empty($confirmPassword)):
            $_SESSION['error'] = "all field are mandatory";
            header('location:seller.php?key=error');
            elseif($password == $confirmPassword):
                $registerUSer = $conn->query("INSERT INTO seller VALUES (null, '$fullName', '$username', '$phoneNumber', '$email', '$role', '$password') ");
                if($registerUSer):
                    $_SESSION['success'] = "registration Done";
                    header('location:seller.php?key=success');
                    else:
                        echo mysqli_error($conn);
                endif;
            else:
                $_SESSION['error'] = "pass not match";
                header('location:seller.php?key=error');
            endif;


            // delete product
    elseif(isset($_POST['deleteProduct'])):
        $product = $_POST['product'];
        $deleteProduct = $conn->query("DELETE FROM product where productId = '$product' ");
        if($deleteProduct):
            $_SESSION['success'] = "deletion Done";
            header('location:index.php?key=success');
        else:
            $_SESSION['error'] = "fail, try again";
            header('location:index.php?key=error');
        endif;

    endif;
?>