<?php require_once('include/dashboard.php'); ?>
<!-- furniture Categories Start -->
<div class="container">
    <h4 class="text-center">Buy furniture of your choice with resonable price from our different seller</h4>    
    <div class="row animated--grow-in">
        <div class="col-xl-12">
            <div class="row main-section my-2">
                <?php
                    $productRecord = $conn->query("SELECT * FROM product, productcategory where product.productCategory = productcategory.pCategoryId and productcategory.categoryName = 'furniture' ");
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
<!-- furniture Categories End -->
<div class="">
    <?php require_once('include/footer.php'); ?>
</div>