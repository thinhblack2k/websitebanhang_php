<?php
$tongtien = 0;
$IdDD = $_GET['code'];
include('../format/format_status.php');
$sql_chitiet_dondat = "SELECT tblsanpham.TenSP ,tblsanpham.GiaBan , tblsanpham.KhuyenMai, tblsanpham.HinhAnh,tblchitietdd.IdSP, tblchitietdd.IdDD , tblchitietdd.SoLuong FROM tblchitietdd JOIN tblsanpham on tblchitietdd.IdSP = tblsanpham.IdSP JOIN tbldondat on tblchitietdd.IdDD = tbldondat.IdDD WHERE tblchitietdd.IdDD = '" . $IdDD . "';";
$query_chitiet_dondat = mysqli_query($mysqli, $sql_chitiet_dondat);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Chi tiết đơn hàng</div>
                <a href="index.php?action=quanlydonhang&query=lietke" name="themsanpham" class="btn btn-outline-dark btn-icon-text">
                    Quay lại
                </a>
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table" style="width:100%;">
                        <thead>
                            <tr>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>

                            </tr>
                        <tbody class="cart__table--body">
                            <?php
                            $i = 0;
                            while ($orderdetails = mysqli_fetch_array($query_chitiet_dondat)) {
                                $thanhtien = $orderdetails['SoLuong'] * ($orderdetails['GiaBan'] - ($orderdetails['GiaBan'] / 100 * $orderdetails['KhuyenMai']));
                                $tongtien += $thanhtien;
                                $i++;
                            ?>
                                <tr class="">
                                    <td class="">
                                        <img src="modules/quanlysanpham/uploads/<?php echo $orderdetails['HinhAnh'] ?>" width="100px" style="border-radius: 5px;">
                                    </td>
                                    <td class="">
                                        <?php echo $orderdetails['TenSP'] ?>
                                    </td>
                                    <td>
                                        <?php echo $orderdetails['SoLuong'] ?>
                                    </td>
                                    <td class="">
                                        <span class="cart__price">₫<?php echo number_format($thanhtien, 0, ',', '.') ?></span>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td colspan="4"><h4 style="float: right;">Tổng tiền : ₫<?php echo number_format($tongtien, 0, ',', '.') ?></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>