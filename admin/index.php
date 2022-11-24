<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
   header('Location:login.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.admireadmin.com/admire2/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 04:58:19 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
   <meta charset="UTF-8">
   <title>Home | Manager</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="img/favicon.png" />
   <link type="text/css" rel="stylesheet" href="css/components.css" />
   <link type="text/css" rel="stylesheet" href="css/custom.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
   <link type="text/css" rel="stylesheet" href="vendors/c3/css/c3.min.css" />
   <link type="text/css" rel="stylesheet" href="vendors/toastr/css/toastr.min.css" />
   <link type="text/css" rel="stylesheet" href="vendors/switchery/css/switchery.min.css" />
   <link type="text/css" rel="stylesheet" href="css/pages/new_dashboard.css" />
   <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body class="body">
   <div class="preloader" style=" position: fixed;
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         z-index: 100000;
         backface-visibility: hidden;
         background: #ffffff;">
      <div class="preloader_img" style="width: 200px;
            height: 200px;
            position: absolute;
            left: 48%;
            top: 48%;
            background-position: center;
            z-index: 999999">
         <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
      </div>
   </div>
   <div id="wrap">
      <?php
      include("config/config.php");
      include("modules/header.php");
      ?>
      <div class="wrapper">
         <?php
         include("modules/menu.php");
         include("modules/main.php");
         ?>
      </div>

   </div>
   <script type="text/javascript" src="js/components.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
   <script type="text/javascript" src="vendors/slimscroll/js/jquery.slimscroll.min.js"></script>
   <script type="text/javascript" src="vendors/raphael/js/raphael.min.js"></script>
   <script type="text/javascript" src="vendors/d3/js/d3.min.js"></script>
   <script type="text/javascript" src="vendors/c3/js/c3.min.js"></script>
   <script type="text/javascript" src="vendors/toastr/js/toastr.min.js"></script>
   <script type="text/javascript" src="vendors/switchery/js/switchery.min.js"></script>
   <script type="text/javascript" src="vendors/flotchart/js/jquery.flot.js"></script>
   <script type="text/javascript" src="vendors/flotchart/js/jquery.flot.resize.js"></script>
   <script type="text/javascript" src="vendors/flotchart/js/jquery.flot.stack.js"></script>
   <script type="text/javascript" src="vendors/flotchart/js/jquery.flot.time.js"></script>
   <script type="text/javascript" src="vendors/flotspline/js/jquery.flot.spline.min.js"></script>
   <script type="text/javascript" src="vendors/flotchart/js/jquery.flot.categories.js"></script>
   <script type="text/javascript" src="vendors/flotchart/js/jquery.flot.pie.js"></script>
   <script type="text/javascript" src="vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script type="text/javascript" src="vendors/jquery_newsTicker/js/newsTicker.js"></script>
   <script type="text/javascript" src="vendors/countUp.js/js/countUp.min.js"></script>
   <!-- <script type="text/javascript" src="js/pages/new_dashboard.js"></script> -->

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   <script type="text/javascript">
      new Morris.Area({
         // ID of the element in which to draw the chart.
         element: 'myfirstchart',
         // Chart data records -- each entry in this array corresponds to a point on
         // the chart.
         data: [{
               date: '2/10/2022',
               order: 2,
               sales: 20000000,
               quantity: 1000000
            },
            {
               date: '7/10/2022',
               order: 1,
               sales: 10000000,
               quantity: 1000000
            },
            {
               date: '10/10/2022',
               order: 5,
               sales: 3000000,
               quantity: 1000000
            },
            {
               date: '14/10/2022',
               order: 5,
               sales: 7000000,
               quantity: 1000000
            },
            {
               date: '22/10/2022',
               order: 2,
               sales: 20000000,
               quantity: 1000000
            }
         ],
         // The name of the data record attribute that contains x-values.
         xkey: 'date',
         // A list of names of data record attributes that contain y-values.
         ykeys: ['date', 'order', 'sales', 'quantity'],
         // Labels for the ykeys -- will be displayed when you hover over the
         // chart.
         labels: ['Năm', 'Số đơn hàng', 'Doanh thu', 'Số sản phẩm ']
      });
      // $(document).ready(function() {
      //    thongke();
      //    var char = new Morris.Bar({

      //       element: 'chart',

      //       xkey: 'date',

      //       ykeys: ['date', 'order', 'sales', 'quantity'],

      //       labels: ['Năm', 'Số đơn hàng', 'Doanh thu', 'Số sản phẩm ']
      //    });

      //    var charLine = new Morris.Line({

      //       element: 'chartLine',

      //       xkey: 'date',

      //       ykeys: ['date', 'order', 'sales', 'quantity'],

      //       labels: ['Năm', 'Số đơn hàng', 'Doanh thu', 'Số sản phẩm ']
      //    });

      //    $('.select-date').change(function() {
      //       var thoigian = $(this).val();
      //       if (thoigian == '7ngay') {
      //          var text = '7 ngày qua';
      //       } else if (thoigian == '28ngay') {
      //          var text = '28 ngày qua';
      //       } else if (thoigian == '90ngay') {
      //          var text = '90 ngày qua';
      //       } else {
      //          var text = '365 ngày qua';
      //       }

      //       $.ajax({
      //          url: "modules/thongke.php",
      //          method: "POST",
      //          dataType: "JSON",
      //          data: {
      //             thoigian: thoigian
      //          },
      //          success: function(data) {
      //             char.setData(data);
      //             charLine.setData(data);
      //             $('#text-date').text(text);
      //          }
      //       });
      //    })

      //    function thongke() {
      //       var text = '7 ngày qua';
      //       $('#text-date').text(text);
      //       $.ajax({
      //          url: "modules/thongke.php",
      //          method: "POST",
      //          dataType: "JSON",
      //          success: function(data) {
      //             char.setData(data);
      //             charLine.setData(data);
      //             $('#text-date').text(text);
      //          }
      //       });
      //    }
      // });
   </script>
</body>
<!-- Mirrored from demo.admireadmin.com/admire2/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 04:58:34 GMT -->

</html>