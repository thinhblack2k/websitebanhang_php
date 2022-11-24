<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 8) - 8;
}
$sql_lietke_sanpham_theoloai = "SELECT * FROM tblsanpham,tblloaisp WHERE tblsanpham.IdLoaiSP = tblloaisp.IdLoaiSP 
AND tblsanpham.IdLoaiSP='$_GET[id]' ORDER BY tblsanpham.IdLoaiSP DESC LIMIT $begin,8";
$query_lietke_sanpham_theoloai = mysqli_query($mysqli, $sql_lietke_sanpham_theoloai);
?>
<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Sản phẩm</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Sản phẩm</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- Start shop section -->
<section class="shop__section section--padding">
    <div class="container-fluid">
        <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
            <button class="widget__filter--btn d-none d-md-2-flex align-items-center" data-offcanvas>
                <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
                    <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                    <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                    <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                </svg>
                <span class="widget__filter--btn__text">Filter</span>
            </button>
            <div class="product__view--mode d-flex align-items-center">
                <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                    <label class="product__view--label">Xem trang :</label>
                    <div class="select shop__header--select">
                        <select class="product__view--select">
                            <option selected value="1">65</option>
                            <option value="2">40</option>
                            <option value="3">42</option>
                            <option value="4">57 </option>
                            <option value="5">60 </option>
                        </select>
                    </div>
                </div>
                <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                    <label class="product__view--label">Sort By :</label>
                    <div class="select shop__header--select">
                        <select class="product__view--select">
                            <option selected value="1">Sort by latest</option>
                            <option value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by rating </option>
                        </select>
                    </div>
                </div>
                <div class="product__view--mode__list">
                    <div class="product__grid--column__buttons d-flex justify-content-center">
                        <button class="product__grid--column__buttons--icons active" aria-label="product grid button" data-toggle="tab" data-target="#product_grid">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                <g transform="translate(-1360 -479)">
                                    <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor" />
                                    <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor" />
                                    <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor" />
                                    <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor" />
                                </g>
                            </svg>
                        </button>
                        <button class="product__grid--column__buttons--icons" aria-label="product list button" data-toggle="tab" data-target="#product_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                    <g transform="translate(12 -2)">
                                        <g id="Group_1326" data-name="Group 1326">
                                            <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor" />
                                            <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor" />
                                        </g>
                                        <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                            <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor" />
                                            <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor" />
                                        </g>
                                        <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                            <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor" />
                                            <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product__view--mode__list product__view--search d-none d-lg-block">
                    <form class="product__view--search__form" action="#">
                        <label>
                            <input class="product__view--search__input border-0" placeholder="Search by" type="text">
                        </label>
                        <button class="product__view--search__btn" aria-label="shop button" type="submit">
                            <svg class="product__view--search__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <p class="product__showing--count">Xem sản phẩm từ 1 - 8</p>
        </div>
        <div class="row">
            <!-- sibarleft -->
            <?php
            include("./layout/bases/sibarleft_sanpham.php")
            ?>
            <!-- End sibarleft -->
            <div class="col-xl-9 col-lg-8">
                <div class="shop__product--wrapper">
                    <div class="tab_content">
                        <div id="product_grid" class="tab_pane active show">
                            <div class="product__section--inner product__grid--inner">
                                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">
                                    <?php
                                    $i = 0;
                                    while ($sanphamtheoloai =  mysqli_fetch_array($query_lietke_sanpham_theoloai)) {
                                        $i++;
                                    ?>
                                        <div class="col mb-30">
                                            <div class="product__items">
                                                <div class="product__items--thumbnail">
                                                    <a class="product__items--link" href="index.php?page=detail&id=<?php echo $sanphamtheoloai['IdSP'] ?>">
                                                        <img class="product__items--img product__primary--img" src="admin/modules/quanlysanpham/uploads/<?php echo $sanphamtheoloai['HinhAnh'] ?>" alt="product-img">
                                                        <img class="product__items--img product__secondary--img" src="admin/modules/quanlysanpham/uploads/<?php echo $sanphamtheoloai['HinhAnh'] ?>" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale <?php echo $sanphamtheoloai['KhuyenMai'] ?>%</span>
                                                    </div>
                                                </div>
                                                <div class="product__items--content">
                                                    <h3 class="product__items--content__title h4"><a href="index.php?page=detail&id=<?php echo $sanphamtheoloai['IdSP'] ?>"><?php echo $sanphamtheoloai['TenSP'] ?></a></h3>
                                                    <div class="product__items--price">
                                                        <span class="old__price">₫<?php echo number_format($sanphamtheoloai['GiaBan'], 0, ',', '.') ?></span>
                                                        <br>
                                                        <span class="current__price" style="font-size: 25px; color: var(--secondary-color)">₫ <?php echo number_format($sanphamtheoloai['GiaBan'] - ($sanphamtheoloai['GiaBan'] / 100 * $sanphamtheoloai['KhuyenMai']), 0, ',', '.') ?></span>
                                                    </div>
                                                    <ul class="rating product__rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <span class="product__items--content__subtitle">Đã bán <?php echo $sanphamtheoloai['SLBan'] ?></span>
                                                    </ul>
                                                    <ul class="product__items--action d-flex">
                                                        <form action="layout/main/themgiohang.php?IdSP=<?php echo $sanphamtheoloai['IdSP'] ?>" method="POST">
                                                            <li class="product__items--action__list">
                                                                <button class="product__items--action__btn add__to--cart" type="submit" name="addCart">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                            <g>
                                                                                <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                                <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                                <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text">+Add to cart</span>
                                                                </button>
                                                            </li>
                                                        </form>
                                                        <li class="product__items--action__list">
                                                            <a class="product__items--action__btn" href="wishlist.html">
                                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512">
                                                                    <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
                                                                </svg>
                                                                <span class="visually-hidden">Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li class="product__items--action__list">
                                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512">
                                                                    <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                                    <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                                </svg>
                                                                <span class="visually-hidden">Quick View</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="product_list" class="tab_pane">
                            <div class="product__section--inner">
                                <div class="row row-cols-1 mb--n30">
                                    <?php
                                    $j = 0;
                                    while ($sanphamtheoloai2 =  mysqli_fetch_array($query_lietke_sanpham_theoloai)) {
                                        $j++;
                                    ?>
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.php">
                                                        <img class="product__items--img product__primary--img" src="assets/img/product/product11.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img" src="assets/img/product/product10.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="product__list--items__content">
                                                    <span class="product__items--content__subtitle mb-5"><?php echo $sanphamtheoloai2['TenLoai'] ?></span>
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.php"><?php echo $sanphamtheoloai2['TenSP'] ?></a></h3>
                                                    <div class="product__list--items__price mb-10">
                                                        <span class="current__price">$110</span>
                                                        <span class="price__divided"></span>
                                                        <span class="old__price">$78</span>
                                                    </div>
                                                    <ul class="rating product__rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <p class="product__list--items__content--desc d-xl-none mb-15"></p>
                                                    <ul class="product__items--action d-flex">
                                                    <form action="layout/main/themgiohang.php?IdSP=<?php echo $sanphamtheoloai['IdSP'] ?>" method="POST">
                                                            <li class="product__items--action__list">
                                                                <button class="product__items--action__btn add__to--cart" type="submit" name="addCart">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                            <g>
                                                                                <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                                <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                                <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text">+Add to cart</span>
                                                                </button>
                                                            </li>
                                                        </form>
                                                        <li class="product__items--action__list">
                                                            <a class="product__items--action__btn" href="index.php?page=wishlist">
                                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512">
                                                                    <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
                                                                </svg>
                                                                <span class="visually-hidden">Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li class="product__items--action__list">
                                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512">
                                                                    <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                                    <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                                </svg>
                                                                <span class="visually-hidden">Quick View</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phần phân trang -->
                    <div class="pagination__area bg__gray--color">
                        <nav class="pagination">
                            <?php
                            $sql_trang = mysqli_query($mysqli, $sql_lietke_sanpham_theoloai);
                            $row_count = mysqli_num_rows($sql_trang);
                            $trang = ceil($row_count / 8);
                            ?>
                            <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                <li class="pagination__list">
                                    <a href="index.php?page=shopall&trang=<?php echo $page - 1 ?>" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                        </svg>
                                        <span class="visually-hidden">pagination arrow</span>
                                    </a>
                                <li>

                                    <?php

                                    for ($i = 1; $i <= $trang; $i++) {
                                        if ($page == $i) {
                                    ?>
                                <li class="pagination__list"><a href="index.php?page=shopall&trang=<?php echo $i ?>" class="pagination__item pagination__item--current"><?php echo $i ?></a></li>
                            <?php
                                        } else {
                            ?>
                                <li class="pagination__list"><a href="index.php?page=shopall&trang=<?php echo $i ?>" class="pagination__item link"><?php echo $i ?></a></li>
                            <?php
                                        }
                            ?>

                        <?php
                                    }
                        ?>

                        <li class="pagination__list">
                            <a href="index.php?page=shopall&trang=<?php echo $page + 1 ?>" class="pagination__item--arrow  link ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                </svg>
                                <span class="visually-hidden">pagination arrow</span>
                            </a>
                        <li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End shop section -->

<!-- Start shipping section -->
<?php include('./layout/bases/shipping_section.php') ?>
<!-- End shipping section -->