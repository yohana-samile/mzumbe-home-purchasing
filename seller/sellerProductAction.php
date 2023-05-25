<?php
    // Uploads files
    require_once('../include/dbConn.php');
    if(isset($_POST['sellerProduct'])): // if sellerProduct button on the form is clicked
        // name of the uploaded file
        
        $productName = $_POST['productName'];
        $soldBy = $_POST['soldBy'];
        $status = $_POST['status'];
        $productCategory = $_POST['productCategory'];
        $filename = $_FILES['productImage']['name'];

        // destination of the file on the server
        $destination = '../upload/' . $filename;

        // get the file extension
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        // the physical file on a temporary uploads directory on the server
        $file = $_FILES['productImage']['tmp_name'];
        $size = $_FILES['productImage']['size'];

        if (!in_array($extension, ['jpg', 'jepg', 'png'])):
            $_SESSION['error'] = "You file extension must be .jpg, .png, .jepg";
            header('location:product.php?key=error');

        elseif ($_FILES['productImage']['size'] > 1000000): // file shouldn't be larger than 1Megabyte
            $_SESSION['error'] = "File too large!"; 
            header('location:product.php?key=error');

        else: 
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)):
                $sellProduct = $conn->query("INSERT INTO product VALUES (null, '$productName', '$soldBy', '$status', '$productCategory', '$filename') ");
                if($sellProduct):
                    $_SESSION['success'] = "Product Advertised";
                    header('location:product.php?key=success');
                else:
                    $_SESSION['error'] = "Fail";
                    header('location:product.php?key=error');
                endif;
            endif;
        endif;

        // update product
    elseif(isset($_POST['updateProductInfo'])):
        $productId  = $_POST['productId '];
        $productName = $_POST['productName'];
        $status = $_POST['status'];

        $updateProduct = $conn->query("UPDATE product SET productName = '$productName', status = '$status' WHERE productId  = '$productId ' ");
        if($updateCategory):
            $_SESSION['success'] = "product Updated";
            header('location:product.php?key=success');
        else:
            $_SESSION['error'] = "Fail, try again";
            header('location:product.php?key=error');
        endif;
    endif;
?>