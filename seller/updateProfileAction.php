<?php
    require_once('../include/dbConn.php');
    if(isset($_POST['updateProductInfo'])):
        $sellerId   = $_POST['sellerId  '];
        $sellerFullName = $_POST['sellerFullName'];
        $username = $_POST['username'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $password = $_POST['password'];

        $updateMyProfile = $conn->query("UPDATE seller SET sellerFullName = '$sellerFullName', username = '$username', phoneNumber = '$phoneNumber', email = '$email', location = '$location', password = '$password'  WHERE sellerId   = '$sellerId  ' ");
        if($updateMyProfile):
            $_SESSION['success'] = "information Updated";
            header('location:myProfile.php?key=success');
        else:
            $_SESSION['error'] = "Fail, try again";
            header('location:myProfile.php?key=error');
        endif;
    endif;