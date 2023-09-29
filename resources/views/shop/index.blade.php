@include('shop.layout.header')
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
            @include('shop.layout.side-bar')
            <div class="col-lg-9 position-static d-none d-lg-block">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true"
                    data-dots="true" data-autoplay="true">
                    <div class="carousel-box">
                        <a href="https://">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="{{ asset('uploads') }}/all/olqknhpEizdysiBSCuZ6XK5YXJ9nnPeBI2UsQkpI.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='{{ asset('uploads') }}/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="{{ asset('uploads') }}/all/63UjjMKy25oqaXvoEAoBhECNB2bNxgLy9Cjb1NrQ.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='{{ asset('uploads') }}/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="{{ asset('uploads') }}/all/K7zsD97YfwdQ8fKc16dZIRmRJC0DaDkxy83TpzOz.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='{{ asset('uploads') }}/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="{{ asset('uploads') }}/all/iKKXiL9jniaNt7NDtlJrhhhSXJeBYOSg2SZL07GP.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='{{ asset('uploads') }}/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
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
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2564562404-FDzYQ-rlXUt" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/1082dc78cb0d48220d2fb4eeebb4d729.jpg"
                                        alt="ORICO DVI to VGA Desktop Assembly Display Cable Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector Displayer"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149927)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149927)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149927)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$6.94</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2564562404-FDzYQ-rlXUt"
                                        class="d-block text-reset">ORICO DVI to VGA Desktop Assembly Display Cable
                                        Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector
                                        Displayer</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2564562404-b7eTX" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/1082dc78cb0d48220d2fb4eeebb4d729.jpg"
                                        alt="ORICO DVI to VGA Desktop Assembly Display Cable Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector Displayer"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149926)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149926)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149926)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$6.94</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2564562404-b7eTX"
                                        class="d-block text-reset">ORICO DVI to VGA Desktop Assembly Display Cable
                                        Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector
                                        Displayer</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2721518460-VHThA" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/2f812d7526dd6b7dd2470cb9d91e25c3.jpg"
                                        alt="Portable Speaker Carrying Case With Shoulder Strap Audio Storage Bags Sets Accessories Mesh Bag Shockproof Adjustable for JBL BOOMBOX 3/2/1 Generation"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149925)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149925)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149925)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$31.02</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2721518460-VHThA"
                                        class="d-block text-reset">Portable Speaker Carrying Case With Shoulder Strap
                                        Audio Storage Bags Sets Accessories Mesh Bag Shockproof Adjustable for JBL
                                        BOOMBOX 3/2/1 Generation</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2721595215-29w56" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/32deea31c4cfbe654ed311808697fdfd.jpg"
                                        alt="Sling Speaker Cases Portable Sling Speaker Cases Cover Breathable Accessories with Removable Shoulder Strap for JBL Boombox 3"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149924)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149924)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149924)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$31.66</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2721595215-29w56"
                                        class="d-block text-reset">Sling Speaker Cases Portable Sling Speaker Cases
                                        Cover Breathable Accessories with Removable Shoulder Strap for JBL Boombox 3</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2564562404-FDzYQ-llAO4-2ZhQl"
                                    class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/1082dc78cb0d48220d2fb4eeebb4d729.jpg"
                                        alt="ORICO DVI to VGA Desktop Assembly Display Cable Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector Displayer"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149923)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149923)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149923)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$6.94</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i
                                        class='las la-star active'></i><i class='las la-star active'></i><i
                                        class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2564562404-FDzYQ-llAO4-2ZhQl"
                                        class="d-block text-reset">ORICO DVI to VGA Desktop Assembly Display Cable
                                        Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector
                                        Displayer</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2564562404-FDzYQ-llAO4-dUCHn-99FJq"
                                    class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/1082dc78cb0d48220d2fb4eeebb4d729.jpg"
                                        alt="ORICO DVI to VGA Desktop Assembly Display Cable Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector Displayer"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149922)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149922)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149922)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$6.94</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i
                                        class='las la-star active'></i><i class='las la-star active'></i><i
                                        class='las la-star half'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2564562404-FDzYQ-llAO4-dUCHn-99FJq"
                                        class="d-block text-reset">ORICO DVI to VGA Desktop Assembly Display Cable
                                        Adapter Gold Plated 1080P HD Video Converter Cable For TV PC Projector
                                        Displayer</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/1639115624-Oc2dP" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/93f2389b997192e0cecab1e7667efd82.jpg"
                                        alt="LIGE Fashion Bluetooth Call Smart Watches Women Heart Rate Blood Pressure Multifunctional Sport Women Men Watch Waterproof Smartwatch for Android Ios + Box"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149918)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149918)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149918)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$30.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/1639115624-Oc2dP"
                                        class="d-block text-reset">LIGE Fashion Bluetooth Call Smart Watches Women
                                        Heart Rate Blood Pressure Multifunctional Sport Women Men Watch Waterproof
                                        Smartwatch for Android Ios + Box</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/236334903-LTKhl" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/original/02114f28b3ff8b0cce2dc47150edb3a8.jpg"
                                        alt="Kemstone Rock Stainless Steel Music Lover Gift Guitar Pendant &amp; Necklace for Men"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149917)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149917)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149917)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$6.48</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/236334903-LTKhl"
                                        class="d-block text-reset">Kemstone Rock Stainless Steel Music Lover Gift
                                        Guitar Pendant &amp; Necklace for Men</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/361978116-cq59f" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/0ec907fa60808ad07adfa33ffd922f08.jpg"
                                        alt="Paladkik Monkey Miniature Brass Magic Holy Wealth LOVE Charm Thai Amulet"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149916)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149916)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149916)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$18.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/361978116-cq59f"
                                        class="d-block text-reset">Paladkik Monkey Miniature Brass Magic Holy Wealth
                                        LOVE Charm Thai Amulet</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/2013596549-qnudT" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/3c112b78f6d77dd2fd553cc75e29741e.jpg"
                                        alt="2PC/set Tiger Eye &amp; Hematite &amp; Black Obsidian Bracelets Men Women Natural Stone Magnetic Therapy Weight Loss Bracelet"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149915)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149915)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149915)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$2.32</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/2013596549-qnudT"
                                        class="d-block text-reset">2PC/set Tiger Eye &amp; Hematite &amp; Black
                                        Obsidian Bracelets Men Women Natural Stone Magnetic Therapy Weight Loss
                                        Bracelet</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/297918386-OLZKI" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/5dc51f669bbe4f7fc9ea18c2d7532c83.jpg"
                                        alt="MeiYang Mens Silver Gold Stainless Steel Pendant Necklace Chain Punk Dragon Wing"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149914)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149914)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149914)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$2.28</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/297918386-OLZKI"
                                        class="d-block text-reset">MeiYang Mens Silver Gold Stainless Steel Pendant
                                        Necklace Chain Punk Dragon Wing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://www.ebeebbuy.cc/product/1634149239-pYmIA" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg"
                                        data-src="https://www.ebeebbuy.cc/public/download/p/bacd069a8953ea388e300b71673c03a1.jpg"
                                        alt="Vnox Personalized Engraving ID Name Initials Men Genuine Leather Bracelet Custom ID Jewelry Gift Father Son Birthday Gift"
                                        onerror="this.onerror=null;this.src='https://www.ebeebbuy.cc/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(149913)"
                                        data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                        data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(149913)" data-toggle="tooltip"
                                        data-title="Thêm vào để so sánh" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(149913)"
                                        data-toggle="tooltip" data-title="Thêm vào giỏ hàng" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$2.56</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://www.ebeebbuy.cc/product/1634149239-pYmIA"
                                        class="d-block text-reset">Vnox Personalized Engraving ID Name Initials Men
                                        Genuine Leather Bracelet Custom ID Jewelry Gift Father Son Birthday Gift</a>
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













