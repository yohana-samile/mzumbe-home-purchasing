<?php
    require_once('../include/resources.php');
    require_once('../include/dbConn.php');
    require_once('../include/messages.php');
    if(empty($_SESSION['adminData']['adminId']) AND empty($_SESSION['sellerData']['sellerId'])):
        header('location:../index.php');
    endif;
?>
    <!-- Topbar End -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="width: 100%;">
        <!-- Brand -->
        <a href="index.php" class="text-decoration-none text-white">
            <h3 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">MU</span>Home Purchesing</h3>
        </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <?php if(!empty($_SESSION['adminData']['adminId'])): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="seller.php"><i class="fa fa-registered"></i> Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="categories.php">Categories</a>
                </li>
            <?php endif; 
            if(!empty($_SESSION['sellerData']['sellerId'])): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="product.php">Product To Sell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="myProfile.php">Profile</a>
                </li>
            <?php endif; ?>
        </ul>
        <a class="text-white px-2" href="../logout.php">
            <i class="fa fa-right-from-bracket"></i>Logout
        </a>
    </nav>