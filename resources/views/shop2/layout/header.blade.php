<!DOCTYPE html>
<html lang="vn">

<head>

    <meta name="app-url" content="sellerhubvn.info">

    <title>ebay-shop | ebay-shop | Save Money.Live Better</title>


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public') }}/uploads/all/VwBQ1GmLLisBmocOWOdSycMpbviwKwNHz3A8cFzD.png">

    <!-- Google Fonts -->
    <link
        href="../fonts.googleapis.com/css%3Ffamily=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap.css"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/vendors.css">
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/aiz-core.css">
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/custom-style.css">


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Không có gì được chọn',
            nothing_found: 'Không kết quả',
            choose_file: 'Chọn tập tin',
            file_selected: 'Tệp đã chọn',
            files_selected: 'Tệp đã chọn',
            add_more_files: 'Thêm nhiều tập tin',
            adding_more_files: 'Thêm nhiều tập tin',
            drop_files_here_paste_or: 'Thả tệp vào đây, dán hoặc',
            browse: 'Duyệt qua',
            upload_complete: 'Tải lên hoàn tất',
            upload_paused: 'Đã tạm dừng tải lên',
            resume_upload: 'Tiếp tục Tải lên',
            pause_upload: 'Tạm dừng tải lên',
            retry_upload: 'Thử tải lên lại',
            cancel_upload: 'Hủy tải lên',
            uploading: 'Đang tải lên',
            processing: 'Xử lý',
            complete: 'Hoàn thành',
            file: 'Tập tin',
            files: 'Các tập tin',
        }
    </script>
    <style>
        html {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
            border: none;
        }

        body {
            position: relative;
            box-sizing: border-box;
            margin: 0;
            height: 100%;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }

        :root {
            --primary: #27d6bf;
            --hov-primary: #27d6bf;
            --soft-primary: rgba(39, 214, 191, 0.15);
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }

        @media only screen and (max-device-width: 480px) {
            .container,.container-md,.container-sm {
                max-width: 100%;
            }
            .aiz-main-wrapper {
                zoom: 2;
            }
            .gutters-5 {
                zoom : 1.4;
            }
        }
        @media only screen and (device-width: 820px) {
            .container,.container-md,.container-sm {
                max-width: 100%;
            }
            .aiz-main-wrapper {
                zoom: 2;
            }
            .gutters-5 {
                zoom : 1.4;
            }
        }
    </style>




