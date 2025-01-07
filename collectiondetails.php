<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--== Google Fonts ==-->
    <link href="../../css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="../../css-1?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="../../css-2?family=Poppins:300,300i,400,400i,500,600,700,900,900i" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--== Icofont Min Icons CSS ==-->
    <link href="assets/css/icofont.min.css" rel="stylesheet">
    <!--== lastudioIcons CSS ==-->
    <link href="assets/css/lastudioIcons.css" rel="stylesheet">
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet">
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet">
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <!--== Slick CSS ==-->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
  .header-area.header-transparent {
    background-color: #000000!important;
  }
  .product-category i {
  margin-right: 5px; /* Space between the icon and text */
  color: #333;       /* Example color */
}
</style>
<body>

<!--wrapper start-->
<div class="wrapper products-single-wrapper">

 <?php include('header.php') ?>
  
  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img mt-80" data-bg-img="assets/img/photos/bg-page3.jpg" style="background: #f320a2;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">Collection </h2>
              <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">></span></a><span class="active">Collection</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Shop Area ==-->
    <section class="product-area shop-single-product mt-100">
    <?php
// Database Connection
include('db_connection.php');
// Fetch Product Data
$product_id = $_GET['id']; // Replace with the actual product ID or fetch dynamically
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "No product found.";
    exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="single-product-slider">
                <div class="product-dec-slider-right">
                    <div class="single-product-thumb">
                        <div class="single-product-thumb-slider">
                            <div class="zoom ">
                                <div class="thumb-item">
                                    <a class="lightbox-image" data-fancybox="gallery" href="<?= $product['image1']; ?>">
                                        <img src="productimage/<?= $product['image1']; ?>" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                            <div class="zoom ">
                                <div class="thumb-item">
                                    <a class="lightbox-image" data-fancybox="gallery" href="<?= $product['image2']; ?>">
                                        <img src="productimage/<?= $product['image2']; ?>" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                            <div class="zoom ">
                                <div class="thumb-item">
                                    <a class="lightbox-image" data-fancybox="gallery" href="<?= $product['image3']; ?>">
                                        <img src="productimage/<?= $product['image3']; ?>" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-dec-slider-left">
                <div class="single-product-nav">
                  <div class="single-product-nav-slider">
                    <div class="nav-item">
                    <img src="productimage/<?= $product['image1']; ?>" alt="Product Image">
                    </div>
                    <div class="nav-item">
                    <img src="productimage/<?= $product['image2']; ?>" alt="Product Image">
                    </div>
                    <div class="nav-item">
                    <img src="productimage/<?= $product['image3']; ?>" alt="Product Image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-product-info">
                <h4 class="title"><?= $product['title']; ?></h4>
                <div class="prices">
                    <span class="price"> ₹<?= $product['price']; ?></span>
                </div>
                <p class="product-desc"><?= $product['description']; ?></p>
                <div class="product-categorys">
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Bra Type: <span><?= $product['bra_type']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Padding: <span><?= $product['padding']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Wiring: <span><?= $product['wiring']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Shape: <span><?= $product['shape']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Usage/Application: <span><?= $product['usage_application']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Fabric: <span><?= $product['fabric']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Color: <span><?= $product['color']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Pattern: <span><?= $product['pattern']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Size: <span><?= $product['size']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Wash Care: <span><?= $product['wash_care']; ?></span></div>
                    <div class="product-category"><i class="bi bi-check-circle-fill"></i> Coverage: <span><?= $product['coverages']; ?></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>
    <!--== End Shop Area ==-->

    <!--== Start Shop Tab Area ==-->
    <!-- <section class="product-area product-description-review-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-description-review">
              <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#productDesc" type="button" role="tab" aria-controls="productDesc" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#productReview" type="button" role="tab" aria-controls="productReview" aria-selected="false">Reviews (1)</button>
                </li>
              </ul>
              <div class="tab-content product-description-tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="productDesc" role="tabpanel" aria-labelledby="product-desc-tab">
                  <div class="product-desc">
                    <div class="product-desc-row">
                      <div class="product-thumb">
                        <img src="assets/img/shop/93.jpg" alt="Moren-Shop">
                      </div>
                      <div class="product-content">
                        <h4>Made with love</h4>
                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at.</p>
                        <p>Duis efficitur gravida tincidunt. Nam sodales vel odio at sollicitudin. Vestibulum sed rutrum nisl. Nulla diam arcu, facilisis nec blandit non, interdum et orci. Nam aliquam lorem vitae risus molestie convallis.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="productReview" role="tabpanel" aria-labelledby="product-review-tab">
                  <div class="product-review">
                    <div class="product-review-comments">
                      <h4 class="title">1 review for <span>Product Simple</span></h4>
                      <div class="comment-item">
                        <div class="thumb">
                          <img src="assets/img/icons/s1.jpg" alt="Moren-Shop">
                        </div>
                        <div class="content">
                          <div class="rating">
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                          </div>
                          <h5 class="meta"><span>Agnes Wilson </span> – December 24, 2020</h5>
                          <span class="review">There are no reviews yet.</span>
                        </div>
                      </div>
                    </div>
                    <div class="product-review-form">
                      <h3 class="title">Add a review</h3>
                      <div class="rating">
                        <span class="rating-title">Your rating *</span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                      </div>
                      <form action="#" method="post">
                        <div class="review-form-content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="reviewFormTextarea">Your review *</label>
                                <textarea class="form-control" id="reviewFormTextarea" name="comment" rows="7" required=""></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <button class="btn btn-theme btn-black" type="submit">Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--== End Shop Tab Area ==-->

    <!--== Start Products Area Wrapper ==-->
    <section class="product-area related-products-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Related Products</h2>
            </div>
          </div>
        </div>
      <?php
