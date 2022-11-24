<?php
$sql_lietke_taikhoan = "SELECT * FROM tbltaikhoan";
$query_lietke_taikhoan = mysqli_query($mysqli, $sql_lietke_taikhoan);
?>

</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Danh sách tài khoản</div>
                <div>
                    <a href="index.php?action=quanlytaikhoan&query=them" class="btn btn-primary" name="themtaikhoan" type="submit">
                        Thêm mới tài khoản
                    </a>
                </div>
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Quản lý</th>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Tên tài khoản</th>
                                <th>Loại tài khoản</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_taikhoan)) {
                                $i++;
                            ?>
                                <tr>
                                    <td>
                                        <div style="display:flex;align-items:center;">
                                            <a href="?action=quanlytaikhoan&query=sua&IdSP=<?php echo $row['Gmail'] ?>">
                                                <i class="fas fa-edit" title="Sửa" style="font-size:18px;"></i>
                                            </a>
                                            <span style="margin: 0 10px 5px 10px;">|</span>
                                            <a href="modules/quanlysp/xuly.php?IdSP=<?php echo $row['Gmail'] ?>" onClick="return confirm('Bạn có muốn xoá tài khoản này không?')">
                                                <i class="fas fa-trash-alt" title="Xoá" style="font-size:16px; color: red;"></i>
                                            </a>
                                        </div>
                                    </td>
                                    
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['Gmail'] ?></td>
                                    <td><?php echo $row['TenTK'] ?></td>
                                    <td><?php echo $row['LoaiTK'] ?></td>
                                    <td><?php echo $row['SDT'] ?></td>
                                    <td><?php echo $row['DiaChi'] ?></td>
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