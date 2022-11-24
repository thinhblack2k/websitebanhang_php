<?php
$sql_lietke_sanpham = "SELECT * FROM tblsanpham,tblthuonghieu,tblloaisp WHERE tblsanpham.IdTH = tblthuonghieu.IdTH and tblsanpham.IdLoaiSP = tblloaisp.IdLoaiSP ORDER BY IdSP DESC";
$query_lietke_sanpham = mysqli_query($mysqli, $sql_lietke_sanpham);
?>

</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Danh sách sản phẩm</div>
                <div>
                    <a href="index.php?action=quanlysanpham&query=them" class="btn btn-primary" name="themsanpham" type="submit">
                        Thêm mới sản phẩm
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
                                <th>Tên sản phẩm</th>
                                <th>Thương hiệu</th>
                                <th>Loại sản phẩm</th>
                                <th>Màu </th>
                                <th>Kích thước</th>
                                <th>Số lượng</th>
                                <th>Giá mua</th>
                                <th>Giá bán</th>
                                <th>Khuyến mại</th>
                                <th>Hình ảnh</th>
                                <th>Mô tả</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
                                $i++;
                            ?>
                                <tr>
                                    <td>
                                        <div style="display:flex;align-items:center;">
                                            <a href="?action=quanlysanpham&query=sua&IdSP=<?php echo $row['IdSP'] ?>">
                                                <i class="fas fa-edit" title="Sửa" style="font-size:18px;"></i>
                                            </a>
                                            <span style="margin: 0 10px 5px 10px;">|</span>
                                            <a href="modules/quanlysanpham/xuly.php?IdSP=<?php echo $row['IdSP'] ?>" onClick="return confirm('Bạn có muốn xoá sản phẩm này không? *Lưu ý* : Không thể xóa sản phẩm đã phát sinh hóa đơn')">
                                                <i class="fas fa-trash-alt" title="Xoá" style="font-size:16px; color: red;"></i>
                                            </a>
                                        </div>
                                    </td>
                                    
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['TenSP'] ?></td>
                                    <td><?php echo $row['TenTH'] ?></td>
                                    <td><?php echo $row['TenLoai'] ?></td>
                                    <td><?php echo $row['Mau'] ?></td>
                                    <td><?php echo $row['KichThuoc'] ?></td>
                                    <td><?php echo $row['SoLuong'] ?></td>
                                    <td><?php echo $row['GiaNhap'] ?></td>
                                    <td><?php echo $row['GiaBan'] ?></td>
                                    <td><?php echo $row['KhuyenMai'] ?></td>
                                    <td><img src="modules/quanlysanpham/uploads/<?php echo $row['HinhAnh'] ?>" width="150px"></td>
                                    <td><?php echo $row['MoTa'] ?></td>

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