<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact</title>

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
<div class="wrapper">

 <?php include('header.php') ?>
  
  <main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img mt-80" data-bg-img="assets/img/photos/bg-page3.jpg" style="background: #f320a2;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">Contact Us</h2>
              <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">></span></a><span class="active">Contact Us</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Contact Area ==-->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class=" col-lg-7">
            <div class="contact-form">
            <form class="contact-form-wrapper form-style" id="contact-form" action="insertcontact.php" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2 class="title">Contact us for any questions</h2>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" type="text" name="con_name" placeholder="Name*" oninput="validateName(this)" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" type="email" name="con_email" placeholder="Email*" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" type="text" name="con_phone" placeholder="Phone Number" oninput="validatePhoneNumber(this)">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group mb-0">
                <textarea class="form-control textarea" name="con_message" placeholder="How can we help?" oninput="validateMessage(this)" required></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group mb-0">
                <button class="btn btn-theme btn-black" type="submit">Send Message</button>
            </div>
        </div>
    </div>
</form>

              <!-- Message Notification -->
              <div class="form-message"></div>
            </div>
          </div>
          <div class=" col-lg-5">
            <div class="contact-info-wrapper">
              <div class="section-title">
                <h2 class="title">Get info</h2>
              </div>
              <div class="contact-info-content">
                <div class="align-top">
                  <div class="contact-info-item">
                    <div class="icon">
                     <i class="lastudioicon lastudioicon-pin-3-2"></i>
                    </div>
                    <div class="content">
                      <h4>Goodluck Enterprises</h4>
                      <p>
Gala No 126, Vora Industrial Estate No 4, 1st Floor, Premises Co-Op Hsc Soc Ltd, Village Navghar, District Thane, Ghodbunder, Vasai - 401210, Palghar, Maharashtra, India</p>
                    </div>
                  </div>
               
                </div>
                <div class="align-bottom">
                  <div class="contact-info-item info-item2">
                    <div class="icon">
                      <span><i class="lastudioicon lastudioicon-mail"></i></span>                      
                    </div>
                    <div class="content">
                      <p>info@goodluck.com</p>
                    </div>
                  </div>
                  <div class="contact-info-item">
                    <div class="icon">
                      <span><i class="lastudioicon lastudioicon-phone-call-2"></i></span>                      
                    </div>
                    <div class="content">
                      <p>+91 8046 0451 001</p>
                    </div>
                  </div>
                  <div class="contact-info-item social-icons-item mb-0 pb-0">
                    <div class="content">
                      <div class="social-widget">
                        <a href="#/"><i class="lastudioicon lastudioicon-b-facebook"></i></a>
                        <a href="#/"><i class="lastudioicon lastudioicon-b-pinterest"></i></a>
                        <a href="#/"><i class="lastudioicon lastudioicon-b-twitter"></i></a>
                        <a href="#/"><i class="lastudioicon lastudioicon-b-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area ==-->

    <!--== Start Map Area ==-->
    <div class="contact-map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3765.635638816744!2d72.8701300752109!3d19.298204981952615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDE3JzUzLjUiTiA3MsKwNTInMjEuNyJF!5e0!3m2!1sen!2sin!4v1735882803651!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--== End Map Area ==-->
  </main>

<?php include('footer.php') ?>

<?php include('sidebar.php') ?>
<!--=======================Javascript============================-->
<!-- Include SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
// Form submission handling with SweetAlert
document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Show loading alert
    Swal.fire({
        title: 'Submitting...',
        text: 'Please wait while your inquiry is being submitted.',
        icon: 'info',
        allowOutsideClick: false,
        showConfirmButton: false,
        willOpen: () => {
            Swal.showLoading();
        }
    });

    // Create a FormData object
    const formData = new FormData(this);

    // Send the form data using fetch
    fetch('insertcontact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        Swal.close(); // Close the loading alert

        if (data.success) {
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Message Sent',
                text: 'We will contact you soon!',
                timer: 2000,
                showConfirmButton: false
            });
            // Reset the form
            document.getElementById('contact-form').reset();
        } else {
            // Show error message
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.error || 'Something went wrong. Please try again.',
                timer: 2000,
                showConfirmButton: false
            });
        }
    })
    .catch(error => {
        Swal.close(); // Close the loading alert
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An unexpected error occurred.',
            timer: 2000,
            showConfirmButton: false
        });
    });
});

// Input validation functions
function validatePhoneNumber(input) {
    input.value = input.value.replace(/[^0-9]/g, '').slice(0, 10);
}

function validateName(input) {
    input.value = input.value.replace(/[^0-9a-zA-Z,. ]/g, '');
}

function validateMessage(input) {
    input.value = input.value.replace(/[^0-9a-zA-Z,. ]/g, '');
}
</script>
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