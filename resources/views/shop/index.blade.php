@include('shop.layout.header')

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">
        <!-- Header -->
        <!-- Top Bar -->
        <div class="top-navbar bg-white border-bottom border-soft-secondary z-1035">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                            <li class="list-inline-item dropdown mr-3" id="lang-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2"
                                    data-toggle="dropdown" data-display="static">
                                    <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/assets/img/flags/vn.png"
                                        class="mr-2 lazyload" alt="Vietnamese" height="11">
                                    <span class="opacity-60">Vietnamese</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/en.png"
                                                class="mr-1 lazyload" alt="English" height="11">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="sa" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/sa.png"
                                                class="mr-1 lazyload" alt="Arabic" height="11">
                                            <span class="language">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="cn" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/cn.png"
                                                class="mr-1 lazyload" alt="中文" height="11">
                                            <span class="language">中文</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="hk" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/hk.png"
                                                class="mr-1 lazyload" alt="繁体中文" height="11">
                                            <span class="language">繁体中文</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="jp" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/jp.png"
                                                class="mr-1 lazyload" alt="にほんご" height="11">
                                            <span class="language">にほんご</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="kr" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/kr.png"
                                                class="mr-1 lazyload" alt="한국어" height="11">
                                            <span class="language">한국어</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="id" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/id.png"
                                                class="mr-1 lazyload" alt="Indonesian" height="11">
                                            <span class="language">Indonesian</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="vn" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/vn.png"
                                                class="mr-1 lazyload" alt="Vietnamese" height="11">
                                            <span class="language">Vietnamese</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="my" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/my.png"
                                                class="mr-1 lazyload" alt="Malay" height="11">
                                            <span class="language">Malay</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="by" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/by.png"
                                                class="mr-1 lazyload" alt="Belarusian" height="11">
                                            <span class="language">Belarusian</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="ru" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/ru.png"
                                                class="mr-1 lazyload" alt="Россия" height="11">
                                            <span class="language">Россия</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="es" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/es.png"
                                                class="mr-1 lazyload" alt="Español" height="11">
                                            <span class="language">Español</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="fa" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/fa.png"
                                                class="mr-1 lazyload" alt="فارس" height="11">
                                            <span class="language">فارس</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="th" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/th.png"
                                                class="mr-1 lazyload" alt="แบบไทย" height="11">
                                            <span class="language">แบบไทย</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="pt" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/pt.png"
                                                class="mr-1 lazyload" alt="Português" height="11">
                                            <span class="language">Português</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="tr" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/tr.png"
                                                class="mr-1 lazyload" alt="Türkçe" height="11">
                                            <span class="language">Türkçe</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <style>
                                .mobile {
                                    display: none
                                }

                                @media (max-width:550px) {
                                    .mobile {
                                        display: block
                                    }
                                }
                                }
                            </style>
                            <li class="mobile">
                                <a style="color:#e62e04 !important" href="https://www.ebeebbuy.cc/shops/create"
                                    class="text-reset d-inline-block opacity-60 py-2">Bán Trên ebay</a>
                            </li>
                            <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">

                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 opacity-60"
                                    data-toggle="dropdown" data-display="static">
                                    U.S. Dollar $
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">


                                    <li>
                                        <a class="dropdown-item  active " href="javascript:void(0)"
                                            data-currency="USD">U.S. Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="AUD">Australian Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="BRL">Brazilian Real (R$)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="CAD">Canadian Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CZK">Czech
                                            Koruna (Kč)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="DKK">Danish Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="EUR">Euro
                                            (€)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="HKD">Hong
                                            Kong Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="HUF">Hungarian Forint (Ft)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="ILS">Israeli New Sheqel (₪)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="JPY">Japanese Yen (¥)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MYR">Malaysian Ringgit (RM)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MXN">Mexican Peso ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="NOK">Norwegian Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="NZD">New
                                            Zealand Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PHP">Philippine Peso (₱)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PLN">Polish Zloty (zł)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="GBP">Pound
                                            Sterling (£)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="RUB">Russian Ruble (руб)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SGD">Singapore Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="Rupee">Indian Rupee (Rs)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a style="color:#e62e04 !important" href="https://www.ebeebbuy.cc/shops/create"
                                    class="text-reset d-inline-block opacity-60 py-2">Bán Trên ebay</a>

                            </li>


                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-reset" data-toggle="dropdown"
                                    href="javascript:void(0);" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <i class="fa fa-bell fs-18"></i>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">Thông báo</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="py-4 text-center fs-16">
                                                    Không tìm thấy thông báo
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="https://www.ebeebbuy.cc/all-notifications"
                                            class="text-reset d-block py-2">
                                            Xem tất cả thông báo
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="https://www.ebeebbuy.cc/dashboard"
                                    class="text-reset d-inline-block opacity-60 py-2">Bảng điều khiển của tôi</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.ebeebbuy.cc/logout"
                                    class="text-reset d-inline-block opacity-60 py-2">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Top Bar -->
        <header class=" z-1020 bg-white border-bottom shadow-sm">
            <div class="position-relative logo-bar-area z-1">
                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block py-20px mr-3 ml-0" href="https://www.ebeebbuy.cc">
                                <img src="https://www.ebeebbuy.cc/public/uploads/all/VwBQ1GmLLisBmocOWOdSycMpbviwKwNHz3A8cFzD.png"
                                    alt="ebay Shop" class="mw-100 h-30px h-md-40px" height="40">
                            </a>

                        </div>
                        <div class="d-lg-none ml-auto mr-0">
                            <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                                data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a>
                        </div>

                        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                            <div class="position-relative flex-grow-1">
                                <form action="https://www.ebeebbuy.cc/search" method="GET"
                                    class="stop-propagation">
                                    <div class="d-flex position-relative align-items-center">
                                        <div class="d-lg-none" data-toggle="class-toggle"
                                            data-target=".front-header-search">
                                            <button class="btn px-2" type="button"><i
                                                    class="la la-2x la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="border-0 border-lg form-control"
                                                id="search" name="keyword" placeholder="bạn muốn mua gì ..."
                                                autocomplete="off">
                                            <div class="input-group-append d-none d-lg-block">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-search la-flip-horizontal fs-18"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                                    style="min-height: 200px">
                                    <div class="search-preloader absolute-top-center">
                                        <div class="dot-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none p-3 text-center fs-16">

                                    </div>
                                    <div id="search-content" class="text-left">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-none d-lg-none ml-3 mr-0">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="https://www.ebeebbuy.cc/compare"
                                    class="d-flex align-items-center text-reset">
                                    <i class="fa fa-refresh fa-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Đối chiếu</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="wishlist">
                                <a href="https://www.ebeebbuy.cc/wishlists"
                                    class="d-flex align-items-center text-reset">
                                    <i class="fa fa-heart-o fa-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Danh sách yêu
                                            thích</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                            <div class="nav-cart-box dropdown h-100" id="cart_items">
                                <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100"
                                    data-toggle="dropdown" data-display="static">
                                    <i class="fa fa-shopping-cart fa-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill cart-count">
                                            1
                                        </span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">xe đẩy</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

                                    <div class="p-3 fs-15 fw-600 p-3 border-bottom">
                                        Các mặt hàng trong giỏ hàng
                                    </div>
                                    <ul class="h-250px overflow-auto c-scrollbar-light list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span class="d-flex align-items-center">
                                                <a href="https://www.ebeebbuy.cc/product/670568594-UQrqa"
                                                    class="text-reset d-flex align-items-center flex-grow-1">
                                                    <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                        data-src="https://www.ebeebbuy.cc/public/download/p/0ac9d0b976e716e7d5d81a20916e8fbb.jpg"
                                                        class="img-fit lazyload size-60px rounded"
                                                        alt="Quality Leather Car Seat Cover Universal Automobiles Seat Covers Protector Interior Accessories">
                                                    <span class="minw-0 pl-2 flex-grow-1">
                                                        <span class="fw-600 mb-1 text-truncate-2">
                                                            Quality Leather Car Seat Cover Universal Automobiles Seat
                                                            Covers Protector Interior Accessories
                                                        </span>
                                                        <span class="">1x</span>

                                                        <span class="">$61.08</span>
                                                    </span>
                                                </a>
                                                <span class="">
                                                    <button onclick="removeFromCart(254)"
                                                        class="btn btn-sm btn-icon stop-propagation">
                                                        <i class="la la-close"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="px-3 py-2 fs-15 border-top d-flex justify-content-between">
                                        <span class="opacity-60">Tổng phụ</span>
                                        <span class="fw-600">$61.08</span>
                                    </div>
                                    <div class="px-3 py-2 text-center border-top">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="https://www.ebeebbuy.cc/cart"
                                                    class="btn btn-soft-primary btn-sm">
                                                    Xem giỏ hàng
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://www.ebeebbuy.cc/checkout"
                                                    class="btn btn-primary btn-sm">
                                                    Thủ tục thanh toán
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-around align-items-center align-items-stretch ml-3">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-circle btn-light"
                                        href="https://chat.ichatlink.net/widget/standalone.html?eid=0c95e3378016c8f24c5132454abffffa&amp;groupid=a79ec2c6ca5975b3f910ed1f9cb12e14&amp;language=vi"
                                        target="_blank" title="địa chỉ dịch vụ khách hàng">
                                        <img class="las la-bell fs-24" width="100%" height="100%"
                                            src="https://www.ebeebbuy.cc/public/assets/img/customer_service.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="modal fade" id="order_details" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="home-banner-area mb-4 pt-3">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static d-none d-lg-block">
                        <div class="aiz-category-menu bg-white rounded  shadow-sm">
                            <div
                                class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
                                <span class="fw-600 fs-16 mr-3">Thể loại</span>
                                <a href="https://www.ebeebbuy.cc/categories" class="text-reset">
                                    <span class="d-none d-lg-inline-block">Nhìn thấy tất cả ></span>
                                </a>
                            </div>
                            <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                                <li class="category-nav-element" data-id="116">
                                    <a href="https://www.ebeebbuy.cc/category/pet-accessories-oceab"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="" width="16" alt="Đồ dùng cho thú cưng"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Đồ dùng cho thú cưng</span>
                                    </a>
                                </li>
                                <li class="category-nav-element" data-id="15">
                                    <a href="https://www.ebeebbuy.cc/category/-r0egg"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="" width="16" alt="Thời trang nữ và phụ kiện"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Thời trang nữ và phụ kiện</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="2">
                                    <a href="https://www.ebeebbuy.cc/category/men%20clothing%20&amp;%20fashion"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/YTrXmHPHEBAeW73ffIhMuvOkpDsDbd1IbHVGDaZh.jpg"
                                            width="16" alt="Thời Trang &amp; Phụ Kiện Nam"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Thời Trang &amp; Phụ Kiện Nam</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="68">
                                    <a href="https://www.ebeebbuy.cc/category/epidemic-prevention-supplies-xfhil"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="" width="16" alt="Vật liệu chống dịch"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Vật liệu chống dịch</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="3">
                                    <a href="https://www.ebeebbuy.cc/category/computer%20&amp;%20accessories"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/aZrKPk8DiOV4C5wAMt5ObBC3Jk5dSpnWUuLHP8xe.jpg"
                                            width="16" alt="Các thiết bị điện tử"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Các thiết bị điện tử</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="4">
                                    <a href="https://www.ebeebbuy.cc/category/kids--toy-6j7m7"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/sC6ULeGDfqVbu1b3LcqrTOL5pm4UGQedv0kbHDIv.jpg"
                                            width="16" alt="Trẻ em &amp; đồ chơi"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Trẻ em &amp; đồ chơi</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="5">
                                    <a href="https://www.ebeebbuy.cc/category/sports--outdoor-quozm"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/FwZlWQdDtdap6FDGukabtPR9nGISL2SINWeDUlLV.jpg"
                                            width="16" alt="Thể thao &amp; ngoài trời"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Thể thao &amp; ngoài trời</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="6">
                                    <a href="https://www.ebeebbuy.cc/category/automobile--motorcycle-jjc59"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/xjmjKIo32nm4WUsDbDgpyEOyJtDNXSCqZvrclGPL.jpg"
                                            width="16" alt="Ô tô &amp; Xe máy"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Ô tô &amp; Xe máy</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="7">
                                    <a href="https://www.ebeebbuy.cc/category/jewelry--watches-9zv51"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/AmrpWEDDbar3ylIjWdVvyIxHrAhcYfq9EGGY9tjh.jpg"
                                            width="16" alt="Trang sức &amp; Đồng hồ"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Trang sức &amp; Đồng hồ</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="8">
                                    <a href="https://www.ebeebbuy.cc/category/phone-accessories-fqzez"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/EF9g1my5HQIF8tGgEjNGW1vxR8JajuhSvZ1C0uBn.jpg"
                                            width="16" alt="Phụ Kiện Điện Tử"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Phụ Kiện Điện Tử</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="category-nav-element" data-id="9">
                                    <a href="https://www.ebeebbuy.cc/category/home-improvement--tools-ywx7z"
                                        class="text-truncate text-reset py-2 px-3 d-block">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                            data-src="https://www.ebeebbuy.cc/public/uploads/all/n3HgCaj2U1rbs12p3TVUKNbCVD3Jo4r4hYOcEzH2.jpg"
                                            width="16" alt="Công cụ &amp; Cải tiến Trang chủ"
                                            onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name">Công cụ &amp; Cải tiến Trang chủ</span>
                                    </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true"
                            data-dots="true" data-autoplay="true">
                            <div class="carousel-box">
                                <a href="https://">
                                    <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                        src="https://www.ebeebbuy.cc/public/uploads/all/olqknhpEizdysiBSCuZ6XK5YXJ9nnPeBI2UsQkpI.jpg"
                                        alt="ebay Shop promo" height="315"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder-rect.jpg';">
                                </a>
                            </div>
                            <div class="carousel-box">
                                <a href="">
                                    <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                        src="https://www.ebeebbuy.cc/public/uploads/all/63UjjMKy25oqaXvoEAoBhECNB2bNxgLy9Cjb1NrQ.jpg"
                                        alt="ebay Shop promo" height="315"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder-rect.jpg';">
                                </a>
                            </div>
                            <div class="carousel-box">
                                <a href="">
                                    <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                        src="https://www.ebeebbuy.cc/public/uploads/all/K7zsD97YfwdQ8fKc16dZIRmRJC0DaDkxy83TpzOz.jpg"
                                        alt="ebay Shop promo" height="315"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder-rect.jpg';">
                                </a>
                            </div>
                            <div class="carousel-box">
                                <a href="">
                                    <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                        src="https://www.ebeebbuy.cc/public/uploads/all/iKKXiL9jniaNt7NDtlJrhhhSXJeBYOSg2SZL07GP.jpg"
                                        alt="ebay Shop promo" height="315"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder-rect.jpg';">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Flash Deal 原始版本 -->


        <div id="section_newest">
            <section class="mb-4">
                <div class="container">
                    <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                                    Sản phẩm mới
                                    <!--\u0069\u0073\u0068\u006f\u0070\u0034\u0036\u0037\u0039\u0038-->
                                </span>
                            </h3>
                        </div>
                        <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                            data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                            data-arrows='true'>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/670568594-UQrqa" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/0ac9d0b976e716e7d5d81a20916e8fbb.jpg"
                                                alt="Quality Leather Car Seat Cover Universal Automobiles Seat Covers Protector Interior Accessories"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150413)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150413)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150413)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$61.08</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/670568594-UQrqa"
                                                class="d-block text-reset">Quality Leather Car Seat Cover Universal
                                                Automobiles Seat Covers Protector Interior Accessories</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1519736809-nQgJg" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/0bd395259b552f133b5399a881b0fcc5.jpg"
                                                alt="2Pieces LED Car Headlight 10000LM Auto LED Headlight H4 H1 H7 H8 H9 H11 H16 9005 HB3 9006 HB4 3000K 4300K 6000K 8000K"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150412)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150412)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150412)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$10.87</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1519736809-nQgJg"
                                                class="d-block text-reset">2Pieces LED Car Headlight 10000LM Auto LED
                                                Headlight H4 H1 H7 H8 H9 H11 H16 9005 HB3 9006 HB4 3000K 4300K 6000K
                                                8000K</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1634086566-KDvlG" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/dbd6dade9c75f354570ea61e20462f6c.jpg"
                                                alt="JPK Universal Motorbike Touring Saddle Bag Motorcycle Canvas Panniers Box bike rear pack motorcycle backpack"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150411)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150411)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150411)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$28.76</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1634086566-KDvlG"
                                                class="d-block text-reset">JPK Universal Motorbike Touring Saddle Bag
                                                Motorcycle Canvas Panniers Box bike rear pack motorcycle backpack</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1715461549-vxpj6" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/bd48c3e379207bd96f01a7fb55acad27.jpg"
                                                alt="BT-12 Anti-interference Bluetooth Motorcycle Helmet Headset Wireless Motorcycle Headphone Speaker Hands-Free Motorbike Headphone"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150410)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150410)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150410)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$17.99</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1715461549-vxpj6"
                                                class="d-block text-reset">BT-12 Anti-interference Bluetooth Motorcycle
                                                Helmet Headset Wireless Motorcycle Headphone Speaker Hands-Free
                                                Motorbike Headphone</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1765869187-bJTo9" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/f6557c82f435de3bb0699cd2aff38142.jpg"
                                                alt="【25 x 12 x 24cm】(2pcs) Leather Motorcycle Saddle Bag Waterproof PU Leather Side Bag Luggage Tool Storage Pouch For Harley Sportster Softail Honda Suzuki Yamaha Cruiser"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150409)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150409)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150409)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$27.60</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1765869187-bJTo9"
                                                class="d-block text-reset">【25 x 12 x 24cm】(2pcs) Leather Motorcycle
                                                Saddle Bag Waterproof PU Leather Side Bag Luggage Tool Storage Pouch For
                                                Harley Sportster Softail Honda Suzuki Yamaha Cruiser</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/2473174447-zF9o1" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/ccc98fcb0fee60479eeef52e1ad98db4.jpg"
                                                alt="Winter Warm Windproof Waterproof Touch Screen Anti-slip Gloves -30℃ Cold-proof Glove Mitten For Outdoor Sports Skiing Riding Cycling"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150408)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150408)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150408)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$7.45</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2473174447-zF9o1"
                                                class="d-block text-reset">Winter Warm Windproof Waterproof Touch
                                                Screen Anti-slip Gloves -30℃ Cold-proof Glove Mitten For Outdoor Sports
                                                Skiing Riding Cycling</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1773536943-AtbUZ" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/fc3a8d9a8dc0a7a338a3cb7f7f01bece.jpg"
                                                alt="KOMINE GK160 Motorcycle Gloves Carbon Fiber Hard Shell Riding Shatter-resistant Gloves Knight Gloves Short Racing Gloves"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150407)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150407)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150407)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$27.56</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1773536943-AtbUZ"
                                                class="d-block text-reset">KOMINE GK160 Motorcycle Gloves Carbon Fiber
                                                Hard Shell Riding Shatter-resistant Gloves Knight Gloves Short Racing
                                                Gloves</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1738813376-D1uhu" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/ac8cf432537d44961574b7f76ef435dd.jpg"
                                                alt="Hozzen Ice Silk Gloves Non-Slip Breathable Outdoor Sports Driving Riding Touch Screen Gloves Thin Anti-UV Protection Fitness Fishing Gloves"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150406)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150406)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150406)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$4.12</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1738813376-D1uhu"
                                                class="d-block text-reset">Hozzen Ice Silk Gloves Non-Slip Breathable
                                                Outdoor Sports Driving Riding Touch Screen Gloves Thin Anti-UV
                                                Protection Fitness Fishing Gloves</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/2245894773-sLKcv" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/fa1892c8398ba6dfbdaa8928c5e7836e.jpg"
                                                alt="2022 new F1 racing suit Red Bull team short-sleeved t-shirt Polo summer men&#039;s sports quick-drying Verstappen same paragraph"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150405)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150405)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150405)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$18.97</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2245894773-sLKcv"
                                                class="d-block text-reset">2022 new F1 racing suit Red Bull team
                                                short-sleeved t-shirt Polo summer men&#039;s sports quick-drying
                                                Verstappen same paragraph</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/1087868446-nPRiN" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/kf/S0041345b455f45e489ec3ae844a3240aZ.jpg"
                                                alt="CNY Gift Japanese Wristlet Bag / Lunch Bag /  / Teacher Day Gift Idea / Drawstring Pouch / Knot Bag / Tote Bags / wristlet pouch / wristlet / Goodie bag / Gift Bag / Japanese style wristlet / Para Liv"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150386)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150386)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150386)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$4.79</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/1087868446-nPRiN"
                                                class="d-block text-reset">CNY Gift Japanese Wristlet Bag / Lunch Bag /
                                                / Teacher Day Gift Idea / Drawstring Pouch / Knot Bag / Tote Bags /
                                                wristlet pouch / wristlet / Goodie bag / Gift Bag / Japanese style
                                                wristlet / Para Liv</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/2441014482-LMk1j" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/p/bd802b97e3b4757372f3990e5377a3ba.jpg"
                                                alt="Zodvboz Men&#039;s Fashion Watch 30M Waterproof Digital Wrist Watch LED Alarm Watch Sports Watch Men&#039;s Sports Watch Men&#039;s Sports Watch"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150385)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150385)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150385)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$12.60</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/2441014482-LMk1j"
                                                class="d-block text-reset">Zodvboz Men&#039;s Fashion Watch 30M
                                                Waterproof Digital Wrist Watch LED Alarm Watch Sports Watch Men&#039;s
                                                Sports Watch Men&#039;s Sports Watch</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                        <a href="https://www.ebeebbuy.cc/product/278260439-Fxbds" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/download/original/ece1bf697c3021f7892118a047b4ce27.jpg"
                                                alt="SKMEI New Men Sport Watches Digital Fashion Watch Chronograph Dual Display Alarm 50M Watwrproof EL Light Wristwatches 1155B"
                                                onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(150384)"
                                                data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToCompare(150384)"
                                                data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                                data-placement="left">
                                                <i class="las la-sync"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(150384)"
                                                data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                                data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">$15.48</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i><i class='las la-star'></i><i
                                                class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="https://www.ebeebbuy.cc/product/278260439-Fxbds"
                                                class="d-block text-reset">SKMEI New Men Sport Watches Digital Fashion
                                                Watch Chronograph Dual Display Alarm 50M Watwrproof EL Light
                                                Wristwatches 1155B</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div id="section_featured">
        </div>


        <div id="section_best_selling">

        </div>

        <!-- Auction Product -->
        <div id="section_home_categories">

        </div>

        @include('shop.layout.footer')
