<?php 
    require_once('include/dashboard.php'); 
    require_once('include/navbar.php'); 
?><h3 class="text-center text-capitalize">Product Categories</h3>
<div class=" col-md-12 my-4 ">
    <div class="row animated--grow-in">
        <div class="col-xl-12">
            <div class="card card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div></div>
                        <button class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
                            data-target="#newCategories">Register Categories <i class="fa fa-plus fa-sm"></i>
                        </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover dt-responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Category Name</th>
                            <th>Datte added</th>
                            <th>Added by admin</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sn = 1;
                            $new_Category_record = $conn->query("SELECT * FROM productcategory ");
                            $new_Category_result = mysqli_num_rows($new_Category_record);
                            while($new_Category_result = mysqli_fetch_array($new_Category_record)):
                                if($new_Category_result > 0): ?>
                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $new_Category_result['categoryName'] ?> </td>
                                        <td><?php echo $new_Category_result['dateAdded']; ?> </td>
                                        <td class="text-center"><i class="fa fa-check"></i> </td>
                                        <td>
                                            <a href="" data-target="#updateCategories<?php echo $new_Category_result['pCategoryId']; ?>" data-toggle="modal"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-target="#deleteCategories<?php echo $new_Category_result['pCategoryId']; ?>" data-toggle="modal"><small>delete </small><i class="fa fa-trash-o text-danger"></i></a>
                                        </td>
                                <?php endif; ?>
                                    <!-- update categories modal -->
                                    <div class="modal fade" id="updateCategories<?php echo $new_Category_result['pCategoryId']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateCategories<?php echo $new_Category_result['pCategoryId']; ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateCategories">Fill This Form To Update Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="registerCategoryAction.php" method="post" class=" col-push-3">
                                                        <small>All field are mandatory</small>
                                                        <div class="my-3 form-group">
                                                            <input type="number" class="form-control" value="<?php echo $new_Category_result['pCategoryId']; ?>" name="pCategoryId" hidden placeholder="category" required>
                                                        </div>
                                                        <div class="my-3 form-group">
                                                            <input type="text" class="form-control" name="categoryName" value="<?php echo $new_Category_result['categoryName']; ?>" placeholder="category Name" required>
                                                        </div>
                                                        <div class="my-3 text-center form-group">
                                                            <button type="submit" name="updateCategory" class="btn btn-secondary">register category</button>
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
<?php require_once('include/modal.php'); ?>
<div class="" hidden>
    <?php require_once('../include/footer.php'); ?>
</div>