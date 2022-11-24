<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $gender = $_POST['loaidon'];
}
?>
<?php
include('../format/format_status.php');
$sql_lietke_dh = "SELECT * FROM tbldondat,tbltaikhoan WHERE tbldondat.GmailKH=tbltaikhoan.Gmail ORDER BY tbldondat.IdDD DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Danh sách sản phẩm</div>
                <i class="fas fa-search" style="font-size: 24px; margin-right: 10px; margin-top: 6px;"></i>
                <select class="select-date" name="loaidon">
                    <option value="4">Tất cả</option>
                    <option value="0">Chờ xác nhận</option>
                    <option value="1">Đang chuẩn bị</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đã hoàn thành</option>
                </select>
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table" style="width:100%;">
                        <thead>
                            <tr>
                            <tr>
                                <th>#</th>
                                <th>Tên khách hàng</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th>Quản lý</th>
                            </tr>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_dh)) {
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['TenTK'] ?></td>
                                    <td><?php echo $row['ThoiGian'] ?></td>
                                    <td><?php echo format_status($row['TinhTrang']) ?></td>
                                    <td>
                                        <a style="text-decoration:none;" href="index.php?action=quanlydonhang&query=chitietdh&code=<?php echo $row['IdDD'] ?>">Xem</i></a> |
                                        <a style="text-decoration:none;" href="modules/quanlydonhang/xuly.php?IdDD=<?php echo $row['IdDD'] ?> " onClick="return confirm('Xác nhận chuyển trạng thái cho đơn hàng này?')">Duyệt</a>
                                    </td>
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