<?php
    require_once('../include/dbConn.php');
    if(isset($_POST['deleteProduct'])):
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