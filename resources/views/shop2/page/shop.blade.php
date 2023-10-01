@include('shop2.layout.header')

        <div class="modal fade" id="order_details" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>


        <section class="pt-5 mb-4 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="d-flex justify-content-center">
                            <img height="70" class="lazyload"
                                src="/public/assets/img/placeholder.jpg"
                                data-src=" /public/uploads/all/FPTSB16ik6nWnRsbvY5nfTUrLi5KgBceayrNODSn.jpeg "
                                alt="XMen OSIL">
                            <div class="pl-4 text-left">
                                <h1 class="fw-600 h4 mb-0">XMen OSIL
                                    <span class="ml-2"><i class="fa fa-check-circle"
                                            style="color:green"></i></span>
                                </h1>
                                <div class="rating rating-sm mb-1">
                                    <i class='las la-star active'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <div class="location opacity-60">1B Trương Quốc Dung,phường 8, quận Phú Nhuận,Tp.HCM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-0">
                        <ul class="list-inline mb-0 text-center text-lg-left">
                            <li class="list-inline-item ">
                                <a class="text-reset d-inline-block fw-600 fs-15 p-3  border-bottom border-primary border-width-2 "
                                    href="/shop/XMen-OSIL-993">Trang chủ cửa hàng</a>
                            </li>
                            <li class="list-inline-item ">
                                <a class="text-reset d-inline-block fw-600 fs-15 p-3 "
                                    href="/shop/XMen-OSIL-993/top-selling">Ban chạy nhât</a>
                            </li>
                            <li class="list-inline-item ">
                                <a class="text-reset d-inline-block fw-600 fs-15 p-3 "
                                    href="/shop/XMen-OSIL-993/all-products">Tất cả sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-0">
                        <ul class="text-center text-lg-right mt-4 mt-lg-0 social colored list-inline mb-0">
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true"
                    data-dots="true" data-autoplay="true">
                </div>
            </div>
        </section>
        <section class="mb-4">
            <div class="container">
                <div class="text-center mb-4">
                    <h3 class="h3 fw-600 border-bottom">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Sản phẩm nổi
                            bật</span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="aiz-carousel gutters-10" data-items="6" data-xl-items="5" data-lg-items="4"
                            data-md-items="3" data-sm-items="2" data-xs-items="2" data-autoplay='true'
                            data-infinute="true" data-dots="true">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <div class="container">
                <div class="mb-4">
                    <h3 class="h3 fw-600 border-bottom">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                            Sản phẩm mới về
                        </span>
                    </h3>
                </div>
                <div class="row gutters-5 row-cols-xxl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2226893207-x4bcR" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/ee82d780f7e0e8b0c22424f8a67b0c8d.jpg"
                                        alt="Nintendo Switch Pro Controller (Original/Black)"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134560)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134560)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134560)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$49.94</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2226893207-x4bcR"
                                        class="d-block text-reset">Nintendo Switch Pro Controller (Original/Black)</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2114973833-7783J" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/41a4572a5aafa80961aa9420d1a81e77.jpg"
                                        alt="Original GuliKit KingKong 2 Pro Controller NS09 No Stick Drift with Joystick and Special Ai Key Somatosensory Vibration Mechanical Game Handle NS08 King Kong 2 Wireless Bluetooth Gamepad for Nintendo "
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134561)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134561)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134561)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$87.90</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2114973833-7783J"
                                        class="d-block text-reset">Original GuliKit KingKong 2 Pro Controller NS09 No
                                        Stick Drift with Joystick and Special Ai Key Somatosensory Vibration Mechanical
                                        Game Handle NS08 King Kong 2 Wireless Bluetooth Gamepad for Nintendo </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2403538048-4b3Tk" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/2d83ab39f4f45f91a1c1808b5ca30856.jpg"
                                        alt="★Medicube★Deep Collagen Firming Sun Cream 50ml / TOPKOREA / Shipping from korea"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134562)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134562)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134562)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$42.75</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2403538048-4b3Tk"
                                        class="d-block text-reset">★Medicube★Deep Collagen Firming Sun Cream 50ml /
                                        TOPKOREA / Shipping from korea</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2230267552-vcXXD" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/781ddd81e584a0131eb0e75df0ec0de5.jpg"
                                        alt="★Numbuzin★ GOODBYE DEAD CELL TONER, MAKEUP BOOSTING TONER, SUPER GLOWING ESSENCE TONER 200ml / TOPKOREA / Shipping from korea"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134563)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134563)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134563)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$28.05</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2230267552-vcXXD"
                                        class="d-block text-reset">★Numbuzin★ GOODBYE DEAD CELL TONER, MAKEUP BOOSTING
                                        TONER, SUPER GLOWING ESSENCE TONER 200ml / TOPKOREA / Shipping from korea</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/736542063-Dj1pA" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/534b2eb6ad96bf4df85891a8d18e7a31.jpg"
                                        alt="REJURAN Healer Turnover Ampoule 1-[10ml X 3 piece] &amp; 2-[ 30ml big bottle]"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134564)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134564)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134564)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$59.88</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/736542063-Dj1pA"
                                        class="d-block text-reset">REJURAN Healer Turnover Ampoule 1-[10ml X 3 piece]
                                        &amp; 2-[ 30ml big bottle]</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/736548238-DSH4s" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/ffb2cc9d4a3d79a4be43584de870e93e.jpg"
                                        alt="REJURAN Healer Turnover Cream 50ml"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134565)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134565)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134565)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$43.62</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/736548238-DSH4s"
                                        class="d-block text-reset">REJURAN Healer Turnover Cream 50ml</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1287134152-NesmU" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/01180f406a7bb3884dcbe653b9a8fef7.png"
                                        alt="Rohto Hada Labo Gokujyun Hyaluronic Perfect gel 100g - Skin Hydration and Anti-wrinkle Properties"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134566)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134566)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134566)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$22.89</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1287134152-NesmU"
                                        class="d-block text-reset">Rohto Hada Labo Gokujyun Hyaluronic Perfect gel 100g
                                        - Skin Hydration and Anti-wrinkle Properties</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2064562385-mBj8f" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/09f3b58ec77c6f2bb2258f596d0b540f.png"
                                        alt="[Rejuran Healer Season 2] NEW Dual Effect Ampoule 30ml"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134567)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134567)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134567)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$60.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2064562385-mBj8f"
                                        class="d-block text-reset">[Rejuran Healer Season 2] NEW Dual Effect Ampoule
                                        30ml</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1185876454-8eou3" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/bc7774d6b1a0cc929e2a21063e39d942.png"
                                        alt="Raffine PERFECT ONE Whitening Gel 75g skincare beauty care - Target Dark Spots and Sun Damage - Medicated Skin Moisturizer"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134568)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134568)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134568)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$58.70</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1185876454-8eou3"
                                        class="d-block text-reset">Raffine PERFECT ONE Whitening Gel 75g skincare
                                        beauty care - Target Dark Spots and Sun Damage - Medicated Skin Moisturizer</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1142966347-PCfY8" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/2ec87ce612a4c4a0ed47036a0ee915d9.jpg"
                                        alt="[Camiane] Dark Spot Glow Mist Serum (100ml) | Luminous Vital Dark Spot Cream (50ml) | Dark Spot Set (Serum+Cream)"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134569)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134569)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134569)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$56.69</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1142966347-PCfY8"
                                        class="d-block text-reset">[Camiane] Dark Spot Glow Mist Serum (100ml) |
                                        Luminous Vital Dark Spot Cream (50ml) | Dark Spot Set (Serum+Cream)</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2244083982-5Zv9v" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/71c1ef65fdc6bbf1753a211a31b21dec.png"
                                        alt="[KAHI] Wrinkle Bounce Multi Balm 9g"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134570)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134570)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134570)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$26.12</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2244083982-5Zv9v"
                                        class="d-block text-reset">[KAHI] Wrinkle Bounce Multi Balm 9g</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1950312383-tnTmj" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/3d4812851acacfe5a392dc3431117291.png"
                                        alt="Whitening Freckle Cream  Removal Chloasma Spots  Removes Melanin and Sooth Treatment Reduces Redness and Swelling Brightens Skin Tone Whitening Cream"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134571)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134571)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134571)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$23.62</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1950312383-tnTmj"
                                        class="d-block text-reset">Whitening Freckle Cream Removal Chloasma Spots
                                        Removes Melanin and Sooth Treatment Reduces Redness and Swelling Brightens Skin
                                        Tone Whitening Cream</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2252721923-9XXq3" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/931d41431c95f796fa6bb4733e0cf5ba.jpg"
                                        alt="EVKVO 4MP Tuya Smart Life APP Battery IP Camera WiFi Wireless PIR Motion Home Security Camera Outdoor Waterproof Video Surveillance CCTV Camera"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134464)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134464)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134464)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$74.17</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2252721923-9XXq3"
                                        class="d-block text-reset">EVKVO 4MP Tuya Smart Life APP Battery IP Camera
                                        WiFi Wireless PIR Motion Home Security Camera Outdoor Waterproof Video
                                        Surveillance CCTV Camera</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1570698014-MZ94B" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/c19f3ba53084c217970336414670c487.jpg"
                                        alt="3Tech mall Full HD 1080P K18 S-py Camera Watch Video Camera Wrist Watch Wearable DVR Recorder"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134465)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134465)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134465)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$22.75</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1570698014-MZ94B"
                                        class="d-block text-reset">3Tech mall Full HD 1080P K18 S-py Camera Watch
                                        Video Camera Wrist Watch Wearable DVR Recorder</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1344384652-iNCnL" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/0f7be38289239028c4e7fac277c8bdec.jpg"
                                        alt="BOBLOV X1 Mini Body Camera Full 1080p Portable Body Camera Removable SD Card Up To 128GB Support Night Vision and Red/Blue Light Function for Police Patrol Small Body Camera Model（Card not Included）"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134466)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134466)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134466)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$94.99</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1344384652-iNCnL"
                                        class="d-block text-reset">BOBLOV X1 Mini Body Camera Full 1080p Portable Body
                                        Camera Removable SD Card Up To 128GB Support Night Vision and Red/Blue Light
                                        Function for Police Patrol Small Body Camera Model（Card not Included）</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2148794795-bH4KI" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/81c1d4e6235e027f5fe12964f8e3dc05.jpg"
                                        alt="[Built-in 16/32/64G Storage]2-in-1 Full HD 1080P Video Recorder Mini Camera Watch with Cameras IR Night Vision Motion Detection Wireless Micro Camcorder Action Cam"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134467)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134467)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134467)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$49.59</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2148794795-bH4KI"
                                        class="d-block text-reset">[Built-in 16/32/64G Storage]2-in-1 Full HD 1080P
                                        Video Recorder Mini Camera Watch with Cameras IR Night Vision Motion Detection
                                        Wireless Micro Camcorder Action Cam</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/280121842-i7crk" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/f52a470772fd6d165111833974c4136a.jpg"
                                        alt="AKASO EK7000 4K Sports Action Camera WIFI Waterproof DVR Camcorder 12MP"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134468)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134468)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134468)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$110.14</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/280121842-i7crk"
                                        class="d-block text-reset">AKASO EK7000 4K Sports Action Camera WIFI
                                        Waterproof DVR Camcorder 12MP</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1447338069-rLVkS" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/e873d32b194d86cefcc6f1bdd8df6210.jpg"
                                        alt="New 16mp million pixels Digital SLR Camera 2.4 Inch TFT LCD Screen 1080P 16X Zoom Anti-shake NTSC/PAL"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134469)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134469)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134469)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$45.52</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1447338069-rLVkS"
                                        class="d-block text-reset">New 16mp million pixels Digital SLR Camera 2.4 Inch
                                        TFT LCD Screen 1080P 16X Zoom Anti-shake NTSC/PAL</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1011382003-GuugB" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/16018a704f6a58a30e6c5af85cd0740d.jpg"
                                        alt="8mm Industrial Endoscope Camera 1080P HD 4.3”IPS Screen Pipe Drain Sewer Duct Inspection Camera IP67 Snake Camera WIth 6 LED"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134470)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134470)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134470)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$57.25</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1011382003-GuugB"
                                        class="d-block text-reset">8mm Industrial Endoscope Camera 1080P HD 4.3”IPS
                                        Screen Pipe Drain Sewer Duct Inspection Camera IP67 Snake Camera WIth 6 LED</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/938280044-dcwqO" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/8fe63c59ff67c3cdc98cd4511a2752a4.jpg"
                                        alt="【Optional Gift】BOBLOV N9 1296P Police Mini Body Worn Camera Security Guards Video Camcorder Night Vision Recorder 165° Wide Angle with Stealth Mode,Playback"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134471)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134471)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134471)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$102.36</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/938280044-dcwqO"
                                        class="d-block text-reset">【Optional Gift】BOBLOV N9 1296P Police Mini Body
                                        Worn Camera Security Guards Video Camcorder Night Vision Recorder 165° Wide
                                        Angle with Stealth Mode,Playback</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2218935712-1V68Z" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/e65bc687d0f72c625ed5f37ef9d107c9.jpg"
                                        alt="BOBLOV A22 Mini Body Camera, 180 Degrees Rotatable Lens, 1080P Night Vision IR Video Camcorder with OLED Screen for Law Enforcement/Meeting/Travel/Walking Pets"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134472)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134472)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134472)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$72.79</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2218935712-1V68Z"
                                        class="d-block text-reset">BOBLOV A22 Mini Body Camera, 180 Degrees Rotatable
                                        Lens, 1080P Night Vision IR Video Camcorder with OLED Screen for Law
                                        Enforcement/Meeting/Travel/Walking Pets</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/889064094-vpLsv" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/1ac0f8d73bb82bd7d74114fd2558920d.jpg"
                                        alt="Samsung Galaxy Note 20 5G 256GB+8GB  | LOCAL 6 MONTHS WARRANTY | ORIGINAL DISPLAY AND SEALED SET"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134459)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134459)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134459)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$998.75</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/889064094-vpLsv"
                                        class="d-block text-reset">Samsung Galaxy Note 20 5G 256GB+8GB | LOCAL 6
                                        MONTHS WARRANTY | ORIGINAL DISPLAY AND SEALED SET</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/1551864879-YdQqq" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/p/22feb8941148a5ed52552898908e0e1d.png"
                                        alt="【Brand New&amp;Sealed】 Global Version Xiaomi Mi Max 3 64GB ROM 4GB RAM | Android 8.1 | Pre-installed Google Play Store"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134460)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134460)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134460)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$268.75</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/1551864879-YdQqq"
                                        class="d-block text-reset">【Brand New&amp;Sealed】 Global Version Xiaomi Mi Max
                                        3 64GB ROM 4GB RAM | Android 8.1 | Pre-installed Google Play Store</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="/product/2423041709-CsW7c" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="/public/assets/img/placeholder.jpg"
                                        data-src="/public/download/kf/S9df1f311c5914d88b484a225c0f728eft.jpg"
                                        alt="OPPO Reno8 5G / Dual Sony Flagship Sensors / Night Portrait / Mediatek Dimensity 1300 / Ultra Night Video / 80W SUPERVOOC"
                                        onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(134461)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(134461)"
                                        data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                        data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(134461)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                        data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$998.75</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="/product/2423041709-CsW7c"
                                        class="d-block text-reset">OPPO Reno8 5G / Dual Sony Flagship Sensors / Night
                                        Portrait / Mediatek Dimensity 1300 / Ultra Night Video / 80W SUPERVOOC</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aiz-pagination aiz-pagination-center mb-4">
                    <nav>
                        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                            </li>





                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=2">2</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=3">3</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=4">4</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=5">5</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=6">6</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=7">7</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=8">8</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=9">9</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=10">10</a></li>

                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span>
                            </li>





                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=19">19</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="/shop/XMen-OSIL-993?page=20">20</a></li>


                            <li class="page-item">
                                <a class="page-link" href="/shop/XMen-OSIL-993?page=2"
                                    rel="next" aria-label="Next »">&rsaquo;</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </section>
        @include('shop2.layout.footer')
