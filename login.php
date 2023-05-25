<?php require_once('include/navbar.php'); ?>
<?php require_once('include/messages.php'); ?>
<div class="container col-5 d-flex justify-content-center bg-light">
    <form action="loginAction.php" method="post" class=" col-push-3">
        <h3 class="text-center">Fill form below to login</h3>
        <small>All field are mandatory</small>
        <?php if(isset($_GET['key'])): endif; ?>
        <div class="my-3 form-group">
            <input type="text" class="form-control" name="username" placeholder="Your username" required>
        </div>
        <div class="my-3 form-group">
            <input type="password" class="form-control" name="password" placeholder="Your password" required>
        </div>
        <div class="my-3 text-center form-group">
            <button type="submit" name="login" class="btn btn-secondary">Login</button>
        </div>
        <p>Do not have account register <a href="registerSeller.php">Here</a></p>
    </form>
</div>