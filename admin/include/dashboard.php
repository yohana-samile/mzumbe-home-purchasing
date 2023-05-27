<?php require_once('../include/resources.php'); ?>    
<?php require_once('../admin/include/navbar.php'); ?>
<aside class="sidebar">
  <div class="toggle">
    <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
  </div>
  <div class="side-inner">
    <div class="profile">
      <h5 class="m-0 display-5 font-weight-semi-bold"><a href="index.php"><span class="text-primary font-weight-bold border px-3 mr-1">MU</span>Home Purchesing</a></h5>
    </div>
      <?php if(!empty($_SESSION['adminData']['adminId'])): ?>
        <div class="activity">
            <h3 class="text-center"><a class="nav-link" href="product.php">Seller Products</a></h3>
        </div>
        <div class="activity">
            <h3 class="text-center"><a class="nav-link" href="seller.php"><i class="fa fa-user"></i> Seller</a></h3>
        </div>
        <div class="activity">
            <h3 class="text-center"><a class="nav-link" href="categories.php"><i class="fa fa-registered"></i> Categories</a></h3>
        </div>
      <?php endif; 
        if(!empty($_SESSION['sellerData']['sellerId'])): ?>
          <div class="activity">
            <h3 class="text-center"><a href="product.php">Product To Sell</a></h3>
          </div>
          <div class="activity">
            <h3 class="text-center"><a href="myProfile.php">Profile</a></h3>
          </div>
          <?php endif; ?>
          <div class="activity text-center">
            <a href="../logout.php" class="btn btn-primary text-center">Logout</a>
          </div>
  </div>      
</aside>