</head>

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
                                    <img src="../public/assets/img/placeholder.jpg"
                                        data-src="/public/assets/img/flags/vn.png" class="mr-2 lazyload"
                                        alt="Vietnamese" height="11">
                                    <span class="opacity-60">Vietnamese</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                            <img src="../public/assets/img/placeholder.jpg"
                                                data-src="/public/assets/img/flags/en.png" class="mr-1 lazyload"
                                                alt="English" height="11">
                                            <span class="language">English</span>
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
                                <a style="color:#e62e04 !important" href="/shops/create"
                                    class="text-reset d-inline-block opacity-60 py-2">

                                </a>
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
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a style="color:#e62e04 !important" href="/shops/create"
                                    class="text-reset d-inline-block opacity-60 py-2">

                                    @if(!Auth::check())
                                        Bán Trên ebay
                                    @else
                                        @if (Auth::user()->role != 'customer')
                                            <a href="/to-manager">
                                            Trang điều khiển
                                            </a>
                                        @endif
                                    @endif
                                </a>

                            </li>
                            @if(!Auth::check())
                                <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                    <a href="/users/login" class="text-reset d-inline-block opacity-60 py-2">Đăng nhập</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/users/registration" class="text-reset d-inline-block opacity-60 py-2">Đăng
                                        ký</a>
                                </li>
                            @else
                            <li class="list-inline-item border-right border-left-0 pr-3 pl-0">
                                <a href="/user/" class="text-reset d-inline-block opacity-60 py-2">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="list-inline-item border-right border-left-0 pr-3 pl-0">
                                <a href="/user/logout" class="text-reset d-inline-block opacity-60 py-2">Đăng xuất</a>
                            </li>
                            @endif


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
                            <a class="d-block py-20px mr-3 ml-0" href="/">
                                <img src="../public/uploads/all/VwBQ1GmLLisBmocOWOdSycMpbviwKwNHz3A8cFzD.png"
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
                                <form action="/search" method="GET" class="stop-propagation">
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
                                <a href="login.html#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="/compare" class="d-flex align-items-center text-reset">
                                    <i class="la la-refresh la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill" id="cart-compare">{{ getCountCompare() }}</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Đối chiếu</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="wishlist">
                                <a href="/wishlists" class="d-flex align-items-center text-reset">
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
                                        <span class="badge badge-primary badge-inline badge-pill cart-count" id="cart-count">{{ getCountCart() }}</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">xe đẩy</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

                                    {{-- @if(\Cart::count() == 0)
                                    <div class="text-center p-3">
                                        <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                        <h3 class="h6 fw-700">Giỏ của bạn trống trơn</h3>
                                    </div>
                                    @else --}}
                                    <div class="p-3 fs-15 fw-600 p-3 border-bottom">
                                        Các mặt hàng trong giỏ hàng
                                    </div>
                                    <ul class="h-250px overflow-auto c-scrollbar-light list-group list-group-flush" id="ul-cart">
                                        @foreach (Cart::content() as $product)
                                        @if($product->options['type'] == 1)
                                        <li class="list-group-item">
                                            <span class="d-flex align-items-center">
                                                <a href="/product/{{ $product->id }}"
                                                    class="text-reset d-flex align-items-center flex-grow-1">
                                                    <img src="{{ $product->options['image'] }}"
                                                        data-src="{{ $product->options['image'] }}"
                                                        class="img-fit size-60px rounded ls-is-cached lazyloaded"
                                                        alt="AliToys alphabet flash cards Educational Toys Set 0-12 Months Baby Learning Language Quiet Cloth Book First Kids Soft Books Animal English Learning Card Can be washed">
                                                    <span class="minw-0 pl-2 flex-grow-1">
                                                        <span class="fw-600 mb-1 text-truncate-2">
                                                           {{ $product->name }}
                                                        </span>
                                                        <span class="">{{ $product->qty }}x</span>

                                                        <span class="">${{ $product->price }}</span>
                                                    </span>
                                                </a>
                                                <span class="">
                                                    <button onclick="removeFromCart('{{ $product->rowId }}')"
                                                        class="btn btn-sm btn-icon stop-propagation">
                                                        <i class="la la-close"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </li>
                                        @endif
                                        @endforeach

                                    </ul>
                                    <div class="px-3 py-2 fs-15 border-top d-flex justify-content-between">
                                        <span class="opacity-60">Tổng phụ</span>
                                        <span class="fw-600" id="cart-total">${{ Cart::priceTotal()}}</span>
                                    </div>
                                    <div class="px-3 py-2 text-center border-top">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="/cart"
                                                    class="btn btn-soft-primary btn-sm">
                                                    Xem giỏ hàng
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- @endif --}}

                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-around align-items-center align-items-stretch ml-3">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-circle btn-light"
                                        href="https://cskh.mp3vnvip.top/client/{{ rand(999, 999999) }}"
                                        target="_blank" title="địa chỉ dịch vụ khách hàng">
                                        <img class="las la-bell fs-24" width="100%" height="100%"
                                            src="../public/assets/img/customer_service.png">
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
                                        <a href="/categories" class="text-reset">
                                            <span class="d-none d-lg-inline-block">Nhìn thấy tất cả ></span>
                                        </a>
                                    </div>
                                    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                                        <li class="category-nav-element" data-id="116">
                                            <a href="/category/pet-accessories-oceab"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg" data-src=""
                                                    width="16" alt="Đồ dùng cho thú cưng"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Đồ dùng cho thú cưng</span>
                                            </a>
                                        </li>
                                        <li class="category-nav-element" data-id="15">
                                            <a href="/category/-r0egg"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg" data-src=""
                                                    width="16" alt="Thời trang nữ và phụ kiện"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Thời trang nữ và phụ kiện</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="2">
                                            <a href="/category/men%20clothing%20&amp;%20fashion"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/YTrXmHPHEBAeW73ffIhMuvOkpDsDbd1IbHVGDaZh.jpg"
                                                    width="16" alt="Thời Trang &amp; Phụ Kiện Nam"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Thời Trang &amp; Phụ Kiện Nam</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="68">
                                            <a href="/category/epidemic-prevention-supplies-xfhil"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg" data-src=""
                                                    width="16" alt="Vật liệu chống dịch"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Vật liệu chống dịch</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="3">
                                            <a href="/category/computer%20&amp;%20accessories"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/aZrKPk8DiOV4C5wAMt5ObBC3Jk5dSpnWUuLHP8xe.jpg"
                                                    width="16" alt="Các thiết bị điện tử"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Các thiết bị điện tử</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="4">
                                            <a href="/category/kids--toy-6j7m7"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/sC6ULeGDfqVbu1b3LcqrTOL5pm4UGQedv0kbHDIv.jpg"
                                                    width="16" alt="Trẻ em &amp; đồ chơi"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Trẻ em &amp; đồ chơi</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="5">
                                            <a href="/category/sports--outdoor-quozm"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/FwZlWQdDtdap6FDGukabtPR9nGISL2SINWeDUlLV.jpg"
                                                    width="16" alt="Thể thao &amp; ngoài trời"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Thể thao &amp; ngoài trời</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="6">
                                            <a href="/category/automobile--motorcycle-jjc59"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/xjmjKIo32nm4WUsDbDgpyEOyJtDNXSCqZvrclGPL.jpg"
                                                    width="16" alt="Ô tô &amp; Xe máy"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Ô tô &amp; Xe máy</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="7">
                                            <a href="/category/jewelry--watches-9zv51"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/AmrpWEDDbar3ylIjWdVvyIxHrAhcYfq9EGGY9tjh.jpg"
                                                    width="16" alt="Trang sức &amp; Đồng hồ"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Trang sức &amp; Đồng hồ</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="8">
                                            <a href="/category/phone-accessories-fqzez"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/EF9g1my5HQIF8tGgEjNGW1vxR8JajuhSvZ1C0uBn.jpg"
                                                    width="16" alt="Phụ Kiện Điện Tử"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                                <span class="cat-name">Phụ Kiện Điện Tử</span>
                                            </a>
                                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-nav-element" data-id="9">
                                            <a href="/category/home-improvement--tools-ywx7z"
                                                class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="../public/assets/img/placeholder.jpg"
                                                    data-src="/public/uploads/all/n3HgCaj2U1rbs12p3TVUKNbCVD3Jo4r4hYOcEzH2.jpg"
                                                    width="16" alt="Công cụ &amp; Cải tiến Trang chủ"
                                                    onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
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
