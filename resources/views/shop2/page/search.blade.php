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
<section class="mb-4 pt-3">

    <div class="container sm-px-0">
        <form class="" id="search-form" action="" method="GET">
            <div class="row">
                <div class="col-xl-3">
                    <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                            data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>

                        <div class="collapse-sidebar c-scrollbar-light text-left">
                            <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                <h3 class="h6 mb-0 fw-600">
                                    {{ __t('Bộ lọc', 'Filler') }}
                                </h3>
                                <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb"
                                    data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="las la-times la-2x"></i>
                                </button>
                            </div>
                            <div class="bg-white shadow-sm rounded mb-3">
                                <div class="fs-15 fw-600 p-3 border-bottom">
                                    {{ __t('Danh mục', 'Category') }}
                                </div>
                                <div class="p-3">
                                    <ul class="list-unstyled">
                                        @foreach ($categories as $category)
                                        <li class="mb-2 ml-2">
                                            <a class="text-reset fs-14"
                                                href="/category/{{ $category->id }}">{{ $category->name }}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="bg-white shadow-sm rounded mb-3">
                                <div class="fs-15 fw-600 p-3 border-bottom">
                                    {{ __t('Phạm vi giá', 'Price Range') }}
                                </div>
                                <div class="p-3">
                                    <div class="aiz-range-slider">
                                        <div id="input-slider-range" data-range-value-min=" 0 "
                                            data-range-value-max=" 357000 "
                                            class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                    data-range-value-low="99"
                                                    id="input-slider-range-value-low">99.00</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                    data-range-value-high="264"
                                                    id="input-slider-range-value-high">264.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">

                    <ul class="breadcrumb bg-transparent p-0">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="">
                                {{ __t('Trang chủ', 'Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item fw-600  text-dark">
                            <a class="text-reset" href="/search">
                                {{ __t('Tất cả danh mục', 'Categories') }}
                            </a>
                        </li>
                    </ul>
                    <div class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2">
                        @foreach ($products as $product)
                        <div class="col">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $product->id }}" class="d-block">
                                        <img class="img-fit mx-auto h-140px h-md-210px lazyload"
                                            src="/{{ @$product->images->first()->image_link }}"
                                            data-src="/{{ @$product->images->first()->image_link }}"
                                            alt=""
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)"
                                            data-toggle="tooltip"
                                           data-title="{{ __t('Thêm vào danh sách yêu thích', 'Add to wishlist') }}"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)"
                                            data-toggle="tooltip"
                                           data-title="{{ __t('So sánh', 'Compare') }}"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)"
                                            data-toggle="tooltip"
                                           data-title="{{ __t('Thêm vào giỏ hàng', 'Add to cart') }}"
                                            data-placement="left"
                                        >
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">${{ $product->price }}</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="/product/{{ $product->id }}" class="d-block text-reset">{{ $product->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="aiz-pagination aiz-pagination-center mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@include('shop2.layout.footer')
