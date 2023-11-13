<!DOCTYPE html>
<html lang="vn">

<head>

    <meta name="app-url" content="sellerhubvn.info">

    <title>Shopping | Save Money Better</title>


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.4/js.cookie.min.js" integrity="sha512-Nonc2AqL1+VEN+97F3n4YxucBOAL5BgqNwEVc2uUjdKOWAmzwj5ChdJQvN2KldAxkCxE4OenuJ/RL18bWxGGzA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-toggle text-reset py-2"
                                    data-toggle="dropdown"
                                    data-display="static"
                                >
                                    <img
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/assets/img/flags/{{__currentLanguage()}}.png" class="mr-2 lazyload"
                                        alt=""
                                        height="11"
                                    >
                                    <span class="opacity-60">
                                        {{ __currentLanguage() === 'vi' ? __t('Tiếng việt', 'Vietnamese') : __t('Tiếng anh', 'English') }}
                                    </span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="/change-language/{{__currentLanguage() === 'vi' ? 'en' : 'vi'}}" data-flag="{{__currentLanguage() === 'vi' ? 'en' : 'vi'}}" class="dropdown-item ">
                                            <img
                                                src="/public/assets/img/placeholder.jpg"
                                                data-src="/public/assets/img/flags/{{__currentLanguage() === 'vi' ? 'en' : 'vi'}}.png"
                                                class="mr-1 lazyload"
                                                alt=""
                                                height="11"
                                            >
                                            <span class="language">
                                                {{ __currentLanguage() !== 'vi' ? __t('Tiếng việt', 'Vietnamese') : __t('Tiếng anh', 'English') }}
                                            </span>
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
                            </style>
                            <li class="mobile">
                                <a style="color:#e62e04 !important" href="/shops/create"
                                    class="text-reset d-inline-block opacity-60 py-2">

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a style="color:#e62e04 !important" href="/shops/create"
                                    class="text-reset d-inline-block opacity-60 py-2">

                                    @if(!Auth::check())
                                        {{ __t('Bán ngay', 'Sell now')  }}
                                    @else
                                        @if (Auth::user()->role != 'customer')
                                            <a href="/to-manager">
                                                {{ __t('Trang điều khiển', 'Dashboard')  }}
                                            </a>
                                        @endif
                                    @endif
                                </a>

                            </li>
                            @if(!Auth::check())
                                <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                    <a href="/users/login" class="text-reset d-inline-block opacity-60 py-2">
                                        {{ __t('Đăng nhập', 'Login')  }}
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/users/registration" class="text-reset d-inline-block opacity-60 py-2">
                                        {{ __t('Đăng ký', 'Register')  }}
                                    </a>
                                </li>
                            @else
                            <li class="list-inline-item border-right border-left-0 pr-3 pl-0">
                                <a href="/user/" class="text-reset d-inline-block opacity-60 py-2">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="list-inline-item border-right border-left-0 pr-3 pl-0">
                                <a href="/user/logout" class="text-reset d-inline-block opacity-60 py-2">
                                    {{ __t('Đăng xuất', 'Logout')  }}
                                </a>
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
                                <img src="/public/uploads/all/VwBQ1GmLLisBmocOWOdSycMpbviwKwNHz3A8cFzD.png"
                                    alt="Shopping" class="mw-100 h-30px h-md-40px" height="40">
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
                                            <input
                                                type="text"
                                                class="border-0 border-lg form-control"
                                                id="search"
                                                name="keyword"
                                                placeholder="{{ __t('Tìm kiếm sản phẩm', 'Search products')  }}"
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
                                        <span class="nav-box-text d-none d-xl-block opacity-70">
                                            {{ __t('Đối chiếu', 'Compare')  }}
                                        </span>
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
                                        <span class="nav-box-text d-none d-xl-block opacity-70">
                                            {{ __t('Danh sách yêu thích', 'Wishlist') }}
                                        </span>
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
                                        <span class="nav-box-text d-none d-xl-block opacity-70">
                                            {{ __t('Giỏ hàng', 'Cart')  }}
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">
                                    <div class="p-3 fs-15 fw-600 p-3 border-bottom">
                                        {{ __t('Các mặt hàng trong giỏ hàng', 'Items in cart')  }}
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
                                        <span class="opacity-60">
                                            {{ __t('Tổng phụ', 'Subtotal') }}
                                        </span>
                                        <span class="fw-600" id="cart-total">${{ Cart::priceTotal()}}</span>
                                    </div>
                                    <div class="px-3 py-2 text-center border-top">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a
                                                    href="/cart"
                                                    class="btn btn-soft-primary btn-sm"
                                                >
                                                    {{ __t('Xem giỏ hàng', 'View cart')  }}
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
                                        <span class="fw-600 fs-16 mr-3">
                                            Thể loại
                                            {{ __t('Thể loại', 'Categories')  }}
                                        </span>
                                        <a href="/categories" class="text-reset">
                                            <span class="d-none d-lg-inline-block">
                                                {{ __t('Nhìn thấy tất cả', 'See all')  }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
