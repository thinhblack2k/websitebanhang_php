<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Yêu thích</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Yêu thích</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container">
                <div class="cart__section--inner">
                    <form action="#"> 
                        <h2 class="cart__title mb-40">Sản phẩm yêu thích</h2>
                        <div class="cart__table">
                            <table class="cart__table--inner">
                                <thead class="cart__table--header">
                                    <tr class="cart__table--header__items">
                                        <th class="cart__table--header__list">Sản phẩm</th>
                                        <th class="cart__table--header__list">Giá</th>
                                        <th class="cart__table--header__list text-center">Tình trạng</th>
                                        <th class="cart__table--header__list text-right">Thêm vào giỏ hàng</th>
                                    </tr>
                                </thead>
                                <tbody class="cart__table--body">
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="cart__product d-flex align-items-center">
                                                <button class="cart__remove--btn" aria-label="search button" type="button">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                </button>
                                                <div class="cart__thumbnail">
                                                    <a href="product-details.php"><img class="border-radius-5" src="assets/img/product/product4.png" alt="cart-product"></a>
                                                </div>
                                                <div class="cart__content">
                                                    <h4 class="cart__content--title"><a href="product-details.php">Oversize Cotton Dress</a></h4>
                                                    <span class="cart__content--variant">COLOR: Blue</span>
                                                    <span class="cart__content--variant">WEIGHT: 2 Kg</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">£65.00</span>
                                        </td>
                                        <td class="cart__table--body__list text-center">
                                            <span class="in__stock text__secondary">in stock</span>
                                        </td>
                                        <td class="cart__table--body__list text-right">
                                            <a class="wishlist__cart--btn primary__btn" href="index.php?page=cart">Thêm vào giỏ hàng</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                            <div class="continue__shopping d-flex justify-content-between">
                                <a class="continue__shopping--link" href="index.php">Continue shopping</a>
                                <a class="continue__shopping--clear" href="shop.php">View All Products</a>
                            </div>
                        </div> 
                    </form> 
                </div>
            </div>     
        </section>
        <!-- cart section end -->

        <!-- Start product section -->
        <?php
            include("./layout/bases/product_section.php")
        ?>
        <!-- End product section -->

        <!-- Start shipping section -->
        <?php
            include("./layout/bases/shipping_section.php")
        ?>
        <!-- End shipping section -->