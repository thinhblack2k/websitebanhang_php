<?php
$sql_sua_loaisp = "SELECT * FROM tblloaisp WHERE IdLoaiSP='$_GET[IdLoaiSP]' LIMIT 1";
$query_sua_loaisp = mysqli_query($mysqli, $sql_sua_loaisp);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white">
                Cập nhật loại sản phẩm
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-light">
                        <form method="POST" action="modules/quanlyloaisp/xuly.php?IdLoaiSP=<?php echo $_GET['IdLoaiSP'] ?>">
                            <?php
                            while ($dong = mysqli_fetch_array($query_sua_loaisp)) {
                            ?>
                                <tr>
                                    <td class='table-title'>Tên loại sản phẩm</td>
                                    <td><input type="text" value="<?php echo $dong['TenLoai'] ?>" name="tenloai" id="u-name" class="form-control"></td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button class="btn btn-primary" name="sualoaisp" id="" type="submit">
                                                    Lưu
                                                </button>
                                                <a class="btn btn-warning" href="?action=quanlyloaisp&query=them">
                                                    Hủy
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>