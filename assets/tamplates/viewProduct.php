<div class="col-md-4 col-sm-6 my-2">
	<div class="card m-auto job" style="width: 20rem;">
		<div class="card-body">
            <p><?= $product['categoryName']; ?></p>
                <a href="viewProductInfo.php?productInfo=<?php echo $product['productId']; ?>" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="upload/<?= $product['productImage']; ?>" alt="product img" style="height: 140px; width: 100%;">
                </a>
            <h5 class="font-weight-semi-bold m-0"><?= $product['productName']; ?></h5>
        </div>
    </div>
</div>