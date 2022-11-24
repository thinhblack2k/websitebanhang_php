<?php
include('format/format_status.php');

$gmail = $_SESSION['Gmail'];

if (isset($_SESSION['dangky'])) {
    $sql_lietke_dondat_lietke = "SELECT * FROM tbldondat WHERE  GmailKH = '" . $gmail . "' AND ( TinhTrang = '0' or TinhTrang = '1' or TinhTrang = '2') ORDER BY IdDD DESC";
    $query_dondat_lietke = mysqli_query($mysqli, $sql_lietke_dondat_lietke); 
}
?>

<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Tài Khoản</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang
                                chủ</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Tài khoản</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- my account section start -->
<section class="my__account--section section--padding">
    <div class="container">
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">Tài khoản</h2>
                <ul class="account__menu">
                    <li class="account__menu--list active"><a href="index.php?page=myoder">Đơn hàng</a></li>
                    <li class="account__menu--list"><a href="index.php?page=myhistory">Lịch sử</a></li>
                    <li class="account__menu--list"><a href="index.php?page=myaddress">Địa chỉ</a></li>
                    <li class="account__menu--list"><a href="index.php?page=wishlist">Yêu thích</a></li>
                    <li class="account__menu--list"><a href="index.php?page=account">Thay đổi thông tin</a></li>
                    <li class="account__menu--list"><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">
                    <h2 class="account__content--title h3 mb-20">Danh sách đơn hàng đang xử lý</h2>
                    <div class="account__table--area">
                        <table class="account__table">
                            <thead class="account__table--header">
                                <tr class="account__table--header__child">
                                    <th class="account__table--header__child--items">#</th>
                                    <th class="account__table--header__child--items">Thời gian</th>
                                    <th class="account__table--header__child--items">Trạng thái</th>
                                    <th class="account__table--header__child--items">Tổng tiền</th>
                                    <th class="account__table--header__child--items" style="text-align: center;">Công cụ</th>
                                </tr>
                            </thead>
                            <tbody class="account__table--body mobile__none">
                                <?php
                                $i = 0;
                                while ($dondat = mysqli_fetch_array($query_dondat_lietke)) {
                                    $i++;
                                ?>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items"><?php echo $i ?></td>
                                        <td class="account__table--body__child--items"><?php echo $dondat['ThoiGian'] ?></td>
                                        <td class="account__table--body__child--items"><?php format_status($dondat['TinhTrang']) ?></td>
                                        <td class="account__table--body__child--items">₫ <?php echo number_format($dondat['TongTien'], 0, ',', '.') ?></td>
                                        <?php
                                        if ($dondat['TinhTrang'] == '0') {
                                        ?>
                                            <td style="text-align: center;" class="account__table--body__child--items"><a href="layout/pages/xulydonhang.php?IdDD=<?php echo $dondat['IdDD'] ?> "onClick="return confirm('Bạn có muốn hủy đơn hàng này không?')">Hủy</a> | <a href="index.php?page=orderdetails&IdDD=<?php echo $dondat['IdDD']?>">Chi tiết</a></td>
                                        <?php
                                        } else {
                                        ?>
                                            <td style="text-align: center;" class="account__table--body__child--items"><a href="tel:0979359999">Liên Hệ</a> | <a href="index.php?page=orderdetails&IdDD=<?php echo $dondat['IdDD']?>">Chi tiết</a></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->

<!-- Start shipping section -->
<?php
include("./layout/bases/shipping_section.php")
?>
<!-- End shipping section -->