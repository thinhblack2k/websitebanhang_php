<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Nhập vào sản phẩm</div>
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table table-light" style="background-color: #fff; width: 80%; margin: 0 auto;" style="width: 80%; margin: 0 auto;">
                        <form method="POST" action="index.php?action=quanlysanpham&query=lietke" enctype="multipart/form-data">
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>
                                    <select name="sp" class="form-control">

                                        <?php
                                        $sql_sp = "SELECT * FROM tblsanpham ORDER BY IdSP DESC";
                                        $query_sp = mysqli_query($mysqli, $sql_sp);
                                        while ($row_sp = mysqli_fetch_array($query_sp)) {
                                        ?>
                                            <option value="<?php echo $row_sp['IdSP'] ?>"><?php echo $row_sp['TenSP'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Số lượng</td>
                                <td>
                                    <input type="text" name="SoLuong" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-primary" name="themsanpham" onclick="alert('Tính năng này tạm thời chưa hỗ trợ, vui lòng thử lại sau')">Thêm</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>