// Database Connection
include('db_connection.php');

// Fetch All Products
$sql = "SELECT id, title, price, image1 FROM products";
$result = $conn->query($sql);
?>

<div class="row">
    <div class="col-12">
        <div class="swiper-container product4-slider-container">
            <div class="swiper-wrapper">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="swiper-slide">
                        <!-- Start Product Item -->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="collectiondetails.php?id=<?= $row['id']; ?>">
                                    <img src="productimage/<?= $row['image1']; ?>" alt="<?= $row['title']; ?>">
                                    <span class="thumb-overlay"></span>
                                </a>
                              
                            </div>
                            <div class="product-info info-style3">
                                <div class="content-inner">
                                    <h4 class="title">
                                        <a href="collectiondetails.php?id=<?= $row['id']; ?>"><?= $row['title']; ?></a>
                                    </h4>
                                    <div class="prices">
                                        <span class="price">₹<?= $row['price']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 text-center">
    <a href="collections.php" class="btn-theme btn-black btn-border btn-padding mt-20">View more</a>
</div>

<?php
// Close Database Connection
$conn->close();
?>

      </div>
    </section>
    <!--== End Products Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
<?php include('footer.php') ?>
<?php include('footer.php') ?>
<!--=======================Javascript============================-->

<!--=== Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jquery Appear Js ===-->
<script src="assets/js/jquery.appear.js"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jquery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>
<!--=== jquery Slicknav Js ===-->
<script src="assets/js/jquery.slicknav.js"></script>
<!--=== jquery Countdown Js ===-->
<script src="assets/js/jquery.countdown.min.js"></script>
<!--=== jquery Tippy Js ===-->
<script src="assets/js/tippy.all.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--=== jquery Vivus Js ===-->
<script src="assets/js/vivus.js"></script>
<!--=== Parallax Min Js ===-->
<script src="assets/js/parallax.min.js"></script>
<!--=== Slick  Min Js ===-->
<script src="assets/js/slick.min.js"></script>
<!--=== jquery Wow Min Js ===-->
<script src="assets/js/wow.min.js"></script>
<!--=== jquery Zoom Min Js ===-->
<script src="assets/js/jquery-zoom.min.js"></script>

<!--=== Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>