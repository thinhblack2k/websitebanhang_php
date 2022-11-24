<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Thêm sản phẩm mới</div>
                <div>
                    <a href="index.php?action=quanlysanpham&query=lietke" class="btn" name="quaylai" type="submit">
                        <button type="submit" name="themsanpham" class="btn btn-outline-dark btn-icon-text">
                            Quay lại
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table table-light" style="background-color: #fff; width: 80%; margin: 0 auto;" style="width: 80%; margin: 0 auto;">
                        <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td><input type="text" name="TenSP" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Loại sản phẩm</td>
                                <td>
                                    <select name="loaisp" class="form-control">
                                        <?php
                                        $sql_loaisp = "SELECT * FROM tblloaisp ORDER BY IdLoaiSP DESC";
                                        $query_loaisp = mysqli_query($mysqli, $sql_loaisp);
                                        while ($row_loaisp = mysqli_fetch_array($query_loaisp)) {
                                        ?>
                                            <option value="<?php echo $row_loaisp['IdLoaiSP'] ?>"><?php echo $row_loaisp['TenLoai'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Thương hiệu sản phẩm</td>
                                <td>
                                    <select name="thuonghieu" class="form-control">
                                        <?php
                                        $sql_thuonghieu = "SELECT * FROM tblthuonghieu ORDER BY IdTH DESC";
                                        $query_thuonghieu = mysqli_query($mysqli, $sql_thuonghieu);
                                        while ($row_thuonghieu = mysqli_fetch_array($query_thuonghieu)) {
                                        ?>
                                            <option value="<?php echo $row_thuonghieu['IdTH'] ?>"><?php echo $row_thuonghieu['TenTH'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Màu</td>
                                <td><input type="text" name="Mau" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Kích thước</td>
                                <td><input type="text" name="KichThuoc" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Số lượng </td>
                                <td><input type="text" name="SoLuong" class="form-control"></td>
                            </tr>
                            
                            <tr>
                                <td>Giá nhập</td>
                                <td><input type="text" name="GiaNhap" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Giá bán</td>
                                <td><input type="text" name="GiaBan" class="form-control"></td>
                            </tr>
                            
                            <tr>
                                <td>Khuyến mại</td>
                                <td><input type="number" name="KhuyenMai" class="form-control"></td>
                            </tr>
                            
                            <tr>
                                <td>Hình ảnh</td>
                                <td><input type="file" name="HinhAnh"></td>
                            </tr>
                            <tr>
                                <td>Mô tả</td>
                                <td><textarea rows="5" name="Mota" style="resize: none" class="form-control"></textarea></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-primary" name="themsanpham">Thêm</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>