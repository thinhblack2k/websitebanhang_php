<?php
$sql_sua_thuonghieu = "SELECT * FROM tblthuonghieu WHERE IdTH='$_GET[IdTH]' LIMIT 1";
$query_sua_thuonghieu = mysqli_query($mysqli, $sql_sua_thuonghieu);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white">
                Cập nhật thương hiệu
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table table-light">
                        <form method="POST" action="modules/quanlythuonghieu/xuly.php?IdTH=<?php echo $_GET['IdTH'] ?>">
                            <?php
                            while ($dong = mysqli_fetch_array($query_sua_thuonghieu)) {
                            ?>
                                <tr>
                                    <td class='table-title'>Tên loại sản phẩm</td>
                                    <td><input type="text" value="<?php echo $dong['TenTH'] ?>" name="tenthuonghieu" id="u-name" class="form-control"></td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button class="btn btn-primary" name="suathuonghieu" id="" type="submit">
                                                    Lưu
                                                </button>
                                                <a class="btn btn-warning" href="?action=quanlythuonghieu&query=them">
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