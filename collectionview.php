<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

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
</style>
<body>

<!--wrapper start-->
<div class="wrapper shop-fullwidth-wrapper">

  <?php include('header.php') ?>
  
  <main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page1.jpg" style="opacity:0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">Shop Fullwidth</h2>
              <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span class="active">Shop</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Products Area Wrapper ==-->
    <div class="product-area shop-fullwidth-area style-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shop-toolbar-wrap">
              <div class="shop-toolbar-left">
                <div class="product-showing-status">
                  <p class="count-result">Showing 1–12 of 88 results</p>
                </div>
              </div>
              <div class="shop-toolbar-right">
                <div class="product-sorting-menu product-view-count">
                  <span class="current">Show 12 <i class="lastudioicon-down-arrow"></i></span>
                  <ul>
                    <li class="active"><a href="shop.html" class="active">Show 12</a></li>
                    <li><a href="shop.html">Show 15</a></li>
                    <li><a href="shop.html">Show 30</a></li>
                  </ul>
                </div>
                <div class="product-sorting-menu product-view-count">
                  <span class="current">Filters <i class="lastudioicon-down-arrow"></i></span>
                  <ul>
                    <li class="active"><a href="shop.html" class="active">Filters</a></li>
                    <li><a href="shop.html">Categories</a></li>
                    <li><a href="shop.html">Tags</a></li>
                  </ul>
                </div>
                <div class="product-sorting-menu product-sorting">
                  <span class="current">Sort by Default <i class="lastudioicon-down-arrow"></i></span>
                  <ul>
                    <li class="active"><a href="shop.html" class="active">Sort by Default</a></li>
                    <li><a href="shop.html">Sort by Popularity</a></li>
                    <li><a href="shop.html">Sort by Rated</a></li>
                    <li><a href="shop.html">Sort by Latest</a></li>
                    <li><a href="shop.html">Sort by Price: <i class="lastudioicon-arrow-up"></i></a></li>
                    <li><a href="shop.html">Sort by Price: <i class="lastudioicon-arrow-down"></i></a></li>
                  </ul>
                </div>
                <div class="product-view-mode">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="lastudioicon-list-bullet-2"></i></button>
                      <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="lastudioicon-microsoft"></i></button>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
              <?php
// Database Connection
include('db_connection.php');

// Fetch All Products
$sql = "SELECT id, title, price, image1 FROM products";
$result = $conn->query($sql);
?>

<div class="row row-gutter-60" data-aos="fade-up" data-aos-duration="1000">
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-sm-6 col-lg-4">
            <!-- Start Product Item -->
            <div class="product-item">
                <div class="product-thumb">
                    <a href="collectiondetails.php?id=<?= $row['id']; ?>">
                        <img src="productimage/<?= $row['image1']; ?>" alt="<?= $row['title']; ?>">
                        <span class="thumb-overlay"></span>
                    </a>
                </div>
                <div class="product-info">
                    <div class="content-inner">
                        <h4 class="title"><a href="collectiondetails.php?id=<?= $row['id']; ?>"><?= $row['title']; ?></a></h4>
                        <div class="prices">
                            <span class="price"> ₹<?= $row['price']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Item -->
        </div>
    <?php endwhile; ?>
</div>


<?php
// Close Database Connection
$conn->close();
?>
              </div>
              
            </div>
            <div class="pagination-area">
              <nav>
                <ul class="page-numbers">
                  <li>
                    <a class="page-number active" href="blog.html">1</a>
                  </li>
                  <li>
                    <a class="page-number" href="blog.html">2</a>
                  </li>
                  <li>
                    <a class="page-number" href="blog.html">3</a>
                  </li>
                  <li>
                    <a class="page-number" href="blog.html">4</a>
                  </li>
                  <li>
                    <a class="page-numbe" href="blog.html">…</a>
                  </li>
                  <li>
                    <a class="page-number" href="blog.html">6</a>
                  </li>
                  <li>
                    <a class="page-number" href="blog.html">7</a>
                  </li>
                  <li>
                    <a class="page-number" href="blog.html">8</a>
                  </li>
                  <li>
                    <a class="page-number next" href="blog.html">
                      <i class="icofont-long-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Products Area Wrapper ==-->
  </main>

 
  


  <?php include('footer.php') ?>
  <?php include('sidebar.php') ?>
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