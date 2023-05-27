<?php require_once('../admin/include/dashboard.php'); ?>
<h3 class="text-center text-capitalize">Your Product Table</h3>
<?php if(isset($_GET['key'])): endif; ?>
<div class=" col-md-12 my-4">
    <div class="row animated--grow-in">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div></div>
                        <button class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
                            data-target="#sellProduct">Add Product To Sell <i class="fa fa-plus fa-sm"></i>
                        </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover dt-responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Sold By You</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sn = 1;
                            $new_seller_record = $conn->query("SELECT * FROM product where soldBy = {$_SESSION['sellerData']['sellerId']} ");
                            $ProdcutResult = mysqli_num_rows($new_seller_record);
                            while($ProdcutResult = mysqli_fetch_array($new_seller_record)):
                                if($ProdcutResult > 0): ?>
                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $ProdcutResult['productName'] ?> </td>
                                        <td><a href="" data-target="#viewProduct<?php echo $ProdcutResult['productId']; ?>" data-toggle="modal"><i class="fa fa-eye text-center"></i></a></td>
                                        <td><?php echo $ProdcutResult['productPrice'] ?> </td>
                                        <td><i class="fa fa-check text-center"></i> </td>
                                        <td><?php echo $ProdcutResult['status']; ?> </td>
                                        <td>
                                            <a href="" data-target="#updateProductInfo<?php echo $ProdcutResult['productId']; ?>" data-toggle="modal"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-target="#deleteProduct<?php echo $ProdcutResult['productId']; ?>" data-toggle="modal"><small class="text-danger">delete </small><i class="fa fa-trash-o text-danger"></i></a>
                                        </td>
                                <?php endif; ?>
                                <!-- product image -->
                                <div class="modal fade" id="viewProduct<?php echo $ProdcutResult['productId']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewProduct<?php echo $ProdcutResult['productId']; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newCategories">image</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="../upload/<?php echo $ProdcutResult['productImage']; ?>" alt="product img" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- edit product info -->
                                <div class="modal fade" id="updateProductInfo<?php echo $ProdcutResult['productId']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateProductInfo<?php echo $ProdcutResult['productId']; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newCategories">update product information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="sellerProductAction.php" method="post" class=" col-push-3">
                                                    <small>All field are mandatory</small>
                                                    <div class="my-3 form-group">
                                                        <input type="number" class="form-control" value="<?php echo $ProdcutResult['productId']; ?>" hidden name="productId" placeholder="productId" required>
                                                    </div>
                                                    <div class="my-3 form-group">
                                                        <input type="text" class="form-control" name="productName" value="<?php echo $ProdcutResult['productName']; ?>" placeholder="product Name" required>
                                                    </div>
                                                    <div class="my-3 form-group">
                                                        <input type="text" class="form-control" name="productPrice" value="<?php echo $ProdcutResult['productPrice']; ?>" placeholder="product Price" required>
                                                    </div>
                                                    <div class="my-3 form-group">
                                                        <input type="text" class="form-control" name="status" value="<?php echo $ProdcutResult['status']; ?>" placeholder="category status" required>
                                                    </div>
                                                    <div class="my-3 text-center form-group">
                                                        <button type="submit" name="updateProductInfo" class="btn btn-secondary">register category</button>
                                                    </div>
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('modal.php'); ?>
<div class="" hidden>
    <?php require_once('../include/footer.php'); ?>
</div>