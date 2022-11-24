<!doctype html>
<html lang="vn">


<!-- Mirrored from risingtheme.com/html/suruchi-demo/suruchi/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 08:59:47 GMT -->
<head>
  <meta charset="utf-8">
  <title>Đồ da T&T</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="https://file.hstatic.net/200000532555/file/logo_bong_hoa_45c8e9e2088448ad89c72b0377a245a2.png" type="image/png">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- Start preloader -->
    <?php include('./layout/bases/loading.php') ?>

    <?php
			session_start();
			include("./admin/config/config.php");
			include("./layout/main/header.php");	
			include("./layout/main/body.php");
			include("./layout/main/footer.php");
			
		?>
    
    <!-- Quickview Wrapper -->
    <?php include('./layout/bases/modal-detail.php') ?>

    <!-- Start News letter popup -->
     

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
  <!-- All Script JS Plugins here  -->
  <!-- <script src="assets/js/vendor/popper.js" defer="defer"></script> -->
  <!-- <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script> -->
  
  <script src="assets/js/plugins/swiper-bundle.min.js"></script>
  <script src="assets/js/plugins/glightbox.min.js"></script>

  <!-- Customscript js -->
  <script src="assets/js/script.js"></script>
  
</body>

<!-- Mirrored from risingtheme.com/html/suruchi-demo/suruchi/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 09:00:19 GMT -->
</html>