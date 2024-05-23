<?php include('layouts/header.php'); ?>

<!--Home-->
<section id="home" class="d-flex align-items-center" style="height: 100vh;">
  <div class="container text-center">
    <h5 class="text-uppercase text-muted">New Arrivals</h5>
    <h1><span class="text-primary">Best Prices</span> This Season</h1>
    <p class="lead">Eshop offers the best products for the most affordable prices</p>
    <button class="btn btn-primary btn-lg">Shop Now</button>
  </div>
</section>

<!--Brand-->
<section id="brand" class="py-5 bg-white">
  <div class="container text-center">
    <h3 class="mb-4">Our Brands</h3>
    <hr class="mx-auto w-25">
    <div class="row justify-content-center">
      <div class="col-lg-2 col-md-3 col-6 mb-3">
        <img class="img-fluid" src="assets/images/brands/canon.jpeg" alt="Canon" />
      </div>
      <div class="col-lg-2 col-md-3 col-6 mb-3">
        <img class="img-fluid" src="assets/images/brands/nikon.jpeg" alt="Nikon" />
      </div>
      <div class="col-lg-2 col-md-3 col-6 mb-3">
        <img class="img-fluid" src="assets/images/brands/sony.jpeg" alt="Sony" />
      </div>
      <div class="col-lg-2 col-md-3 col-6 mb-3">
        <img class="img-fluid" src="assets/images/brands/fujifilm.jpeg" alt="Fujifilm" />
      </div>
    </div>
  </div>
</section>

<!--New-->
<section id="new" class="w-100 py-5 bg-light">
  <div class="container">
    <div class="row">
      <!--One-->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card border-0">
          <img class="card-img-top" src="assets/images/new/cameras.jpg" alt="Latest Cameras">
          <div class="card-body text-center">
            <h2 class="card-title">Latest Cameras</h2>
            <button class="btn btn-outline-primary text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
      <!--Two-->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card border-0">
          <img class="card-img-top" src="assets/images/new/lenses.jpg" alt="Latest Lenses">
          <div class="card-body text-center">
            <h2 class="card-title">Latest Lenses</h2>
            <button class="btn btn-outline-primary text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
      <!--Three-->
      <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="card border-0">
          <img class="card-img-top" src="assets/images/new/tripods.jpg" alt="10% OFF Tripods">
          <div class="card-body text-center">
            <h2 class="card-title">10% OFF Tripods</h2>
            <button class="btn btn-outline-primary text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Featured-->
<section id="featured" class="my-5 py-5">
  <div class="container text-center">
    <h3 class="mb-4">Our Featured</h3>
    <hr class="mx-auto w-25">
    <p>Here you can check out our featured products</p>
    <div class="row">
      <?php include('server/get_featured_products.php'); ?>
      <?php while ($row = $featured_products->fetch_assoc()) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card border-0">
            <img class="card-img-top" src="assets/images/products/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
            <div class="card-body text-center">
              <div class="star text-warning mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
              <h4 class="card-price text-primary">R <?php echo $row['product_price']; ?></h4>
              <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!--Banner-->
<section id="banner" class="my-5 py-5 text-white text-center">
  <div class="container">
    <h4>MID SEASON'S SALE</h4>
    <h1>Autumn Collection <br> UP to 15% OFF</h1>
    <button class="btn btn-outline-light text-uppercase">Shop Now</button>
  </div>
</section>

<!--Cameras-->
<section id="cameras" class="my-5">
  <div class="container text-center">
    <h3 class="mb-4">Cameras</h3>
    <hr class="mx-auto w-25">
    <p>Here you can check out our amazing Cameras</p>
    <div class="row">
      <?php include('server/get_cameras.php'); ?>
      <?php while ($row = $cameras_products->fetch_assoc()) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card border-0">
            <img class="card-img-top" src="assets/images/products/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
            <div class="card-body text-center">
              <div class="star text-warning mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
              <h4 class="card-price text-primary">R <?php echo $row['product_price']; ?></h4>
              <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!--Lenses-->
<section id="lenses" class="my-5">
  <div class="container text-center">
    <h3 class="mb-4">Best Lenses</h3>
    <hr class="mx-auto w-25">
    <p>Check out our unique Lenses</p>
    <div class="row">
      <?php include('server/get_lenses.php'); ?>
      <?php while ($row = $lenses->fetch_assoc()) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card border-0">
            <img class="card-img-top" src="assets/images/products/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
            <div class="card-body text-center">
              <div class="star text-warning mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
              <h4 class="card-price text-primary">R <?php echo $row['product_price']; ?></h4>
              <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!--Tripods-->
<section id="tripods" class="my-5">
  <div class="container text-center">
    <h3 class="mb-4">Tripods</h3>
    <hr class="mx-auto w-25">
    <p>Here you can check out our Tripods</p>
    <div class="row">
      <?php include('server/get_tripods.php'); ?>
      <?php while ($row = $tripods->fetch_assoc()) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card border-0">
            <img class="card-img-top" src="assets/images/products/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
            <div class="card-body text-center">
              <div class="star text-warning mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
              <h4 class="card-price text-primary">R <?php echo $row['product_price']; ?></h4>
              <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>


<?php include('layouts/footer.php'); ?>