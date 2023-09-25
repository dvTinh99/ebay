<!DOCTYPE html>
<html lang="vn">

<head>

    <meta name="csrf-token" content="nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ">
    <meta name="app-url" content="//www.shop.btsdoors.test/">
    <meta name="file-base-url" content="//www.shop.btsdoors.test/">

    <title>ebay-shop | ebay-shop | Save Money.Live Better</title>


    <!-- Favicon -->
    <link rel="icon" href="https://www.ebeebbuy.cc/public/uploads/all/VwBQ1GmLLisBmocOWOdSycMpbviwKwNHz3A8cFzD.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://www.ebeebbuy.cc/public/assets/css/vendors.css">
    {{-- <link rel="stylesheet" href="https://www.ebeebbuy.cc/public/assets/css/aiz-core.css?v-23">
    <link rel="stylesheet" href="https://www.ebeebbuy.cc/public/assets/css/custom-style.css"> --}}
    <link rel="stylesheet" href="<?= asset('/kho')?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= asset('/shop')?>/assets/css/aiz-core.css">

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
                                        <a href="javascript:void(0)" data-flag="vn" class="dropdown-item ">
                                            <img src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                                data-src="https://www.ebeebbuy.cc/public/assets/img/flags/vn.png"
                                                class="mr-1 lazyload" alt="Vietnamese" height="11">
                                            <span class="language">Vietnamese</span>
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
            </div>
        </header>
