<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-white" style="display: flex;">
                <div style="display: flex; align-items: center; flex: 1;">Thêm tài khoản mới</div>
                <div>
                    <a href="index.php?action=quanlytaikhoan&query=lietke" class="btn" name="quaylai" type="submit">
                        <button type="submit" name="themsanpham" class="btn btn-outline-dark btn-icon-text">
                            Quay lại
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body m-t-35">
                <div class="table-responsive">
                    <table class="table table-light" style="background-color: #fff; width: 80%; margin: 0 auto;" style="width: 80%; margin: 0 auto;">
                        <form method="POST" action="modules/quanlytaikhoan/xuly.php" enctype="multipart/form-data">
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="Gmail" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tên tài khoản</td>
                                <td><input type="text" name="TenTK" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input type="password" name="MatKhau" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Loại tài khoản</td>
                                <td>
                                    <select name="LoaiTK" class="form-control">
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                        <option value="customer">customer</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại </td>
                                <td><input type="text" name="SDT" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="DiaChi" class="form-control"></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-primary" name="themtaikhoan">Thêm</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>