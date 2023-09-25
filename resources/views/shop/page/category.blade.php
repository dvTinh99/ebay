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

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="https://www.ebeebbuy.cc/users/login"
                                    class="text-reset d-inline-block opacity-60 py-2">Đăng nhập</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.ebeebbuy.cc/users/registration"
                                    class="text-reset d-inline-block opacity-60 py-2">Đăng ký</a>
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

                            <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                                <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                    <div
                                        class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">
                                        <span class="navbar-toggler-icon"></span>
                                    </div>
                                </div>
                            </div>
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
                                                    <i class="la la-search la-flip-horizontal fs-18"></i>
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
                                    <i class="la la-refresh la-2x opacity-80"></i>
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
                                    <i class="la la-heart-o la-2x opacity-80"></i>
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
                                    <i class="la la-shopping-cart la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill cart-count">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">xe đẩy</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

                                    <div class="text-center p-3">
                                        <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                        <h3 class="h6 fw-700">Giỏ của bạn trống trơn</h3>
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
                <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3"
                    id="hover-category-menu">
                    <div class="container">
                        <div class="row gutters-10 position-relative">
                            <div class="col-lg-3 position-static">
                                <div class="aiz-category-menu bg-white rounded  shadow-lg" id="category-sidebar">
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


        <section class="pt-4 mb-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <h1 class="fw-600 h4">Tất cả danh mục</h1>
                    </div>
                    <div class="col-lg-6">
                        <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item opacity-50">
                                <a class="text-reset" href="https://www.ebeebbuy.cc">Trang Chủ</a>
                            </li>
                            <li class="text-dark fw-600 breadcrumb-item">
                                <a class="text-reset" href="https://www.ebeebbuy.cc/categories">"Tất cả danh mục"</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-4">
            <div class="container">
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/pet-accessories-oceab" class="text-reset">Đồ dùng
                            cho thú cưng</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/-r0egg" class="text-reset">Thời trang nữ và phụ
                            kiện</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/sunglasses-byvz3">Kính râm nữ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/swimwear-and-beachwear-hy83u">Đồ bơi và
                                        Đồ đi biển</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/eye-glasses-lia9a">kính mắt phụ nữ</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/women-clothing-lingerie-sleep--lounge-nklyj">Quần
                                        áo nữ Đồ lót, Ngủ &amp; Phòng chờ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/accessories-ofru9">phụ kiện nữ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/women%20clothing">quần áo phụ nữ</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/women-bags-3ivrj">túi xách nữ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/women-shoes-3u8k2">Giay phụ nư</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/men%20clothing%20&amp;%20fashion"
                            class="text-reset">Thời Trang &amp; Phụ Kiện Nam</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/travel-nfipd">Perjalanan</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/sunglasses-oujoy">Kính râm nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/eyeglasses-haixe">Kính Mắt Nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/men-bags-ra1jd">Túi xách nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/accessories-rmthn">phụ kiện nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/underwear-heewr">đồ lót</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/men-shoes-kcit8">Giày nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/men-clothing-m20jk">quần áo nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/epidemic-prevention-supplies-xfhil"
                            class="text-reset">Vật liệu chống dịch</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/medical-cap-zjfhy">Mũ y tế</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/thermometer-8d7qr">nhiệt kế</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/goggles-wyrny">kính bảo hộ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/medical-cap-6x4ke">bọc giày</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/alcohol--disinfectant-bevfi">Cồn &amp;
                                        Chất khử trùng</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/face-shield-cybxp">Khiên che mặt</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/disposable-gloves-tpcsr">Găng tay dùng
                                        một lần</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/isolation-gown-roa2a">áo choàng cách
                                        ly</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/medical-masks-vtmbw">khẩu trang y tế</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/computer%20&amp;%20accessories"
                            class="text-reset">Các thiết bị điện tử</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/gadgets--other-cameras-d84ft">Tiện ích
                                        &amp; Máy ảnh khác</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/security-cameras--systems-hznte">Hệ
                                        thống &amp; Camera an ninh</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/action--video-cameras-e6qxz">Máy quay
                                        hành động / quay phim</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/digital-cameras-cxguv">Máy ảnh kĩ thuật
                                        số</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/console-gaming-xemmp">Bảng điều khiển
                                        chơi game</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/desktops-computers-7qrwb">Máy tính để
                                        bàn</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/laptops-l5uat">máy tính xách tay</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/tablets-5xkl0">Máy tính bảng</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mobiles-heduj">điện thoại di động</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/kids--toy-6j7m7" class="text-reset">Trẻ em &amp; đồ
                            chơi</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/sports-toys--outdoor-play-8su0u">Đồ chơi
                                        thể thao &amp; Vui chơi ngoài trời</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/electronic--remote-control-toys-6wutn">Đồ
                                        chơi điện tử &amp; điều khiển từ xa</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/maternity-care-qc0to">Chăm sóc thai
                                        sản</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/baby-gear-syp2c">Bé Gấu</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/baby-fashion--accessories-epwzd">Thời
                                        Trang &amp; Phụ Kiện Em Bé</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/toys--games-nq9zr">Đồ chơi &amp; Trò
                                        chơi</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/bath--baby-care-ict1a">Tắm &amp; Chăm
                                        sóc Em bé</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/nursing--feeding-ctbr5">Điều dưỡng &amp;
                                        Cho ăn</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/diapers--wipes-funug">Tã &amp; Khăn
                                        Lau</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/milk-formula--baby-food-m9s8y">Sữa công
                                        thức &amp; Thức ăn trẻ em</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mother--baby-ad74s">Mẹ &amp; Bé</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/sports--outdoor-quozm" class="text-reset">Thể thao
                            &amp; ngoài trời</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/-fytzc">Truyền thông, Âm nhạc &amp;
                                        Sách</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/racket-sports-g5vhj">môn thể thao dùng
                                        vợt</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/boxing-martial-arts--mma-xqyoh">Quyền
                                        anh, Võ thuật &amp; MMA</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/water-sports-8tvqu">Thể thao dưới
                                        nước</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/exercise--fitness-equipment-mfnry">Thiết
                                        bị tập thể dục &amp; thể hình</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/scooters-usruk">xe tay ga</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/outdoor-recreation-g8ort">Giải trí ngoài
                                        trời</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mens-sports-shoes-xpmo0">Giày Thể Thao
                                        Nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mens-sports-clothing-xgzcm">Quần Áo Thể
                                        Thao Nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/womens-sports-shoes-1xrhk">Giày Thể Thao
                                        Nữ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/womens-sports-clothing-di3ou">quần áo
                                        thể thao nữ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/automobile--motorcycle-jjc59" class="text-reset">Ô
                            tô &amp; Xe máy</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/motorcycle-hurp3">Xe máy</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/automotive-eq2zu">ô tô</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/jewelry--watches-9zv51" class="text-reset">Trang sức
                            &amp; Đồng hồ</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/keychain--ornaments-s2fwe">Móc khóa
                                        &amp; Đồ trang trí</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/jewelry-supplies-lo0mc">trang sức nữ</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/jewelry-fy0ic">trang sức nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mens-watches-swpkq">đồng hồ nam</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/womens-watches-4um0a">đồng hồ nữ</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/phone-accessories-fqzez" class="text-reset">Phụ Kiện
                            Điện Tử</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/-zabsg">Cửa hàng kĩ thuật số</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/network-components-u1mnn">Thành phần
                                        mạng</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/computer-components-10y9y">Linh kiện máy
                                        tính</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/computer-accessories-gkhlr">Phụ kiện máy
                                        tính</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/console-gaming-accessories-bzu5a">Phụ
                                        kiện máy chơi game</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/printers-b6so1">máy in</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/computer-accessories-ogems">Lưu trữ dữ
                                        liệu</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/camera-accessories-xsmhf">Phụ kiện máy
                                        ảnh</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/wearables-t1vla">thiết bị đeo</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mobile-accessories-6jm5x">Phụ kiện di
                                        động</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/audio-wfrpg">âm thanh</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/home-improvement--tools-ywx7z"
                            class="text-reset">Công cụ &amp; Cải tiến Trang chủ</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/stationery--craft-3ozl9">Văn phòng phẩm
                                        &amp; Thủ công</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/tools--home-improvement-pc1su">Công cụ
                                        &amp; Cải thiện Nhà cửa</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/furniture-ffjnu">Nội thất</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/home-dcor-i1j1q">trang trí nhà cửa</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/laundry--cleaning-equipment-b41ok">Thiết
                                        Bị Giặt &amp; Làm Sạch</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/storage--organisation-1wiqc">Lưu trữ
                                        &amp; Tổ chức</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/kitchen--dining-cjvbb">Nhà bếp và Phòng
                                        ăn</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/lighting-0h0qt">Thắp sáng</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/bath-rbjvw">Bồn tắm</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/bedding-kzrbv">Chăn ga gối đệm</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/home-decoration--appliance-ydsus"
                            class="text-reset">Trang trí nhà cửa &amp; Thiết bị</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/small-cooling--air-treatment-ruoiu">Làm
                                        mát nhỏ &amp; xử lý không khí</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/large-appliances-a0tuc">Thiết Bị
                                        Lớn</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/personal-care-appliances-ff4ln">Thiết
                                        Bị Chăm Sóc Cá Nhân</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/small-household-appliances-4c541">Đồ
                                        gia dụng nhỏ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/small-kitchen-appliances-f6njp">Thiết
                                        bị nhà bếp nhỏ</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/tv-accessories-mfz3g">Phụ Kiện Tivi</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/home-audio-6c0zx">âm thanh gia đình</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/televisions--videos-devices-pnmmn">Thiết
                                        bị Tivi &amp; Video</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="https://www.ebeebbuy.cc/category/health--beauty-83oss" class="text-reset">Sức khỏe
                            &amp; Làm đẹp</a>
                    </div>
                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/mens-care-ccmox">chăm sóc nam giới</a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/fragrances-aiebe">nước hoa</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/beauty-personal-care-nrpol">Chăm sóc
                                        sắc đẹp &amp; cá nhân</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/food-supplement-ildyp">Thực phẩm bổ
                                        sung</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/bath--body-4nje3">Tắm &amp; Dưỡng
                                        thể</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/hair-care-fjo8u">Chăm sóc tóc</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/makeup-niliq">Trang điểm</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                            <div class="col-lg-4 col-6 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="https://www.ebeebbuy.cc/category/beauty-skin-care-usybh">Chăm Sóc Da
                                        Đẹp</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('shop.layout.footer')
