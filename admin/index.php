<?php
    require_once('include/dashboard.php');
    require_once('include/navbar.php');
    $sellerRecord = $conn->query("SELECT * FROM `seller` ");
    $categoryRecord = $conn->query("SELECT * FROM `productcategory` ");
?>
<div class="container my-4">
    Admin Panel <u class="text-capitalize text-primary"><?php echo $_SESSION['adminData']['fullName']; ?></u>
    <div class="row">
        <div class="col-md-4">
            <div class="card border border-primary">
                <div class="card-body">
                    <p class="text-primary">Total seller <i class="fa fa-users"></i></p>
                        <h3 class="float-right"><?= mysqli_num_rows($sellerRecord); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border border-primary">
                <div class="card-body">
                    <p class="text-primary">Total Categories</p>
                    <h3 class="float-right"><?= mysqli_num_rows($categoryRecord); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="" hidden>
    <?php require_once('../include/footer.php'); ?>
</div>