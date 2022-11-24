<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$tongtien = 0;
?>
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Giỏ Hàng</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Giỏ hàng</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container-fluid">
            <div class="cart__section--inner">
                <form action="#">

                    <h4 class="cart__title mb-40"><?php
                                                    if (isset($_SESSION['dangky'])) {
                                                        echo 'Xin chào: ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';
                                                    }
                                                    ?></h4>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart__table">
                                <table class="cart__table--inner">
                                    <thead class="cart__table--header">
                                        <tr class="cart__table--header__items">
                                            <th class="cart__table--header__list">Sản phẩm</th>
                                            <th class="cart__table--header__list">Giá</th>
                                            <th class="cart__table--header__list">Số lượng</th>
                                            <th class="cart__table--header__list">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__table--body">
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $i = 0;
                                            foreach ($_SESSION['cart'] as $cart_item) {
                                                $thanhtien = $cart_item['SoLuong'] * ($cart_item['GiaBan'] - ($cart_item['GiaBan'] / 100 * $cart_item['KhuyenMai']));
                                                $tongtien += $thanhtien;
                                                $_SESSION['tongtien'] = $tongtien;
                                                $i++;
                                        ?>
                                                <tr class="cart__table--body__items">
                                                    <td class="cart__table--body__list">
                                                        <div class="cart__product d-flex align-items-center">
                                                            <a href="layout/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">
                                                                <button class="cart__remove--btn" aria-label="search button" type="button">
                                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                                        <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                                    </svg>
                                                                </button>
                                                            </a>
                                                            <div class="cart__thumbnail">
                                                                <a href="index.php?page=detail&id=<?php echo $cart_item['id'] ?>"><img class="border-radius-5" src="admin/modules/quanlysanpham/uploads/<?php echo $cart_item['HinhAnh']; ?>" alt="cart-product"></a>
                                                            </div>
                                                            <div class="cart__content">
                                                                <h4 class="cart__content--title"><a href="index.php?page=detail&id=<?php echo $cart_item['id'] ?>"><?php echo $cart_item['TenSP'] ?></a></h4>
                                                                <!-- <span class="cart__content--variant">Màu : </span> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price">₫<?php echo number_format($cart_item['GiaBan'] - ($cart_item['GiaBan'] / 100 * $cart_item['KhuyenMai'])) ?></span>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <div class="quantity__box">
                                                            <a href="layout/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button></a>
                                                            <label>
                                                                <input type="number" class="quantity__number quickview__value--number" value="<?php echo $cart_item['SoLuong'] ?>" data-counter />
                                                            </label>
                                                            <a href="layout/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button></a>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price end">₫<?php echo number_format($thanhtien, 0, ',', '.') ?></span>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="continue__shopping d-flex justify-content-between">
                                    <a class="continue__shopping--link" href=""></a>
                                    <a class="continue__shopping--clear" href="layout/main/themgiohang.php?xoatatca=1">Xóa tất cả</a>
                                </div>
                                <div style="clear: both"></div>




                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart__summary border-radius-10">
                                <div class="coupon__code mb-30">
                                    <h3 class="coupon__code--title">Phiếu mua hàng</h3>
                                    <p class="coupon__code--desc">Nhập mã giảm giá của bạn nếu có</p>
                                    <div class="coupon__code--field d-flex">
                                        <label>
                                            <input class="coupon__code--field__input border-radius-5" placeholder="Coupon code" type="text">
                                        </label>
                                        <button class="coupon__code--field__btn primary__btn" type="submit">Áp dụng mã</button>
                                    </div>
                                </div>
                                <div class="cart__note mb-20">
                                    <h3 class="cart__note--title">Ghi chú</h3>
                                    <p class="cart__note--desc">Thêm nội dung lưu ý cho người bán hàng...</p>
                                    <textarea class="cart__note--textarea border-radius-5"></textarea>
                                </div>
                                <div class="cart__summary--total mb-20">
                                    <table class="cart__summary--total__table">
                                        <tbody>
                                            <tr class="cart__summary--total__list">

                                            </tr>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">Tổng tiền</td>
                                                <td class="cart__summary--amount text-right">₫<?php echo number_format($tongtien, 0, ',', '.') ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart__summary--footer">
                                    <p class="cart__summary--footer__desc">Giao hàng và thuế được tính khi thanh toán...</p>
                                    <ul class="d-flex justify-content-between">
                                        <li><button class="cart__summary--footer__btn primary__btn cart" type="submit">Cập nhật</button></li>
                                        <?php
                                        if (isset($_SESSION['dangky'])) {
                                        ?>
                                            <li><a class="cart__summary--footer__btn primary__btn checkout" href="index.php?page=checkout">Mua hàng</a></li>
                                        <?php
                                        } else {
                                        ?>
                                            <li><a class="cart__summary--footer__btn primary__btn checkout" href="index.php?page=register">Đăng ký đặt mua</a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Start brand logo section -->
    <?php include('./layout/bases/logo_section.php') ?>
    <!-- End brand logo section -->

    <!-- Start shipping section -->
    <?php include('./layout/bases/shipping_section.php') ?>
    <!-- End shipping section -->