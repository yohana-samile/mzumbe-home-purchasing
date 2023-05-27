<?php 
    require_once('include/dashboard.php'); 
    require_once('include/navbar.php'); 
?>
<h3 class="text-center text-capitalize">This is list of registered Seller</h3>
<?php if(isset($_GET['key'])): endif; ?>
<div class=" col-md-12 my-4">
    <div class="row animated--grow-in">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div></div>
                        <button class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
                            data-target="#registerSeller">Register Seller <i class="fa fa-plus fa-sm"></i>
                        </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover dt-responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Seller Name</th>
                            <th>Email ID</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sn = 1;
                            $new_seller_record = $conn->query("SELECT * FROM seller ");
                            $new_seller_result = mysqli_num_rows($new_seller_record);
                            while($new_seller_result = mysqli_fetch_array($new_seller_record)):
                                if($new_seller_result > 0): ?>
                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $new_seller_result['sellerFullName'] ?> </td>
                                        <td><?php echo $new_seller_result['email']; ?> </td>
                                        <td><?php echo $new_seller_result['phoneNumber']; ?> </td>
                                        <td><?php echo $new_seller_result['location']; ?> </td>
                                        <td>
                                            <a href="" data-target="#editEmployee<?php echo $new_seller_result['sellerId']; ?>" data-toggle="modal"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-target="#deleteEmployee<?php echo $new_seller_result['sellerId']; ?>" data-toggle="modal"><small>delete </small><i class="fa fa-trash-o text-danger"></i></a>
                                        </td>
                                <?php endif; ?>
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