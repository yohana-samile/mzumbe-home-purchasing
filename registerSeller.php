<?php require_once('include/navbar.php'); ?>
<?php require_once('include/messages.php'); ?>
<div class="container col-5 d-flex justify-content-center bg-light">
    <form action="registerSellerAction.php" method="post" class=" col-push-3">
        <h3 class="text-center">Fill form below and become member</h3>
        <small>All field are mandatory</small>
        <?php if(isset($_GET['key'])): endif; ?>
        <div class="my-3 form-group">
            <input type="text" class="form-control" name="sellerFullName" placeholder="Your Full Name" required>
        </div>
        <div class="my-3 form-group">
            <input type="text" class="form-control" name="username" placeholder="Your username" required>
        </div>
        <div class="my-3 form-group">
            <input type="number" class="form-control" name="phoneNumber" placeholder="Your phone Number" required>
        </div>
        <div class="my-3 form-group">
            <input type="email" class="form-control" name="email" placeholder="Your email" required>
        </div>
        <div class="my-3 form-group">
            <input type="text" class="form-control" name="role" placeholder="role" value="isSeller" hidden required>
        </div>
        <div class="my-3 form-group">
            <input type="text" class="form-control" name="location" placeholder="location " required>
        </div>
        <div class="my-3 form-group">
            <input type="password" class="form-control" name="password" placeholder="Your password" required>
        </div>
        <div class="my-3 form-group">
            <input type="password" class="form-control" name="confirmPassword" placeholder="confirm Password " required>
        </div>
        <div class="my-3 text-center form-group">
            <button type="submit" name="register" class="btn btn-secondary">register me</button>
        </div>
        <p>Have account login <a href="login.php">Here</a></p>
    </form>
</div>