<?php
$sql_lietke_loaisp = "SELECT * FROM tblloaisp ORDER BY IdLoaiSP DESC";
$query_lietke_loaisp = mysqli_query($mysqli, $sql_lietke_loaisp);
?>

<?php
$sql_lietke_thuonghieu = "SELECT * FROM tblthuonghieu ORDER BY IdTH DESC";
$query_lietke_thuonghieu = mysqli_query($mysqli, $sql_lietke_thuonghieu);
?>
<div class="col-xl-3 col-lg-4">
    <div class="shop__sidebar--widget widget__area d-md-2-none">
        <div class="single__widget widget__bg">
            <h2 class="widget__title h3">Danh mục sản phẩm</h2>
            <ul class="widget__categories--menu">
                <?php
                $i = 0;
                while ($loaisp =  mysqli_fetch_array($query_lietke_loaisp)) {
                    $i++;
                ?>
                    <li class="widget__categories--menu__list">
                        <a href="index.php?page=shop&id=<?php echo $loaisp['IdLoaiSP']?>">
                            <label class="widget__categories--menu__label d-flex align-items-center" style="height: 40px;">
                                <span class="widget__categories--menu__text"><?php echo ($loaisp['TenLoai']) ?></span>
                            </label>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title h3">Thương Hiệu</h2>
            <ul class="widget__tagcloud">
                <?php
                $i = 0;
                while ($thuonghieu =  mysqli_fetch_array($query_lietke_thuonghieu)) {
                    $i++;
                ?>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href=""><?php echo ($thuonghieu['TenTH']) ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="single__widget price__filter widget__bg">
            <h2 class="widget__title h3">Tìm kiếm theo giá</h2>
            <form class="price__filter--form" action="#">
                <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                    <div class="price__filter--group">
                        <label class="price__filter--label" for="Filter-Price-GTE2">Từ</label>
                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                            <span class="price__filter--currency">₫</span>
                            <label>
                                <input class="price__filter--input__field border-0" name="filter.v.price.gte" type="number" placeholder="0" min="0" max="250.00">
                            </label>
                        </div>
                    </div>
                    <div class="price__divider">
                        <span>-</span>
                    </div>
                    <div class="price__filter--group">
                        <label class="price__filter--label" for="Filter-Price-LTE2">Đến</label>
                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                            <span class="price__filter--currency">₫</span>
                            <label>
                                <input class="price__filter--input__field border-0" name="filter.v.price.lte" type="number" min="0" placeholder="250.00" max="250.00">
                            </label>
                        </div>
                    </div>
                </div>
                <button class="price__filter--btn primary__btn" type="submit">Filter</button>
            </form>
        </div>

    </div>
</div>