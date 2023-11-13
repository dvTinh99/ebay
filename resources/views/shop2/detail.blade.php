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
                                @foreach ($product->images as $image)

                                    <div class="carousel-box img-zoom rounded">
                                        <img style="width:100%;height:auto;" class="img-fluid lazyload"
                                             src="../public/assets/img/placeholder.jpg"
                                             data-src="{{ asset('') . $image->image_link }}"
                                             onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                            <div class="aiz-carousel product-gallery-thumb" data-items='5'
                                 data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false'
                                 data-focus-select='true' data-arrows='true'>
                                @foreach ($product->images as $image)
                                    <div class="carousel-box c-pointer border p-1 rounded">
                                        <img class="lazyload mw-100 size-50px mx-auto"
                                             src="../public/assets/img/placeholder.jpg"
                                             data-src="{{ asset('') . $image->image_link }}"
                                             onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="text-left">
                        <h1 class="mb-2 fs-20 fw-600">
                            {{ $product->name }}
                        </h1>

                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="rating">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                        class='las la-star'></i><i class='las la-star'></i>
                                </span>
                                <span class="ml-1 opacity-50">
                                    (0{{ __t('Đánh giá', 'Reviews') }}
                                </span>
                            </div>
                            <div class="col-auto ml">
                                <small class="mr-2 opacity-50">
                                    {{ __t('Ngày', 'Days') }}
                                </small>
                                3
                            </div>
                        </div>
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <small class="mr-2 opacity-50">
                                    {{ __t('Chủ shop:', 'Seller') }}
                                </small>
                                <br>
                                <a class="text-reset">
                                    {{ $product->seller ? $product->seller->name : 'Ebay'  }}
                                </a>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-soft-primary">
                                    {{ __t('Nhắn tin với shop', 'Message Seller') }}
                                </button>
                            </div>
                        </div>

                        <hr>

                        <div class="row no-gutters mt-3">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">
                                    {{ __t('Giá bán:', 'Price:') }}
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="">
                                    <strong class="h2 fw-600 text-primary">
                                        ${{ $product->price }}
                                    </strong>
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
                                    <div class="opacity-50 my-2">
                                        {{ __t('Số lượng:', 'Quantity:') }}
                                    </div>
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
                                            {{ __t('Có sẵn', 'Aviable') }}
                                            )
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">
                                        {{ __t('Giá:', 'Price:') }}
                                    </div>
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
                                    onclick="addToCart('{{ $product->id }}')">
                                <i class="las la-shopping-bag"></i>
                                <span class="d-none d-md-inline-block">
                                    {{ __t('Thêm vào giỏ hàng', 'Add to cart') }}
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary buy-now fw-600" onclick="buyNow()">
                                <i class="la la-shopping-cart"></i>
                                {{ __t('Mua ngay', 'Buy Now') }}
                            </button>
                            <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                <i class="la la-cart-arrow-down"></i>
                                {{ __t('Hết hàng', 'Out of stock') }}
                            </button>
                        </div>


                        <div class="d-table width-100 mt-3">
                            <div class="d-table-cell">
                                <!-- Add to wishlist button -->
                                <button type="button" class="btn pl-0 btn-link fw-600">
                                    {{ __t('Thêm vào danh sách yêu thích', 'Add to wishlist')}}
                                </button>
                                <!-- Add to compare button -->
                                <button type="button" class="btn btn-link btn-icon-left fw-600">
                                    {{ __t('Thêm vào để so sánh', 'Add to compare')}}
                                </button>
                            </div>
                        </div>


                        <div class="row no-gutters mt-3">
                            <div class="col-2">
                                <div class="opacity-50 mt-2">
                                    {{ __t('Hoàn tiền:', 'Refund:') }}
                                </div>
                            </div>
                            <div class="col-10">
                                <a href="/return-policy" target="_blank">
                                    <img src="../public/assets/img/refund-sticker.jpg" height="36">
                                </a>
                                <a href="/return-policy" class="ml-2" target="_blank">
                                    {{ __t('Xem chính sách', 'View policy') }}
                                </a>
                            </div>
                        </div>
                        <div class="row no-gutters mt-4">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">
                                    {{ __t('Share:', 'Share:') }}
                                </div>
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
                                         points="223.4,442.2 143.8,376.7 64.1,442.2 64.1,215.3 223.4,215.3 "/>
                                <circle style="fill:#FBD303;" cx="143.8" cy="143.8" r="143.8"/>
                                <circle style="fill:#F8B517;" cx="143.8" cy="143.8" r="93.6"/>
                                <polygon style="fill:#FCFCFD;"
                                         points="143.8,55.9 163.4,116.6 227.5,116.6 175.6,154.3 195.6,215.3 143.8,177.7 91.9,215.3 111.9,154.3
                                            60,116.6 124.1,116.6 "/>
                            </svg>
                        </div>
                        <div class="opacity-50 fs-12 border-bottom">
                            {{ __t('Chủ shop:', 'Seller') }}
                        </div>
                        <a href="javascript:void(0);"
                           class="text-reset d-block fw-600"
                        >
                            {{ $product->seller ? $product->seller->name : 'Ebay'  }}
                            <span class="ml-2">
                                <i class="fa fa-check-circle" style="color:green"></i>
                            </span>
                        </a>
                        <div class="text-center border rounded p-2 mt-3">
                            <div class="rating">
                                <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i
                                    class='las la-star'></i><i class='las la-star'></i>
                            </div>
                            <div class="opacity-60 fs-12">
                                (0 {{ __t('Phản hồi khách hàng', 'Customer Reviews') }})
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center border-top">
                        <div class="col">
                            <a href="/shop/%C4%90%E1%BA%B7ng-%C4%90%C3%ACnh-Th%C6%B0%C6%A1ng-1510"
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
                        {{ __t('Sản phẩm bán chạy', 'Best Selling Products') }}
                    </div>
                    <div class="p-3">
                        <ul class="list-group list-group-flush">
                            @foreach ($productBanChay as $productSell)
                                <li class="py-3 px-0 list-group-item border-light">
                                    <div class="row gutters-10 align-items-center">
                                        <div class="col-5">
                                            <a href="/product/{{ $productSell->id }}"
                                               class="d-block text-reset">
                                                <img class="img-fit lazyload h-xxl-110px h-xl-80px h-120px"
                                                     src="/public/assets/img/placeholder.jpg"
                                                     data-src="{{ $productSell->images->first()->image_link }}"
                                                     alt=""
                                                >
                                            </a>
                                        </div>
                                        <div class="col-7 text-left">
                                            <h4 class="fs-13 text-truncate-2">
                                                <a href="/product/{{ $productSell->id }}"
                                                   class="d-block text-reset">{{ $productSell->name }}</a>
                                            </h4>
                                            <div class="rating rating-sm mt-1">
                                                <i class='las la-star'></i><i class='las la-star'></i><i
                                                    class='las la-star'></i><i class='las la-star'></i><i
                                                    class='las la-star'></i>
                                            </div>
                                            <div class="mt-2">
                                                <span
                                                    class="fs-17 fw-600 text-primary">${{ $productSell->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 order-0 order-xl-1">
                <div class="bg-white mb-3 shadow-sm rounded">
                    <div class="nav border-bottom aiz-nav-tabs">
                        <a href="2334648574-fOg5h.html#tab_default_1" data-toggle="tab"
                           class="p-3 fs-16 fw-600 text-reset active show">
                            {{ __t('Mô tả sản phẩm', 'Description') }}
                        </a>
                        <a href="2334648574-fOg5h.html#tab_default_4" data-toggle="tab"
                           class="p-3 fs-16 fw-600 text-reset">
                            {{ __t('Đánh giá', 'Reviews') }}
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
                                {!! $product->description !!}
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
                                    {{ __t('Hãy là người đầu tiên đánh giá sản phẩm này', 'Be the first to review this product.') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm">
                    <div class="border-bottom p-3">
                        <h3 class="fs-16 fw-600 mb-0">
                            <span class="mr-4">
                                {{ __t('Sản phẩm tương tự', 'Similar Products') }}
                            </span>
                        </h3>
                    </div>
                    <div class="p-3">
                        <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="5" data-xl-items="3"
                             data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                             data-arrows='true' data-infinite='true'>
                            @foreach ($productTuongTu as $productSame)
                                <div class="carousel-box">
                                    <div
                                        class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                        <div class="">
                                            <a href="/product/{{ $productSame->id }}" class="d-block">
                                                <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                     src="/public/assets/img/placeholder.jpg"
                                                     data-src="{{ $productSame->images->first()->image_link }}"
                                                     alt=""
                                                >
                                            </a>
                                        </div>
                                        <div class="p-md-3 p-2 text-left">
                                            <div class="fs-15">
                                                <span class="fw-700 text-primary">${{ $productSame->price }}</span>
                                            </div>
                                            <div class="rating rating-sm mt-1">
                                                <i class='las la-star'></i><i class='las la-star'></i><i
                                                    class='las la-star'></i><i class='las la-star'></i><i
                                                    class='las la-star'></i>
                                            </div>
                                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                <a
                                                    href="/product/{{ $productSame->id }}"
                                                    class="d-block text-reset"
                                                >
                                                    {{ $productSame->name }}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('shop2.layout.footer')
