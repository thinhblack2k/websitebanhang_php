<!-- Biến toàn cục -->
<?php
$tongtien = 0;
$thanhtien = 0;
?>

<!-- Xử lý đơn hàng khi nhấn đặt -->
<?php
$tentaikhoan = $_SESSION['Gmail'];
$sql_taikhoan_thongtin = "SELECT * FROM tbltaikhoan WHERE Gmail = '" . $tentaikhoan . "'";
$query_taikhoan_thongtin = mysqli_query($mysqli, $sql_taikhoan_thongtin);
?>

<?php
$IdDD = $_GET['IdDD'];
$sql_chitiet_dondat = "SELECT tblsanpham.TenSP ,tblsanpham.GiaBan , tblsanpham.KhuyenMai, tblsanpham.HinhAnh,tblchitietdd.IdSP, tblchitietdd.IdDD , tblchitietdd.SoLuong FROM tblchitietdd JOIN tblsanpham on tblchitietdd.IdSP = tblsanpham.IdSP JOIN tbldondat on tblchitietdd.IdDD = tbldondat.IdDD WHERE tblchitietdd.IdDD = '".$IdDD."';";
$query_chitiet_dondat = mysqli_query($mysqli, $sql_chitiet_dondat);
?>
<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="orderdetails orderdetails-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Tài Khoản</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Tài khoản</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->
<div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian">
                <header class="main__header checkout__mian--header mb-30">
                    <h3 class="main__logo--title">Chi tiết đơn hàng</h3>
                </header>
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <thead></thead>
                        <tbody class="cart__table--body">
                            <?php
                            $i = 0;
                            while ($orderdetails = mysqli_fetch_array($query_chitiet_dondat)) {
                                $thanhtien = $orderdetails['SoLuong'] * ($orderdetails['GiaBan'] - ($orderdetails['GiaBan'] / 100 * $orderdetails['KhuyenMai']));
                                $tongtien += $thanhtien;
                                $_SESSION['tongtien'] = $tongtien;
                                $i++;
                            ?>
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href=""><img class="border-radius-5" src="admin/modules/quanlysanpham/uploads/<?php echo $orderdetails['HinhAnh']; ?>" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity"><?php echo $orderdetails['SoLuong'] ?></span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href=""><?php echo $orderdetails['TenSP'] ?></a></h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">₫<?php echo number_format($thanhtien, 0, ',', '.') ?></span>
                                    </td>
                                </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="checkout__total">
                    <table class="checkout__total--table">
                        <tbody class="checkout__total--body">
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Tổng tiền </td>
                                <td class="checkout__total--amount text-right">₫<?php echo number_format($tongtien, 0, ',', '.') ?></td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left"></td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="account__details--footer d-flex">
                    <a class="account__details--footer__btn" style="background-color: #ededed;" href="index.php?page=myorder">Quay lại</a>
                </div>
                <br>

            </div>
            <aside class="checkout__sidebar sidebar">
                <main class="main__content_wrapper">
                    <form action="#">
                        <?php
                        $i = 0;
                        while ($taikhoan = mysqli_fetch_array($query_taikhoan_thongtin)) {
                            $i++;
                        ?>
                            <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label">Tài khoản</label>
                                        <span class="checkout__review--content">
                                            <?php
                                            if (isset($taikhoan['Gmail'])) {
                                                echo $taikhoan['Gmail'];
                                            } else {
                                                echo '<span style="color:red"> Tên người dùng không hợp lệ </span>';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Địa chỉ</label>
                                        <span class="checkout__review--content">
                                            <?php
                                            if (isset($taikhoan['DiaChi'])) {
                                                echo $taikhoan['DiaChi'];
                                            } else {
                                                echo '<span style="color:red"> Địa chỉ không hợp lệ </span>';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label">Số điện thoại</label>
                                        <span class="checkout__review--content">
                                            <?php
                                            if (isset($taikhoan['SDT'])) {
                                                echo $taikhoan['SDT'];
                                            } else {
                                                echo '<span style="color:red"> Địa chỉ không hợp lệ </span>';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Phương thức</label>
                                        <span class="checkout__review--content">Thanh toán khi nhận hàng </span>
                                    </div>
                                </div>
                            </div>
                            <br>

                        <?php
                        }
                        ?>
                    </form>
                </main>
            </aside>
        </div>
    </div>
</div>