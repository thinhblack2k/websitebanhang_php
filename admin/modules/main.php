<div id="content" class="bg-container">
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            <strong>Công cụ</strong>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['action']) && $_GET['query']) {
                                $tab = $_GET['action'];
                                $query = $_GET['query'];
                            } else {
                                $tab = '';
                                $query = '';
                            }
                            //Quản lý danh mục sản phẩm
                            if ($tab == 'quanlyloaisp' && $query == 'them') {
                                include("modules/quanlyloaisp/them.php");
                                include("modules/quanlyloaisp/lietke.php");
                            } elseif ($tab == 'quanlyloaisp' && $query == 'sua') {
                                include("modules/quanlyloaisp/sua.php");
                            }


                            //Quản lý sản phẩm
                            elseif ($tab == 'quanlysanpham' && $query == 'them') {
                                include("modules/quanlysanpham/them.php");
                            } elseif ($tab == 'quanlysanpham' && $query == 'lietke') {
                                include("modules/quanlysanpham/lietke.php");
                            } elseif ($tab == 'quanlysanpham' && $query == 'sua') {
                                include("modules/quanlysanpham/sua.php");
                            }


                            //Quản lý thương hiệu
                            elseif ($tab == 'quanlythuonghieu' && $query == 'them') {
                                include("modules/quanlythuonghieu/them.php");
                                include("modules/quanlythuonghieu/lietke.php");
                            } elseif ($tab == 'quanlythuonghieu' && $query == 'sua') {
                                include("modules/quanlythuonghieu/sua.php");
                            }
                            //Quản lý đơn bán
                            elseif ($tab == 'quanlydonhang' && $query == 'lietke') {
                                include("modules/quanlydonhang/lietke.php");
                            } elseif ($tab == 'quanlydonhang' && $query == 'chitietdh') {
                                include("modules/quanlydonhang/chitietdd.php");
                            }

                            //Quản lý tài khoản
                            elseif ($tab == 'quanlytaikhoan' && $query == 'lietke') {
                                include("modules/quanlytaikhoan/lietke.php");
                            } elseif ($tab == 'quanlytaikhoan' && $query == 'them') {
                                include("modules/quanlytaikhoan/them.php");
                            }

                            //Quản lý phiếu nhập
                            elseif ($tab == 'quanlynhapkho' && $query == 'them') {
                                include("modules/quanlynhapkho/them.php");
                            }

                            //Quản lý dashboard
                            else {
                                include("modules/dashboard.php");
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>