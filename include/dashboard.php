<?php require_once('include/resources.php'); ?>    
<?php require_once('include/navbar.php'); ?>    
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
    <div class="activity">
        <?php
            $categoryRecord = $conn->query("SELECT * FROM productcategory ");
            if(mysqli_num_rows($categoryRecord) > 0):
                while($categoryResult = mysqli_fetch_assoc($categoryRecord)): ?>
                    <h3 class="text-center"><a href="productCategoryBased.php?productCategory=<?php echo $categoryResult['pCategoryId']; ?>"><?php echo $categoryResult['categoryName']; ?></a></h3>
                    <p class="text-center">All <?php echo $categoryResult['categoryName']; ?> type</p>
              <?php endwhile;
            endif;
        ?>
    </div>
    <div class="activity text-center">
      <a href="login.php" class="btn btn-primary text-center">Log Me In</a>
    </div>
  </div>      
</aside>