<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="https://www.ebeebbuy.cc/terms">
                    <i class="fa fa-file-text fa-3x text-primary mb-2"></i>
                    <h4 class="h6">Điều khoản và điều kiện</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block"
                    href="https://www.ebeebbuy.cc/return-policy">
                    <i class="fa fa-mail-reply fa-3x text-primary mb-2"></i>
                    <h4 class="h6">chính sách hoàn trả</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block"
                    href="https://www.ebeebbuy.cc/support-policy">
                    <i class="fa fa-support fa-3x text-primary mb-2"></i>
                    <h4 class="h6">Chính sách hỗ trợ</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block"
                    href="https://www.ebeebbuy.cc/privacy-policy">
                    <i class="fa fa-exclamation-circle fa-3x text-primary mb-2"></i>
                    <h4 class="h6">Chính sách bảo mật</h4>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark py-5 text-light footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="https://www.ebeebbuy.cc" class="d-block">
                        <img class="lazyload" src="https://www.ebeebbuy.cc/public/assets/img/placeholder-rect.jpg"
                            data-src="https://www.ebeebbuy.cc/public/uploads/all/WDUzPtHb2k2WBulYLAJpcvuRBxMo5yLeiMzDyzGb.png"
                            alt="ebay Shop" height="44">
                    </a>
                    <div class="my-3">
                        <p><br></p>
                        <table class="gf-t" role="presentation" helvetica="" neue",="" helvetica,="" arial,=""
                            sans-serif;="" font-size:="" 14px;"=""
                            style="width: 1247.99px; margin-top: 20px; border-spacing: 0px; color: rgb(51, 51, 51);">
                            <tbody>
                                <tr>
                                    <td colspan="2" style="padding: 1px 0px;"></td>
                                </tr>
                                <tr valign="top">
                                    <td class="gf-legal"
                                        style="text-size-adjust: 100%; color: rgb(65, 65, 63); padding: 1px 0px; font-size: 11px !important;">
                                        Copyright © 2023 eBay. All rights reserved</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                        </p>
                    </div>
                    <div class="d-inline-block d-md-block mb-4">
                        <form class="form-inline" method="POST" action="https://www.ebeebbuy.cc/subscribers">
                            <input type="hidden" name="_token" value="nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ">
                            <div class="form-group mb-0">
                                <input type="email" class="form-control" placeholder="Địa chỉ email của bạn"
                                    name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Đăng ký
                            </button>
                        </form>
                    </div>
                    <div class="w-300px mw-100 mx-auto mx-md-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Thông tin liên lạc
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="d-block opacity-30">Địa chỉ:</span>
                            <span class="d-block opacity-70">ebay shop 8 Marina View, Singapore</span>
                        </li>
                        <!--                         <li class="mb-2"> -->
                        <!--                            <span class="d-block opacity-30">Điện thoại:</span> -->
                        <!--                            <span class="d-block opacity-70"></span> -->
                        <!--                        </li> -->
                        <li class="mb-2">
                            <span class="d-block opacity-30">Số liên lạc:</span>
                            <a style="color:#fff" target="_blank" href="https://telegram.me/"
                                class="d-block opacity-70"></a>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">E-mail:</span>
                            <span class="d-block opacity-70">
                                <a href="mailto:ebay-sg11@gmail.com" class="text-reset">ebay-sg11@gmail.com</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">

                    </h4>
                    <ul class="list-unstyled">
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Tài khoản của tôi
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset"
                                href="https://www.ebeebbuy.cc/users/login">
                                Đăng nhập
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset"
                                href="https://www.ebeebbuy.cc/purchase_history">
                                lịch sử đơn hàng
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://www.ebeebbuy.cc/wishlists">
                                Sản phẩm yêu thích
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset"
                                href="https://www.ebeebbuy.cc/track-your-order">
                                Theo dõi thứ tự
                            </a>
                        </li>
                        <!--                             <li class="mb-2"> -->
                        <!--                                 <a class="opacity-50 hov-opacity-100 text-light" href="https://www.ebeebbuy.cc/affiliate">Là một đối tác liên kết</a> -->
                        <!--                             </li> -->
                    </ul>
                </div>
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Hãy là người bán hàng
                    </h4>
                    <a href="https://www.ebeebbuy.cc/shops/create" class="btn btn-primary btn-sm shadow-md mb-4">
                        Áp dụng ngay bây giờ
                    </a>
                    <a href="https://www.ebeebbuy.cc/users/shops" class="btn btn-primary btn-sm shadow-md mb-4">
                        Đăng nhập người bán
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left" current-verison="20221012">

                </div>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <img src="https://www.ebeebbuy.cc/public/uploads/all/A4exnDZSrAXvDu3OLWe07zbp2XXmwnQXb8iHu7jE.png"
                                height="30" class="mw-100 h-auto" style="max-height: 30px">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="https://www.ebeebbuy.cc" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 opacity-100 text-primary"></i>
                <span class="d-block fs-10 fw-600 opacity-60 opacity-100 fw-600">Trang Chủ</span>
            </a>
        </div>
        <div class="col">
            <a href="https://www.ebeebbuy.cc/categories" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 ">Thể loại</span>
            </a>
        </div>
        <div class="col-auto">
            <a href="https://www.ebeebbuy.cc/cart" class="text-reset d-block text-center pb-2 pt-3">
                <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                    xe đẩy
                    (<span class="cart-count">0</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="https://www.ebeebbuy.cc/all-notifications" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 "></i>
                </span>
                <span class="d-block fs-10 fw-600 opacity-60 ">Thông báo</span>
            </a>
        </div>
        <div class="col">
            <a href="https://www.ebeebbuy.cc/users/login" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-block mx-auto">
                    <img src="https://www.ebeebbuy.cc/public/assets/img/avatar-place.png"
                        class="rounded-circle size-20px">
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">Tài khoản</span>
            </a>
        </div>
    </div>
</div>

</div>



<script>
    function confirm_modal(delete_url) {
        jQuery('#confirm-delete').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Xác nhận</h4>
            </div>

            <div class="modal-body">
                <p>Xóa tin nhắn xác nhận</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ bỏ</button>
                <a id="delete_link" class="btn btn-danger btn-ok">Xóa bỏ</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addToCart">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
        role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader text-center p-3">
                <i class="las la-spinner la-spin la-3x"></i>
            </div>
            <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true" class="la-2x">&times;</span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>


<!-- SCRIPTS -->
<script src="https://www.ebeebbuy.cc/public/assets/js/vendors.js"></script>
<script src="https://www.ebeebbuy.cc/public/assets/js/aiz-core.js"></script>


<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v3.3'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="">
</div>

<script></script>

<script>
    $(document).ready(function() {
        $('.category-nav-element').each(function(i, el) {
            $(el).on('mouseover', function() {
                if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                    $.post('https://www.ebeebbuy.cc/category/nav-element-list', {
                        _token: AIZ.data.csrf,
                        id: $(el).data('id')
                    }, function(data) {
                        $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                    });
                }
            });
        });
        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-menu a').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('https://www.ebeebbuy.cc/language', {
                        _token: AIZ.data.csrf,
                        locale: locale
                    }, function(data) {
                        location.reload();
                    });

                });
            });
        }

        if ($('#currency-change').length > 0) {
            $('#currency-change .dropdown-menu a').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var currency_code = $this.data('currency');
                    $.post('https://www.ebeebbuy.cc/currency', {
                        _token: AIZ.data.csrf,
                        currency_code: currency_code
                    }, function(data) {
                        location.reload();
                    });

                });
            });
        }
    });

    // $('#search').on('keyup', function(){
    //     search();
    // });

    // $('#search').on('focus', function(){
    //     search();
    // });

    $('#search').on('keyup focus', debounce(search, 1500));

    function debounce(func, delay) {
        let timer = null;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                func.apply(context, args);
            }, delay);
        };
    }

    function search() {
        var searchKey = $('#search').val();
        if (searchKey.length > 0) {
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('https://www.ebeebbuy.cc/ajax-search', {
                _token: AIZ.data.csrf,
                search: searchKey
            }, function(data) {
                if (data == '0') {
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html(
                        'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                    $('.search-preloader').addClass('d-none');

                } else {
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        } else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }

    function updateNavCart(view, count) {
        $('.cart-count').html(count);
        $('#cart_items').html(view);
    }

    function removeFromCart(key) {
        $.post('https://www.ebeebbuy.cc/cart/removeFromCart', {
            _token: AIZ.data.csrf,
            id: key
        }, function(data) {
            updateNavCart(data.nav_cart_view, data.cart_count);
            $('#cart-summary').html(data.cart_view);
            AIZ.plugins.notify('success', "Mặt hàng đã bị xóa khỏi giỏ hàng");
            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
        });
    }

    function addToCompare(id) {
        $.post('https://www.ebeebbuy.cc/compare/addToCompare', {
            _token: AIZ.data.csrf,
            id: id
        }, function(data) {
            $('#compare').html(data);
            AIZ.plugins.notify('success', "Mục đã được thêm vào danh sách so sánh");
            $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
        });
    }

    function addToWishList(id) {
        AIZ.plugins.notify('warning', "Vui lòng đăng nhập trước");
    }

    function showAddToCartModal(id) {
        if (!$('#modal-size').hasClass('modal-lg')) {
            $('#modal-size').addClass('modal-lg');
        }
        $('#addToCart-modal-body').html(null);
        $('#addToCart').modal();
        $('.c-preloader').show();
        $.post('https://www.ebeebbuy.cc/cart/show-cart-modal', {
            _token: AIZ.data.csrf,
            id: id
        }, function(data) {
            $('.c-preloader').hide();
            $('#addToCart-modal-body').html(data);
            AIZ.plugins.slickCarousel();
            AIZ.plugins.zoom();
            AIZ.extra.plusMinus();
            getVariantPrice();
        });
    }

    $('#option-choice-form input').on('change', function() {
        getVariantPrice();
    });

    function getVariantPrice() {
        if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
            $.ajax({
                type: "POST",
                url: 'https://www.ebeebbuy.cc/product/variant_price',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {

                    $('.product-gallery-thumb .carousel-box').each(function(i) {
                        if ($(this).data('variation') && data.variation == $(this).data(
                            'variation')) {
                            $('.product-gallery-thumb').slick('slickGoTo', i);
                        }
                    })

                    $('#option-choice-form #chosen_price_div').removeClass('d-none');
                    $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                    $('#available-quantity').html(data.quantity);
                    $('.input-number').prop('max', data.max_limit);
                    if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                        $('.buy-now').addClass('d-none');
                        $('.add-to-cart').addClass('d-none');
                        $('.out-of-stock').removeClass('d-none');
                    } else {
                        $('.buy-now').removeClass('d-none');
                        $('.add-to-cart').removeClass('d-none');
                        $('.out-of-stock').addClass('d-none');
                    }

                    AIZ.extra.plusMinus();
                }
            });
        }
    }

    function checkAddToCartValidity() {
        var names = {};
        $('#option-choice-form input:radio').each(function() { // find unique names
            names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function() { // then count them
            count++;
        });

        if ($('#option-choice-form input:radio:checked').length == count) {
            return true;
        }

        return false;
    }

    function addToCart() {
        if (checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type: "POST",
                url: 'https://www.ebeebbuy.cc/cart/addtocart',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {

                    $('#addToCart-modal-body').html(null);
                    $('.c-preloader').hide();
                    $('#modal-size').removeClass('modal-lg');
                    $('#addToCart-modal-body').html(data.modal_view);
                    AIZ.extra.plusMinus();
                    AIZ.plugins.slickCarousel();
                    updateNavCart(data.nav_cart_view, data.cart_count);
                }
            });
        } else {
            AIZ.plugins.notify('warning', "Vui lòng chọn tất cả các tùy chọn");
        }
    }

    function buyNow() {
        if (checkAddToCartValidity()) {
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type: "POST",
                url: 'https://www.ebeebbuy.cc/cart/addtocart',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {
                    if (data.status == 1) {

                        $('#addToCart-modal-body').html(data.modal_view);
                        updateNavCart(data.nav_cart_view, data.cart_count);

                        window.location.replace("https://www.ebeebbuy.cc/cart");
                    } else {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                    }
                }
            });
        } else {
            AIZ.plugins.notify('warning', "Vui lòng chọn tất cả các tùy chọn");
        }
    }
</script>

<script>
    $(document).ready(function() {
        $.post('https://www.ebeebbuy.cc/home/section/featured', {
            _token: 'nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ'
        }, function(data) {
            $('#section_featured').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://www.ebeebbuy.cc/home/section/best_selling', {
            _token: 'nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ'
        }, function(data) {
            $('#section_best_selling').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://www.ebeebbuy.cc/home/section/auction_products', {
            _token: 'nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ'
        }, function(data) {
            $('#auction_products').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://www.ebeebbuy.cc/home/section/home_categories', {
            _token: 'nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ'
        }, function(data) {
            $('#section_home_categories').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://www.ebeebbuy.cc/home/section/best_sellers', {
            _token: 'nKBWgyvcD6v0FZ30lW2NLuGEV9ZZo7EEdiOlr0sQ'
        }, function(data) {
            $('#section_best_sellers').html(data);
            AIZ.plugins.slickCarousel();
        });
    });
</script>


</body>

</html>
