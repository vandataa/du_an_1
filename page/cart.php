<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Cart</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="lynessa">
                        <div class="lynessa-notices-wrapper"></div>
                        <form class="lynessa-cart-form" method="POST" actions="update_cart">
                            <table class="shop_table shop_table_responsive cart lynessa-cart-form__contents"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stt = 0;
                                    foreach ($_SESSION['mycart'] as $cart):


                                        ?>
                                        <tr class="lynessa-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="?sp=delete_cart_cart&idCart=<?= $stt++ ?>" class="remove"
                                                    aria-label="Remove this item" data-product_id="27"
                                                    data-product_sku="885B712">×</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="image/<?= $cart[2] ?>"
                                                        class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                        alt="img" width="600" height="778"></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="#">
                                                    <?= $cart[1] ?>
                                                </a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>
                                                    <?= $cart[3] ?>
                                                </span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <span class="qty-label">Quantiy:</span>
                                                    <div class="control">

                                                        <input type="text" value="<?= $cart[4] ?>" disabled title="Qty"
                                                            class="input-qty input-text qty text">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>
                                                    <?= $cart[3]*$cart[4] ?>
                                                </span>
                                            </td>
                                        </tr>

                                    <?php endforeach ?>

                                    <!-- <tr class="lynessa-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="assets/images/apro134-1-600x778.jpg"
                                                class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">T-shirt
                                            with skirt – Pink</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>150.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>150.00</span></td>
                                </tr>
                                <tr class="lynessa-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="29"
                                           data-product_sku="003D754">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="assets/images/apro1113-600x778.jpg"
                                                class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Short Sleeve
                                            Loose</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>129.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>129.00</span></td>
                                </tr>
                                <tr class="lynessa-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="20"
                                           data-product_sku="775E109">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="assets/images/apro201-1-600x778.jpg"
                                                class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">ELOISE SHIRRED</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>139.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>139.00</span></td>
                                </tr>
                                
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> <input type="text"
                                                                                            name="coupon_code"
                                                                                            class="input-text"
                                                                                            id="coupon_code" value=""
                                                                                            placeholder="Coupon code">
                                            <button type="submit" class="button" name="apply_coupon"
                                                    value="Apply coupon">Apply coupon
                                            </button>
                                        </div>
                                        <button type="submit" class="button" name="update" value="Update cart"
                                                >Update cart
                                        </button>
                                        <input type="hidden" id="lynessa-cart-nonce" name="lynessa-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/lynessa/cart/"></td>
                                </tr>
                                 -->
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive" cellspacing="0">
                                    <tbody>
                                        <?php
                                        $tong = 0;
                                        if (isset($_SESSION['mycart'])) {
                                            foreach ($_SESSION['mycart'] as $cart) {
                                                $tong += $cart[3]*$cart[4];
                                            }
                                            echo '

                                                <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total"><strong><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>' . $tong . '</span></strong>
                                            </td>
                                        </tr>
                                                ';
                                        }
                                        ?>
                                        </p>
                                    </tbody>
                                </table>
                                <form action="?sp=dathang" method="post">
                                    <div class="lynessa-proceed-to-checkout">
                                        <a href="?sp=checkout" class="checkout-button button alt lynessa-forward">
                                            Proceed to checkout</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    Cross Sell Products
                                    <span></span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height"
                                data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                                data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <div class="product-item style-01 post-278 page type-page status-publish hentry">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/images/apro51012-1-600x778.jpg"
                                                    alt="SPORTY HOODIE" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-21%</span></span>
                                                <span class="onnew"><span class="text">New</span></span>
                                            </div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="lynessa product compare-button"><a href="#"
                                                        class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#" tabindex="0">SPORTY HOODIE</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span>
                                            </div>
                                            <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                            class="lynessa-Price-currencySymbol">$</span>125.00</span></del>
                                                <ins><span class="lynessa-Price-amount amount"><span
                                                            class="lynessa-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-item style-01 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/images/apro71-1-600x778.jpg"
                                                    alt="MINI SKIRT" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-18%</span></span>
                                                <span class="onnew"><span class="text">New</span></span>
                                            </div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="lynessa product compare-button"><a href="#"
                                                        class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#" tabindex="0">MINI SKIRT</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span>
                                            </div>
                                            <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                            class="lynessa-Price-currencySymbol">$</span>109.00</span></del>
                                                <ins><span class="lynessa-Price-amount amount"><span
                                                            class="lynessa-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-item style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/images/apro91-1-600x778.jpg"
                                                    alt="Swing Dress" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onnew"><span class="text">New</span></span>
                                            </div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="lynessa product compare-button"><a href="#"
                                                        class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#" tabindex="0">Swing Dress</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span>
                                            </div>
                                            <span class="price"><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span> –
                                                <span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>139.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>