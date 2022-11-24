<main class="main__content_wrapper">
    <?php 
    if(isset($_GET['page']))
    {
        $temp = $_GET['page'];
    }
    else
    {
        $temp = '';
    }

    // Trang chủ
    if($temp == 'home')
    {
        include("layout/pages/home.php");
    }


    else if($temp == 'detail')
    {
        include("layout/pages/product_details.php");
    }

    // Cửa hàng
    else if($temp == 'shop')
    {
        include("layout/pages/shop.php");
    }

    else if($temp == 'shopall')
    {
        include("layout/pages/shopall.php");
    }

    else if($temp == 'timkiem')
    {
        include("layout/pages/timkiem.php");
    }

    // Giỏ hàng
    elseif($temp=='cart'){	
        include("layout/pages/cart.php");
    }

    // Thanh toán
    elseif($temp=='checkout'){	
        include("layout/pages/checkout.php");
    }

    elseif($temp=='sendorders'){	
        include("layout/pages/sendorders.php");
    }

    // Trang tài khoản
    elseif($temp=='myorder'){	
        include("layout/pages/myorder.php");
    }

    elseif($temp=='myhistory'){	
        include("layout/pages/myhistory.php");
    }

    elseif($temp=='myaddress'){	
        include("layout/pages/myaddress.php");
    }

    elseif($temp=='thankiu'){	
        include("layout/pages/thankiu.php");
    }

    elseif($temp=='account'){	
        include("layout/pages/account.php");
    }
    elseif($temp=='replacepassword'){	
        include("layout/pages/replacepassword.php");
    }
    elseif($temp=='orderdetails'){	
        include("layout/pages/order_details.php");
    }


    // Đăng nhập
    elseif($temp=='login'){	
        include("layout/pages/login.php");
    }

    //Đăng ký
    elseif($temp=='register'){	
        include("layout/pages/register.php");
    }

    //Giới thiệu
    else if($temp == 'about')
    {
        include("layout/pages/about.php");
    }

    //Liên hệ
    else if($temp == 'contact')
    {
        include("layout/pages/contact.php");
    }

    //Tài khoản
    else if($temp == 'myaccount')
    {
        include("layout/pages/my-account.php");
    }

    //Tài khoản
    else if($temp == 'wishlist')
    {
        include("layout/pages/wishlist.php");
    }

    else
    {
        include("layout/pages/home.php");
    }
?>
</main>

