<!--== Start Preloader Content ==-->
<style>
  .container1 {
    --uib-size: 45px;
    --uib-color: black;
    --uib-speed: 1.75s;
    --uib-bg-opacity: .1;
    height: 31.25px;
    width: 50px;
    transform-origin: center;
    overflow: visible;
  }

  .car {
    stroke: var(--uib-color);
    stroke-dasharray: 100;
    stroke-dashoffset: 0;
    stroke-linecap: round;
    stroke-linejoin: round;
    animation:
      travel var(--uib-speed) ease-in-out infinite,
      fade var(--uib-speed) ease-out infinite;
    will-change: stroke-dasharray, stroke-dashoffset;
    transition: stroke 0.5s ease;
  }

  .track {
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke: var(--uib-color);
    opacity: var(--uib-bg-opacity);
  }

  @keyframes travel {
    0% {
      stroke-dashoffset: 100;
    }

    75% {
      stroke-dashoffset: 0;
    }
  }

  @keyframes fade {
    0% {
      opacity: 0;
    }

    20%,
    55% {
      opacity: 1;
    }

    100% {
      opacity: 0;
    }
  }
</style>
<div class="preloader-wrap">
    <div class="preloader">
    <svg
  class="container1" 
  x="0px" 
  y="0px"
  viewBox="0 0 50 31.25"
  height="31.25"
  width="50"
  preserveAspectRatio='xMidYMid meet'
>
  <path 
    class="track"
    stroke-width="4" 
    fill="none" 
    pathlength="100"
    d="M0.625 21.5 h10.25 l3.75 -5.875 l7.375 15 l9.75 -30 l7.375 20.875 v0 h10.25"
  />
  <path 
    class="car"
    stroke-width="4" 
    fill="none" 
    pathlength="100"
    d="M0.625 21.5 h10.25 l3.75 -5.875 l7.375 15 l9.75 -30 l7.375 20.875 v0 h10.25"
  />
</svg>



    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default header-style2 header-transparent sticky-header">
    <div class="container-fluid">
      <div class="row row-gutter-0 align-items-center">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-left">
              <div class="header-logo-area">
                <a href="index.php">
                  <img class="logo-main " src="assets/img/logo.png" alt="Logo" style="width:95px">
                  <!-- <img class="logo-main d-sm-none" src="assets/img/logo.png" alt="Logo" style="filter:invert(1)"> -->
                
                </a>
              </div>
              <div class="header-navigation-area d-none d-xl-block">
                <ul class="main-menu nav justify-content-center position-relative">
                  <li class="has active"><a href="index.php">Home</a>
                    <!-- <ul class="submenu-nav">
                      <li><a href="index.html">Main 01</a></li>
                      <li><a href="index-2.html">Main 02</a></li>
                      <li><a href="index-3.html">Main 03</a></li>
                      <li><a href="index-4.html">Main 04</a></li>
                      <li><a href="index-5.html">Main 05</a></li>
                      <li><a href="index-6.html">Main 06</a></li>
                      <li><a href="index-7.html">Main 07</a></li>
                    </ul> -->
                  </li>
                 

                  <li class="has"><a href="collections.php">Collections</a> </li>
                  <li class="has"><a href="about.php">About Us</a> </li>
<!-- 
                  <li><a href="shop-collections.html">Collections</a></li>
                  <li class="has-submenu"><a href="blog.html">Blog</a>
                    <ul class="submenu-nav">
                      <li><a href="blog.html">Blog Grid Left Sidebar</a></li>
                      <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                      <li><a href="blog-grid-no-sidebar.html">Blog Grid No Sidebar</a></li>
                      <li><a href="blog-details-left-sidebar.html">Blog Single Left Sidebar</a></li>
                      <li><a href="blog-details-right-sidebar.html">Blog Single Right Sidebar</a></li>
                      <li><a href="blog-details-no-sidebar.html">Blog Single No Sidebar</a></li>
                    </ul>
                  </li> -->
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="header-align-right">
              <div class="header-action-area">
                <div class="header-action-search-form">
                  <!-- <div class="search-form">
                    <form action="#" method="post">
                      <div class="form-input-item">
                        <label for="action-search" class="sr-only">Search</label>
                        <input type="text" id="action-search" placeholder="Search">
                      </div>
                    </form>
                  </div> -->
                </div>
                <!-- <div class="header-action-search">
                  <button class="btn-search btn-search-menu">
                    <i class="lastudioicon-zoom-1"></i>
                  </button>
                </div>
                <div class="header-action-login">
                  <button class="btn-login" onclick="window.location.href='login.html'">
                    <i class="lastudioicon-single-01-2"></i>
                  </button>
                </div>
                <div class="header-action-cart">
                  <button class="btn-cart cart-icon">
                    <span class="cart-count">2</span>
                    <i class="lastudioicon-shopping-cart-2"></i>
                  </button>
                </div>
                <div class="header-action-account d-none d-xxl-block">
                  <button class="btn-sign-up" onclick="window.location.href='login.html'">
                    Sign Up
                  </button>
                </div>-->
                <button class="btn-menu d-xl-none">
                  <i class="lastudioicon-menu-3-1"></i>
                </button> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->