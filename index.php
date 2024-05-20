<?php include('layouts/header.php'); ?>

<!--Home-->
<section id="home">
  <div class="container">
    <h5>NEW ARRIVALS</h5>
    <h1><span>Best Prices</span> This Season</h1>
    <p>Eshop offers the best products for the most affordable prices</p>
    <button>Shop Now</button>
  </div>
</section>

<!--Brand-->
<section id="brand" class="container">
<div class="container text-center py-5">
  <h3>Our Brands</h3>
    <hr class="mx-auto">
  <div class="row m-0">
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/canon.jpeg" />
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/nikon.jpeg" />
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/sony.jpeg" />
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/fujifilm.jpeg" />
  </div>
</div>
</section>

<!--New-->
<section id="new" class="w-100">
  <div class="row p-0 m-0">
    <!--One-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img class="img-fluid" src="assets/images/new/cameras.jpg" />
      <div class="details">
        <h2>Latest Cameras</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>
    <!--Two-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img class="img-fluid" src="assets/images/new/lenses.jpg" />
      <div class="details">
        <h2>Latest Lenses</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>
    <!--Three-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img class="img-fluid" src="assets/images/new/tripods.jpg" />
      <div class="details">
        <h2>10% OFF Tripods</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>
  </div>
</section>

<!--Featured-->
<section id="featured" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
    <h3>Our Featured</h3>
    <hr class="mx-auto">
    <p>Here you can check out our featured products</p>
  </div>
  <div class="row mx-auto container-fluid">
    <?php include('server/get_featured_products.php'); ?>
    <?php while ($row = $featured_products->fetch_assoc()) { ?>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/products/<?php echo $row['product_image']; ?>" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
        <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
      </div>
    <?php } ?>
  </div>
</section>


<!--Banner-->
<section id="banner" class="my-5 py-5">
  <div class="container">
    <h4>MID SEASON'S SALE</h4>
    <h1>Autumn Collection <br> UP to 15% OFF</h1>
    <button class="text-uppercase">shop now</button>
  </div>
</section>


<!--Cameras-->
<section id="featured" class="my-5">
  <div class="container text-center mt-5 py-5">
    <h3>Cameras</h3>
    <hr class="mx-auto">
    <p>Here you can check out our amazing Cameras</p>
  </div>
  <div class="row mx-auto container-fluid">
    <?php include('server/get_coats.php'); ?>
    <?php while ($row = $coats_products->fetch_assoc()) { ?>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$ <?php echo $row['product_price']; ?> </h4>
        <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
      </div>
    <?php } ?>
  </div>
</section>

<!--Lenses-->
<section id="watches" class="my-5">
  <div class="container text-center mt-5 py-5">
    <h3>Best Lenses</h3>
    <hr class="mx-auto">
    <p>Check out our unique Lenses</p>
  </div>
  <div class="row mx-auto container-fluid">
    <?php include('server/get_watches.php'); ?>
    <?php while ($row = $watches->fetch_assoc()) { ?>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
        <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
      </div>
    <?php } ?>
  </div>
</section>

<!--Tripods-->
<section id="shoes" class="my-5">
  <div class="container text-center mt-5 py-5">
    <h3>Tripods</h3>
    <hr class="mx-auto">
    <p>Here you can check out our Tripods</p>
  </div>
  <div class="row mx-auto container-fluid">
    <?php include('server/get_shoes.php'); ?>
    <?php while ($row = $shoes->fetch_assoc()) { ?>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
        <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
      </div>
    <?php } ?>
  </div>
</section>

<?php include('layouts/footer.php'); ?>