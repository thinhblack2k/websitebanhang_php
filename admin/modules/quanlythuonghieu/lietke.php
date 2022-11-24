<?php
$sql_lietke_thuonghieu = "SELECT * FROM tblthuonghieu ORDER BY idTH DESC";
$query_lietke_thuonghieu = mysqli_query($mysqli, $sql_lietke_thuonghieu);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white">
                Danh sách thương hiệu
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
                                    <strong>Tên thương hiệu</strong>
                                </td>
                                <td class="text-center">
                                    <strong>Quản lý</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_thuonghieu)) {
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['TenTH'] ?></td>
                                    <td class="text-center">
                                    <a class="button-link" href="modules/quanlythuonghieu/xuly.php?IdTH=<?php echo $row['IdTH'] ?>" onClick="return confirm('Bạn có muốn xoá thương hiệu sản phẩm này không?')">Xoá</a> | <a class="button-link" href="?action=quanlythuonghieu&query=sua&IdTH=<?php echo $row['IdTH'] ?>">Sửa</a> 
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