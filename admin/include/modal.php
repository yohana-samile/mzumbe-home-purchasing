<!-- seller modal -->
<div class="modal fade" id="registerSeller" tabindex="-1" role="dialog" aria-labelledby="registerSeller" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerSeller">Fill This Form To Register Seller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="registerSellerAction.php" method="post" class=" col-push-3">
                    <small>All field are mandatory</small>
                    <div class="my-3 form-group">
                        <input type="text" class="form-control" name="sellerFullName" placeholder="Full Name" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="number" class="form-control" name="phoneNumber" placeholder="phone Number" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="email" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="text" class="form-control" name="role" placeholder="role" value="isSeller" hidden required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="password" class="form-control" name="confirmPassword" placeholder="confirm Password " required>
                    </div>
                    <div class="my-3 text-center form-group">
                        <button type="submit" name="register" class="btn btn-secondary">register Seller</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- categories modal -->
<div class="modal fade" id="newCategories" tabindex="-1" role="dialog" aria-labelledby="newCategories" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCategories">Fill This Form To Register Seller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="registerCategoryAction.php" method="post" class=" col-push-3">
                    <small>All field are mandatory</small>
                    <div class="my-3 form-group">
                        <input type="text" class="form-control" name="categoryName" placeholder="category Name" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="date" class="form-control" name="dateAdded" value="<?php echo date('Y-m-d'); ?>" hidden placeholder="dateAdded" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="number" class="form-control" value="<?php echo $_SESSION['adminData']['adminId']; ?>" hidden name="addedBy" placeholder="addedBy" required>
                    </div>
                    <div class="my-3 text-center form-group">
                        <button type="submit" name="registerCategory" class="btn btn-secondary">register category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- sellProduct -->
<div class="modal fade" id="sellProduct" tabindex="-1" role="dialog" aria-labelledby="sellProduct" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sellProduct">Fill This Form To Advitese Your Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../seller/sellerProductAction.php" method="post" class=" col-push-3" enctype="multipart/form-data">
                    <small>All field are mandatory</small>
                    <div class="my-3 form-group">
                        <input type="text" class="form-control" name="productName" placeholder="product Name" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="number" class="form-control" value="<?php echo $_SESSION['sellerData']['sellerId']; ?>" hidden name="soldBy" placeholder="addedBy" required>
                    </div>
                    <div class="my-3 form-group">
                        <input type="text" class="form-control" name="status" value="on stock" placeholder="product status" hidden required>
                    </div>
                    <div class="my-3 form-group">
                        <select name="productCategory" class="form-control" id="productCategory">
                            <option hidden>Choose Product Category</option>
                                <?php
                                    $ProductCategoryRecord = $conn->query("SELECT * FROM productcategory ");
                                    $productCategory = mysqli_num_rows($ProductCategoryRecord);
                                    while($productCategory = mysqli_fetch_array($ProductCategoryRecord)):
                                        if($productCategory > 0): ?>
                                            <option value="<?php echo $productCategory['pCategoryId']; ?>"><?php echo $productCategory['categoryName']; ?></option>
                                <?php endif; endwhile; ?>
                        </select>
                    </div>
                    <div class="my-3 form-group">
                        <label for="productImage">product Image</label>
                        <input type="file" class="form-control" name="productImage" required>
                    </div>
                    <div class="my-3 text-center form-group">
                        <button type="submit" name="sellerProduct" class="btn btn-secondary">Sell</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>