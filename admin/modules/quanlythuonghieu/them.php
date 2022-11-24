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
                Thêm mới thương hiệu
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <form action="modules/quanlythuonghieu/xuly.php" method="POST">
                        <div class="flex-panel" style="width: 500px">
                            <div class="input-group">
                                <input type="text" placeholder="Tên thương hiệu mới" value="" name="tenthuonghieu" id="u-name" class="form-control">
                            </div>
                            <div class="flex-right">
                                <button class="btn btn-primary" name="themthuonghieu" type="submit">
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