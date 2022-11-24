<style>
    .flex-panel {
        display: flex;
    }

    .flex-right {
        margin-left: 10px;

    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white">
                Thêm mới loại sản phẩm
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <form action="modules/quanlyloaisp/xuly.php" method="POST">
                        <div class="flex-panel" style="width: 500px">
                            <div class="input-group">
                                <input type="text" value="" name="tenloai" placeholder="tên loại sản phẩm" id="u-name" class="form-control">
                            </div>
                            <div class="flex-right">
                                <button class="btn btn-primary" name="themloaisp" type="submit">
                                    Thêm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>