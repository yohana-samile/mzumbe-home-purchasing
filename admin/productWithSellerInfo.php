<?php require_once('include/navbar.php'); ?>
<div class="container">
    <div class="row  my-3">
        <div class="col-md-6">
            <?php
                $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId  and productId = {$_GET['productInfo']} ");
                $productResult = mysqli_fetch_assoc($productRecord); ?>
                    <img src="../upload/<?php echo $productResult['productImage']; ?>" class="thumbnail" alt="product img" style="width: 100%; height: 500px;">
                    <p><?php echo $productResult['productName']; ?></p>
        </div>
        <div class="col-md-4 bg-light">
            <h4 class="text-center">Seller information</h4>
            <?php
                $seller = $conn->query("SELECT * FROM seller where sellerID = {$productResult['soldBy']} ");
                $sellerResult = mysqli_fetch_assoc($seller); ?>

            <p>Name: <span class="float-right"><?php echo $sellerResult['sellerFullName']; ?></span></p>
            <p>Phone Number: <span class="float-right"><?php echo $sellerResult['phoneNumber']; ?></span></p>
            <p>email: <span class="float-right"><?php echo $sellerResult['email']; ?></span></p>
            <p>location: <span class="float-right"><?php echo $sellerResult['location']; ?></span></p>
        </div>
    </div>
    <h4>Related Product In The Stock</h4>      
    <div class="row animated--grow-in">
        <div class="col-xl-12">
            <div class="row main-section">
                <?php
                    $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId  and pCategoryId = {$productResult['pCategoryId']} ");
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
                                                    <form action="registerSellerAction.php" method="post">
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