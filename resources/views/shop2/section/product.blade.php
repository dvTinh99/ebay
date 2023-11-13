<!-- Flash Deal 原始版本 -->


<div id="section_newest">
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                            {{ __t('Sản phẩm mới', 'New products') }}
                        </span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                     data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                     data-arrows='true'>
                    @foreach ($products as $item)
                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $item->seller_product_id ?? $item->id }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                             src="{{ asset(''). $item->images->first()->image_link ?? '' }}"
                                             data-src="{{ asset(''). $item->images->first()->image_link ?? '' }}"
                                             alt=""
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a
                                            href="javascript:void(0)"
                                            onclick="addToWishList('{{ $item->id }}')"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào danh sách yêu thích', 'Add to wishlist') }}"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="addToCompare('{{ $item->id }}')"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào để so sánh', 'Add to compare') }}"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="showAddToCartModal({{ $item->id }})"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào giỏ hàng', 'Add to cart') }}"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">{{ $item->price }}$</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $item->seller_product_id ?? $item->id }}"
                                           class="d-block text-reset">{{ $item->name }}</a>
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
                            {{ __t('Sản phẩm nổi bật', 'Featured products')}}
                        </span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow"
                     data-items="6"
                     data-xl-items="5"
                     data-lg-items="4"
                     data-md-items="3" data-sm-items="2" data-xs-items="2"
                     data-arrows='true'>
                    @foreach ($productNoiBat as $item)
                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $item->seller_product_id ?? $item->id }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                             src="{{ asset(''). $item->images->first()->image_link ?? '' }}"
                                             data-src="{{ asset(''). $item->images->first()->image_link ?? '' }}"
                                             alt="Cisco Table Microphone with Jack plug spare"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a
                                            href="javascript:void(0)"
                                            onclick="addToWishList('{{ $item->id }}')"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào danh sách yêu thích', 'Add to wishlist') }}"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="addToCompare('{{ $item->id }}')"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào để so sánh', 'Add to compare') }}"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="showAddToCartModal({{ $item->id }})"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào giỏ hàng', 'Add to cart') }}"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">{{ $item->price }}$</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $item->seller_product_id ?? $item->id }}"
                                           class="d-block text-reset">{{ $item->name }}</a>
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
                            {{ __t('Sản phẩm bán chạy nhất', 'Best selling products')}}
                        </span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                     data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                     data-arrows='true'>
                    @foreach ($productBanChay as $item)
                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $item->seller_product_id ?? $item->id }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                             src="{{ asset(''). $item->images->first()->image_link ?? '' }}"
                                             data-src="{{ asset(''). $item->images->first()->image_link ?? '' }}"
                                             alt=""
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a
                                            href="javascript:void(0)"
                                            onclick="addToWishList('{{ $item->id }}')"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào danh sách yêu thích', 'Add to wishlist') }}"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="addToCompare('{{ $item->id }}')"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào để so sánh', 'Add to compare') }}"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="showAddToCartModal({{ $item->id }})"
                                            data-toggle="tooltip"
                                            data-title="{{ __t('Thêm vào giỏ hàng', 'Add to cart') }}"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">{{ $item->price }}$</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i><i class='las la-star'></i><i
                                            class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $item->seller_product_id ?? $item->id }}"
                                           class="d-block text-reset">{{ $item->name }}</a>
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
