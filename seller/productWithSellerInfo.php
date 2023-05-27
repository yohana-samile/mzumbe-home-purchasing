<?php require_once('../admin/include/navbar.php'); ?>
<div class="container">
    <div class="row  my-3">
        <div class="col-md-6">
            <?php
                $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId  and productId = {$_GET['productInfo']} ");
                $productResult = mysqli_fetch_assoc($productRecord); ?>
                    <img src="../upload/<?php echo $productResult['productImage']; ?>" class="thumbnail" alt="product img" style="width: 100%; height: 500px;">
                    <div class="conainter">
                        <div class="alert alert-success">
                            <div class="row">
                                <div class="col-md-6">
                                    Product Name <span class="badge badge-primary"><?php echo  $productResult['productName']; ?></span>
                                </div>
                                <div class="col-md-6">
                                    Product Price <span class="badge badge-primary"><?php echo  $productResult['productPrice']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-md-4 bg-light">
            <h4 class="text-center">Seller information</h4>
            <p>Name: <span class="float-right"><?php echo $_SESSION['sellerData']['sellerFullName']; ?></span></p>
            <p>Phone Number: <span class="float-right"><?php echo $_SESSION['sellerData']['phoneNumber']; ?></span></p>
            <p>email: <span class="float-right"><?php echo $_SESSION['sellerData']['email']; ?></span></p>
            <p>location: <span class="float-right"><?php echo $_SESSION['sellerData']['location']; ?></span></p>
            <form action="">
                <a href="myProfile.php" class="btn btn-primary float-right">Update Personal Info</a>
            </form>
        </div>
    </div>
    <h4>Related Product In Your Stock</h4>      
    <div class="row animated--grow-in">
        <div class="col-xl-12">
            <div class="row main-section">
                <?php
                    $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId  and pCategoryId = {$productResult['pCategoryId']} and soldBy = {$_SESSION['sellerData']['sellerId']} ");
                    $ProdcutResult = mysqli_num_rows($productRecord);
                    if($ProdcutResult > 0):
                        while($ProdcutResult > 0):
                            $ProdcutResult--;
                            $product = mysqli_fetch_assoc($productRecord); ?>
                                <div class="col-md-4 col-sm-6 my-2">
                                    <div class="card" style="width: 20rem; height: 300px;">
                                        <div class="card-header">
                                            <p><?php echo $product['productName']; ?></p>
                                        </div>
                                        <div class="card-body">
                                            <a href="productWithSellerInfo.php?productInfo=<?php echo $product['productId']; ?>">
                                                <img src="../upload/<?php echo $product['productImage']; ?>" class="thumbnail" alt="product img" style="width: 100%; height: 145px;">
                                            </a>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="badge badge-primary">
                                                        <?php echo $product['status']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <form action="deleteProductAction.php" method="post">
                                                        <input type="number" name="product" hidden value="<?php echo $product['productId']; ?>" required>
                                                        <button type="submit" name="deleteProduct" class="text-white btn btn-danger float-right">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>