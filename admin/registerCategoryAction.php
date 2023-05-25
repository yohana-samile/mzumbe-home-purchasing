<?php
    require_once('../include/dbConn.php');
    if(isset($_POST['registerCategory'])):
        $categoryName = $_POST['categoryName'];
        $dateAdded = $_POST['dateAdded'];
        $addedBy = $_POST['addedBy'];

        $registerCategory = $conn->query("INSERT INTO productcategory VALUES (null, '$categoryName', '$dateAdded', '$addedBy') ");
        if($registerCategory):
            $_SESSION['success'] = "Category Added";
            header('location:categories.php?key=success');
        else:
            $_SESSION['error'] = "Fail, try again";
            header('location:categories.php?key=error');
        endif;

        // updation
        elseif(isset($_POST['updateCategory'])):
            $pCategoryId = $_POST['pCategoryId'];
            $categoryName = $_POST['categoryName'];
    
            $updateCategory = $conn->query("UPDATE productcategory SET categoryName = '$categoryName' WHERE pCategoryId = '$pCategoryId' ");
            if($updateCategory):
                $_SESSION['success'] = "Category Updated";
                header('location:categories.php?key=success');
            else:
                $_SESSION['error'] = "Fail, try again";
                header('location:categories.php?key=error');
            endif;
    endif;
?>