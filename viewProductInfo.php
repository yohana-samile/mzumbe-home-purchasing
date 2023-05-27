<?php require_once('include/dashboard.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
                $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId  and productId = {$_GET['productInfo']} ");
                $productResult = mysqli_fetch_assoc($productRecord); ?>
                    <img src="upload/<?php echo $productResult['productImage']; ?>" class="thumbnail" alt="product img" style="width: 100%; height: 500px;">
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
            <?php
                $seller = $conn->query("SELECT * FROM seller where sellerID = {$productResult['soldBy']} ");
                $sellerResult = mysqli_fetch_assoc($seller); ?>

            <p>Name: <span class="float-right"><?php echo $sellerResult['sellerFullName']; ?></span></p>
            <p>Phone Number: <span class="float-right"><?php echo $sellerResult['phoneNumber']; ?></span></p>
            <p>email: <span class="float-right"><?php echo $sellerResult['email']; ?></span></p>
            <p>location: <span class="float-right"><?php echo $sellerResult['location']; ?></span></p>
            <div class="conainter">
                <div class="alert alert-success">
                    NOTE: Communicate with seller to buy this product <span class="badge badge-primary">+255<?php echo $sellerResult['phoneNumber']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <h4 class="my-3">Related Product In The Stock</h4>      
    <div class="row animated--grow-in">
        <div class="col-xl-12">
            <div class="row main-section">
                <?php
                    $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId  and pCategoryId = {$productResult['pCategoryId']} ");
                    $ProdcutResult = mysqli_num_rows($productRecord);
                    if($ProdcutResult > 0):
                        while($ProdcutResult > 0):
                            $ProdcutResult--;
                            $product = mysqli_fetch_assoc($productRecord);
                                include('assets/tamplates/viewProduct.php');
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>
<div class="">
    <?php require_once('include/footer.php'); ?>
</div>