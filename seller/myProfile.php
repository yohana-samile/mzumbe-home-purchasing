<?php require_once('../admin/include/navbar.php'); ?>
<div class="container col-md-6">
    <h4>Personal information</h4>
    <form action="updateProfileAction.php" method="post" class=" col-push-3">
        <small>All field are mandatory</small>
        <div class="my-3 form-group">
            <input type="number" class="form-control" value="<?php echo $_SESSION['sellerData']['sellerId']; ?>" name="sellerId" placeholder="sellerId " hidden required>
        </div>
        <div class="my-3 form-group">
            <input type="text" class="form-control" value="<?php echo $_SESSION['sellerData']['sellerFullName']; ?>" name="sellerFullName" placeholder="Full Name" required>
        </div>
        <div class="my-3 form-group">
            <input type="text" class="form-control" value="<?php echo $_SESSION['sellerData']['username']; ?>" name="username" placeholder="username" required>
        </div>
        <div class="my-3 form-group">
            <input type="number" class="form-control" value="<?php echo $_SESSION['sellerData']['phoneNumber']; ?>" name="phoneNumber" placeholder="phoneNumber" required>
        </div>        
        <div class="my-3 form-group">
            <input type="email" class="form-control" value="<?php echo $_SESSION['sellerData']['email']; ?>" name="email" placeholder="email" required>
        </div>
        <div class="my-3 form-group">
            <input type="text" class="form-control" value="<?php echo $_SESSION['sellerData']['location']; ?>" name="location" placeholder="location" required>
        </div>
        <div class="my-3 form-group">
            <input type="password" class="form-control" value="<?php echo $_SESSION['sellerData']['password']; ?>" name="password" placeholder="password" required>
        </div>
        <div class="my-3 text-center form-group">
            <button type="submit" name="update" class="btn btn-secondary">update information</button>
        </div>
    </form>
</div>