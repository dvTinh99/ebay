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
                    @foreach ($products as $product)
                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $product->id }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="{{ asset(''). $product->images->first()->image_link }}"
                                            data-src="{{ asset(''). $product->images->first()->image_link }}"
                                            alt="Cisco Table Microphone with Jack plug spare"
                                            onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList('{{ $product->id }}')"
                                            data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare('{{ $product->id }}')"
                                            data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})"
                                            data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">{{ $product->price }}$</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $product->id }}"
                                            class="d-block text-reset">{{ $product->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</div>
 <div id="section_newest">
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                            Sản phẩm nổi bật
                            <!--\u0069\u0073\u0068\u006f\u0070\u0034\u0036\u0037\u0039\u0038-->
                        </span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                    data-arrows='true'>
                    @foreach ($productNoiBat as $product)
                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $product->id }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="{{ asset(''). $product->images->first()->image_link }}"
                                            data-src="{{ asset(''). $product->images->first()->image_link }}"
                                            alt="Cisco Table Microphone with Jack plug spare"
                                            onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList('{{ $product->id }}')"
                                            data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare('{{ $product->id }}')"
                                            data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})"
                                            data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">{{ $product->price }}$</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $product->id }}"
                                            class="d-block text-reset">{{ $product->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</div>
 <div id="section_newest">
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                            Sản phẩm bán chạy nhất
                            <!--\u0069\u0073\u0068\u006f\u0070\u0034\u0036\u0037\u0039\u0038-->
                        </span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                    data-arrows='true'>
                    @foreach ($productBanChay as $product)
                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $product->id }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="{{ asset(''). $product->images->first()->image_link }}"
                                            data-src="{{ asset(''). $product->images->first()->image_link }}"
                                            alt="Cisco Table Microphone with Jack plug spare"
                                            onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList('{{ $product->id }}')"
                                            data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare('{{ $product->id }}')"
                                            data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})"
                                            data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">{{ $product->price }}$</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $product->id }}"
                                            class="d-block text-reset">{{ $product->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</div>
