<?php
$sql_lietke_loaisp = "SELECT * FROM tblloaisp ORDER BY idloaisp DESC";
$query_lietke_loaisp = mysqli_query($mysqli, $sql_lietke_loaisp);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white">
                Danh sách loại sản phẩm
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <td>
                                    <strong>Id</strong>
                                </td>
                                <td>
                                    <strong>Loại</strong>
                                </td>
                                <td class="text-center">
                                    <strong>Quản lý</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_loaisp)) {
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['TenLoai'] ?></td>
                                    <td class="text-center">
                                    <a class="button-link" href="modules/quanlyloaisp/xuly.php?IdLoaiSP=<?php echo $row['IdLoaiSP'] ?>" onClick="return confirm('Bạn có muốn xoá loại sản phẩm này không?')">Xoá</a> | <a class="button-link" href="?action=quanlyloaisp&query=sua&IdLoaiSP=<?php echo $row['IdLoaiSP'] ?>">Sửa</a> 
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