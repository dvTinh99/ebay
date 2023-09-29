@include('shop2.layout.header')

<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>


<style>
    .recommend_icon {
        /* filter: hue-rotate(-20deg); */
        opacity: 0.5;
    }
</style>
<section class="mb-4 pt-3">
    <div class="container">
        <div class="bg-white shadow-sm rounded p-3">
            <div class="row">
                <div class="col-xl-5 col-lg-6 mb-4">
                    <div class="sticky-top z-3 row gutters-10">
                        <div class="col order-1 order-md-2">
                            <div class="aiz-carousel product-gallery" data-nav-for='.product-gallery-thumb'
                                data-fade='true' data-auto-height='true'>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/7e7272332e9f20b0ffd125d339c0f758.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/7dd1fad7dd3e95a6d64d214ffef0024c.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/3bdf3ca37f1368d7fc0498f8ee67d90b.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/1f5f0a7b7dfc8bdc36db34df3cdb42e4.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/6ee556dd073107a5f857db09d531fc2f.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/3267ca32ce5e27e206e9055fd0a9a87f.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/99aea0152c78de8279049a45f770cb90.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/7e7272332e9f20b0ffd125d339c0f758.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box img-zoom rounded">
                                    <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                            <div class="aiz-carousel product-gallery-thumb" data-items='5'
                                data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false'
                                data-focus-select='true' data-arrows='true'>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/7e7272332e9f20b0ffd125d339c0f758.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/7dd1fad7dd3e95a6d64d214ffef0024c.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/3bdf3ca37f1368d7fc0498f8ee67d90b.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/1f5f0a7b7dfc8bdc36db34df3cdb42e4.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/6ee556dd073107a5f857db09d531fc2f.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/3267ca32ce5e27e206e9055fd0a9a87f.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/99aea0152c78de8279049a45f770cb90.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/7e7272332e9f20b0ffd125d339c0f758.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto"
                                        src="../public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="text-left">
                        <h1 class="mb-2 fs-20 fw-600">
                            Premium Big Capacity Stackable Large Thick Transparent Magnetic Shoe Box Sneaker Shoes
                            Storage AJ Display Boxes Shoebox Christmas Gift Birthday Present Storage Multipurpose Usage
                        </h1>

                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="rating">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </span>
                                <span class="ml-1 opacity-50">(0
                                    đánh giá)</span>
                            </div>
                            <div class="col-auto ml">
                                <small class="mr-2 opacity-50">Ước tính thời gian vận chuyển:
                                </small>3 ngày
                            </div>
                            <!-\u6b63\u7248\u0071\u0071\u0034\u0039\u0035\u0032\u0020\u0038\u0038\u0038\u0037->
                        </div>
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <small class="mr-2 opacity-50">chủ shop: </small><br>
                                <a href="https://www.ebeebbuy.cc/shop/%C4%90%E1%BA%B7ng-%C4%90%C3%ACnh-Th%C6%B0%C6%A1ng-1510"
                                    class="text-reset">Đặng Đình Thương</a>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-soft-primary" onclick="show_chat_modal()">nhắn tin với
                                    shop</button>
                            </div>

                            <div class="col-auto">
                                <a href="https://www.ebeebbuy.cc/brand/other-bv6qs">
                                    <img src="../public/uploads/all/awe09gTxlALlPlstSub1Qxr7lY9OZwb9qNjWBDiG.jpg"
                                        alt="other" height="30">
                                </a>
                            </div>
                        </div>

                        <hr>

                        <div class="row no-gutters mt-3">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">Giá bán:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="">
                                    <strong class="h2 fw-600 text-primary">
                                        $13.08
                                    </strong>
                                    <span class="opacity-70">/Pc</span>
                                    <img class="lazyload size-30px ml-3 mb-3" id="recommend_icon"
                                        src='../public/assets/img/frontend/recommend_icon.jpg';">
                                </div>
                            </div>
                        </div>


                        <hr>

                        <form id="option-choice-form">
                            <input type="hidden" name="_token" value="Sq4iMwyDX74V4mWFFmHxKC3v4ZDPQTNpalNroWDR">
                            <input type="hidden" name="id" value="159724">



                            <!-- Quantity + Add to cart -->
                            <div class="row no-gutters">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">Định lượng:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="row no-gutters align-items-center aiz-plus-minus mr-3"
                                            style="width: 130px;">
                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                type="button" data-type="minus" data-field="quantity"
                                                disabled="">
                                                <i class="las la-minus"></i>
                                            </button>
                                            <input type="number" name="quantity"
                                                class="col border-0 text-center flex-grow-1 fs-16 input-number"
                                                placeholder="1" value="1" min="1" max="10"
                                                lang="en">
                                            <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light"
                                                type="button" data-type="plus" data-field="quantity">
                                                <i class="las la-plus"></i>
                                            </button>
                                        </div>
                                        <div class="avialable-amount opacity-60">
                                            (<span id="available-quantity">4999</span>
                                            có sẵn)
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">Tổng giá:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-price">
                                        <strong id="chosen_price" class="h4 fw-600 text-primary">

                                        </strong>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="mt-3">
                            <button type="button" class="btn btn-soft-primary mr-2 add-to-cart fw-600"
                                onclick="addToCart()">
                                <i class="las la-shopping-bag"></i>
                                <span class="d-none d-md-inline-block"> Thêm vào giỏ hàng</span>
                            </button>
                            <button type="button" class="btn btn-primary buy-now fw-600" onclick="buyNow()">
                                <i class="la la-shopping-cart"></i> Mua ngay
                            </button>
                            <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                <i class="la la-cart-arrow-down"></i> Hết hàng
                            </button>
                        </div>


                        <div class="d-table width-100 mt-3">
                            <div class="d-table-cell">
                                <!-- Add to wishlist button -->
                                <button type="button" class="btn pl-0 btn-link fw-600"
                                    onclick="addToWishList(159724)">
                                    Thêm vào danh sách yêu thích
                                </button>
                                <!-- Add to compare button -->
                                <button type="button" class="btn btn-link btn-icon-left fw-600"
                                    onclick="addToCompare(159724)">
                                    Thêm vào để so sánh
                                </button>
                            </div>
                        </div>


                        <div class="row no-gutters mt-3">
                            <div class="col-2">
                                <div class="opacity-50 mt-2">Hoàn tiền:</div>
                            </div>
                            <div class="col-10">
                                <a href="https://www.ebeebbuy.cc/return-policy" target="_blank">
                                    <img src="../public/assets/img/refund-sticker.jpg" height="36">
                                </a>
                                <a href="https://www.ebeebbuy.cc/return-policy" class="ml-2" target="_blank">Xem
                                    chính sách</a>
                            </div>
                        </div>
                        <div class="row no-gutters mt-4">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">Chia sẻ:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="aiz-share"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            <div class="col-xl-3 order-1 order-xl-0">
                <div class="bg-white shadow-sm mb-3">
                    <div class="position-relative p-3 text-left">
                        <div class="absolute-top-right p-2 bg-white z-1">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                viewBox="0 0 287.5 442.2" width="22" height="34">
                                <polygon style="fill:#F8B517;"
                                    points="223.4,442.2 143.8,376.7 64.1,442.2 64.1,215.3 223.4,215.3 " />
                                <circle style="fill:#FBD303;" cx="143.8" cy="143.8" r="143.8" />
                                <circle style="fill:#F8B517;" cx="143.8" cy="143.8" r="93.6" />
                                <polygon style="fill:#FCFCFD;"
                                    points="143.8,55.9 163.4,116.6 227.5,116.6 175.6,154.3 195.6,215.3 143.8,177.7 91.9,215.3 111.9,154.3
                                            60,116.6 124.1,116.6 " />
                            </svg>
                        </div>
                        <div class="opacity-50 fs-12 border-bottom">chủ shop</div>
                        <a href="https://www.ebeebbuy.cc/shop/%C4%90%E1%BA%B7ng-%C4%90%C3%ACnh-Th%C6%B0%C6%A1ng-1510"
                            class="text-reset d-block fw-600">
                            Đặng Đình Thương
                            <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span>
                        </a>
                        <div class="location opacity-70">Huyện EaHleo, Tỉnh Đăk lăk</div>
                        <div class="text-center border rounded p-2 mt-3">
                            <div class="rating">
                                <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                    class='las la-star'></i><i class='las la-star'></i>
                            </div>
                            <div class="opacity-60 fs-12">(0
                                Phản hồi khách hàng)
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center border-top">
                        <div class="col">
                            <a href="https://www.ebeebbuy.cc/shop/%C4%90%E1%BA%B7ng-%C4%90%C3%ACnh-Th%C6%B0%C6%A1ng-1510"
                                class="d-block btn btn-soft-primary rounded-0">Ghé thăm cửa hàng</a>
                        </div>
                        <div class="col">
                            <ul class="social list-inline mb-0">
                                <li class="list-inline-item mr-0">
                                    <a href="2334648574-fOg5h.html" class="facebook" target="_blank">
                                        <i class="lab la-facebook-f opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a href="2334648574-fOg5h.html" class="google" target="_blank">
                                        <i class="lab la-google opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a href="2334648574-fOg5h.html" class="twitter" target="_blank">
                                        <i class="lab la-twitter opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="2334648574-fOg5h.html" class="youtube" target="_blank">
                                        <i class="lab la-youtube opacity-60"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm mb-3">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        Sản phẩm bán chạy nhất
                    </div>
                    <div class="p-3">
                        <ul class="list-group list-group-flush">
                            <li class="py-3 px-0 list-group-item border-light">
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-5">
                                        <a href="https://www.ebeebbuy.cc/product/do-it-yourself-wealth-management-take-control-of-your-financial-life-xUeCE"
                                            class="d-block text-reset">
                                            <img class="img-fit lazyload h-xxl-110px h-xl-80px h-120px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/uploads/all/AP9AcFv0RCIe87js35XCLTiXZmdih6Y5WB1TPWuy.jpg"
                                                alt="Do-It-Yourself Wealth Management: Take Control of Your Financial Life!"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-7 text-left">
                                        <h4 class="fs-13 text-truncate-2">
                                            <a href="https://www.ebeebbuy.cc/product/do-it-yourself-wealth-management-take-control-of-your-financial-life-xUeCE"
                                                class="d-block text-reset">Do-It-Yourself Wealth Management: Take
                                                Control of Your Financial Life!</a>
                                        </h4>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <div class="mt-2">
                                            <span class="fs-17 fw-600 text-primary">$53.99</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 px-0 list-group-item border-light">
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-5">
                                        <a href="https://www.ebeebbuy.cc/product/969302981-ThYvS"
                                            class="d-block text-reset">
                                            <img class="img-fit lazyload h-xxl-110px h-xl-80px h-120px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/f9dffcfb25cd0d23131bd331e93791cc.png"
                                                alt="BOYA BY-CIP2 Smartphone Audio Adapter Female 3.5mm TRS to Male 3.5mm TRRS Adapter"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-7 text-left">
                                        <h4 class="fs-13 text-truncate-2">
                                            <a href="https://www.ebeebbuy.cc/product/969302981-ThYvS"
                                                class="d-block text-reset">BOYA BY-CIP2 Smartphone Audio Adapter Female
                                                3.5mm TRS to Male 3.5mm TRRS Adapter</a>
                                        </h4>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <div class="mt-2">
                                            <span class="fs-17 fw-600 text-primary">$14.66</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 px-0 list-group-item border-light">
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-5">
                                        <a href="2334648574-fOg5h.html" class="d-block text-reset">
                                            <img class="img-fit lazyload h-xxl-110px h-xl-80px h-120px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/7dd1fad7dd3e95a6d64d214ffef0024c.jpg"
                                                alt="Premium Big Capacity Stackable Large Thick Transparent Magnetic Shoe Box Sneaker Shoes Storage AJ Display Boxes Shoebox Christmas Gift Birthday Present Storage Multipurpose Usage"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-7 text-left">
                                        <h4 class="fs-13 text-truncate-2">
                                            <a href="2334648574-fOg5h.html" class="d-block text-reset">Premium Big
                                                Capacity Stackable Large Thick Transparent Magnetic Shoe Box Sneaker
                                                Shoes Storage AJ Display Boxes Shoebox Christmas Gift Birthday Present
                                                Storage Multipurpose Usage</a>
                                        </h4>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <div class="mt-2">
                                            <span class="fs-17 fw-600 text-primary">$13.08</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 order-0 order-xl-1">
                <div class="bg-white mb-3 shadow-sm rounded">
                    <div class="nav border-bottom aiz-nav-tabs">
                        <a href="2334648574-fOg5h.html#tab_default_1" data-toggle="tab"
                            class="p-3 fs-16 fw-600 text-reset active show">mô tả sản phẩm</a>
                        <a href="2334648574-fOg5h.html#tab_default_4" data-toggle="tab"
                            class="p-3 fs-16 fw-600 text-reset">đánh giá
                            <span class="rating rating-sm">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </span>(0)</a>
                    </div>

                    <div class="tab-content pt-0">
                        <div class="tab-pane fade active show" id="tab_default_1">
                            <div class="p-4">
                                <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                                    <p style="margin:0"><span style="font-family:none"></span></p>
                                    <h1 style="text-align:center;display:inline-block;width:100%"><strong
                                            style="font-weight:bold"><u>Premium Big Capacity Stackable Thick Shoe Box
                                                with magnetic Door </u></strong></h1>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><strong
                                            style="font-weight:bold"></strong></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0">
                                        <span>Upgraded Version with Durable Thicken material.</span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0">
                                        <span>Specification :</span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span>✔️PP
                                            Material, thick Material, does not easily break</span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0">
                                        <span>✔️Magnetic Door & Stackable </span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span>✔️Made
                                            of high-quality PP material</span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span>✔️One
                                            size fits most standard shoe sizes.</span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span>✔️Easy
                                            to assemble, no tools required.</span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0">
                                        <span>✔️Dustproof. For storing shoes or as an organizer storage box</span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span>Size:
                                            34cm x 25cm x 18.2cm</span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span>Choice
                                            of Color: Transparent / Black </span></p>
                                    <p style="size:3px;_root:[object Object];margin:0"><span></span></p>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/3bdf3ca37f1368d7fc0498f8ee67d90b.jpg"
                                                class=""></div>
                                    </div>
                                    <div style="margin:0"><span></span></div>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/1f5f0a7b7dfc8bdc36db34df3cdb42e4.jpg"
                                                class=""></div>
                                    </div>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/6ee556dd073107a5f857db09d531fc2f.jpg"
                                                class=""></div>
                                    </div>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/3267ca32ce5e27e206e9055fd0a9a87f.jpg"
                                                class=""></div>
                                    </div>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/99aea0152c78de8279049a45f770cb90.jpg"
                                                class=""></div>
                                    </div>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/7e7272332e9f20b0ffd125d339c0f758.jpg"
                                                class=""></div>
                                    </div>
                                    <div style="width:100%;margin:0">
                                        <div style="width:100%;display:block"><img style="width:100%;display:block"
                                                src="../../sg-live-01.slatic.net/p/a1b819a00585b7b0bb31d54c55c68395.jpg"
                                                class=""></div>
                                    </div>
                                    <p style="text-align:center;display:inline-block;width:100%;margin:0"><span></span>
                                    </p><span></span>
                                    <p style="margin:0"><span></span></p><img
                                        src="https://www.o0b.cn/i.php?t.png&rid=gw-4.6378a5c4043b9&p=233158193&k=00959&t=1668851142"
                                        style="display:none" />
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_default_2">
                            <div class="p-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="tab_default_4">
                            <div class="p-4">
                                <ul class="list-group list-group-flush">
                                </ul>

                                <div class="text-center fs-18 opacity-70">
                                    Chưa có nhận xét nào cho sản phẩm này.
                                </div>
                                <!--\u76d7\u7248\u9632\u62a4\u0020\u0020\u0071\u0069\u0020\u0065\u0020\u0034\u0039\u0035\u0032\u0020\u0038\u0038\u0038\u0037-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm">
                    <div class="border-bottom p-3">
                        <h3 class="fs-16 fw-600 mb-0">
                            <span class="mr-4">Những sảm phẩm tương tự</span>
                        </h3>
                    </div>
                    <div class="p-3">
                        <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="5" data-xl-items="3"
                            data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                            data-arrows='true' data-infinite='true'>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/1854604143-VAp84" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/8dfe4679f4464c4aa75db5a1939bf42f.jpg"
                                                alt="Eagle Creek Pack-It Reveal Hanging Toiletry Kit"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$57.48</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1854604143-VAp84"
                                                class="d-block text-reset">Eagle Creek Pack-It Reveal Hanging Toiletry
                                                Kit</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2359755072-0Ncnq" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/43a034995bcf8a646abba444d3ac5351.jpg"
                                                alt="Eagle Creek Pack-It Isolate Quick Trip Xs"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$31.08</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2359755072-0Ncnq"
                                                class="d-block text-reset">Eagle Creek Pack-It Isolate Quick Trip
                                                Xs</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2518896518-4WTtr" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/8c62c5828cd3230fafdfed73c3021a90.jpg"
                                                alt="Eagle Creek Pack-It Reveal Cube M"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$29.88</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2518896518-4WTtr"
                                                class="d-block text-reset">Eagle Creek Pack-It Reveal Cube M</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2518864647-Z8Kdf" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/431bfcfd0325f15406f5d7fcddf230a3.jpg"
                                                alt="Eagle Creek Pack-It Reveal Cube S"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$23.88</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2518864647-Z8Kdf"
                                                class="d-block text-reset">Eagle Creek Pack-It Reveal Cube S</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2519002019-7JRol" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/08646bb80bbb617eb90d29fa63b4d01e.jpg"
                                                alt="Eagle Creek Pack-It Gear Cube X3 M"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$115.20</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2519002019-7JRol"
                                                class="d-block text-reset">Eagle Creek Pack-It Gear Cube X3 M</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2359926503-dSjXE" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/41c40725cc5b0c5c6c75546bbdfbdfd6.jpg"
                                                alt="Eagle Creek Pack-It Reveal Expansion Cube S"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$31.08</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2359926503-dSjXE"
                                                class="d-block text-reset">Eagle Creek Pack-It Reveal Expansion Cube
                                                S</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/469840414-jSKBi" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/b6a2a10e38ab12f4b0a0c940621a89e5.jpg"
                                                alt="Makeup Bag Storage Bag Nylon Toiletry Bag Kits Storage Beauty Case Cosmetic bag Travel Wash Pouch"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$14.28</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/469840414-jSKBi"
                                                class="d-block text-reset">Makeup Bag Storage Bag Nylon Toiletry Bag
                                                Kits Storage Beauty Case Cosmetic bag Travel Wash Pouch</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2476728465-UcxWI" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/1c3adffb6ea06d5a63305ec30ec0384b.jpg"
                                                alt="Compression Bags Packing Cube Set 6 Pieces Set for Travel Organizer for Luggage and Backpack Waterproof Portable Dust Bag Clothes Storage Bag"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$56.57</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2476728465-UcxWI"
                                                class="d-block text-reset">Compression Bags Packing Cube Set 6 Pieces
                                                Set for Travel Organizer for Luggage and Backpack Waterproof Portable
                                                Dust Bag Clothes Storage Bag</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2518874635-qDqzP" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/3dd9b6bf94695a2f74ade5dc7abcee6b.jpg"
                                                alt="Eagle Creek Pack-It Gear Cube S"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$75.60</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2518874635-qDqzP"
                                                class="d-block text-reset">Eagle Creek Pack-It Gear Cube S</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="https://www.ebeebbuy.cc/product/2533650567-c43MG" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="../public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/f66a69448a108d0f664b696fcdcdc15a.jpg"
                                                alt="Eagle Creek Pack-It Gear Pouch S"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$34.68</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2533650567-c43MG"
                                                class="d-block text-reset">Eagle Creek Pack-It Gear Pouch S</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded shadow-sm mt-3">
                    <div class="border-bottom p-3">
                        <h3 class="fs-18 fw-600 mb-0">
                            <span>Truy vấn sản phẩm (0)</span>
                        </h3>
                    </div>
                    <p class="fs-14 fw-400 mb-0 ml-3 mt-2"><a href="https://www.ebeebbuy.cc/users/login">Đăng nhập</a>
                        or <a class="mr-1" href="https://www.ebeebbuy.cc/users/registration">Đăng ký</a>để gửi câu
                        hỏi của bạn cho người bán
                    </p>


                    <div class="pagination-area my-4 mb-0 ml-3">
                        <div class="border-bottom py-3">
                            <h3 class="fs-18 fw-600 mb-0">
                                <span>câu hỏi khác</span>
                            </h3>
                        </div>
                        <p>Chưa có ai hỏi người bán</p>
                        <div class="aiz-pagination py-2">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('shop2.layout.footer')
