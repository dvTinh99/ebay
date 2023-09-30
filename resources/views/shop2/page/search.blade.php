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
                                <h3 class="h6 mb-0 fw-600">Bộ lọc</h3>
                                <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb"
                                    data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="las la-times la-2x"></i>
                                </button>
                            </div>
                            <div class="bg-white shadow-sm rounded mb-3">
                                <div class="fs-15 fw-600 p-3 border-bottom">
                                    Thể loại
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
                                    Phạm vi giá
                                </div>
                                <div class="p-3">
                                    <div class="aiz-range-slider">
                                        <div id="input-slider-range" data-range-value-min=" 0 "
                                            data-range-value-max=" 357000 "
                                            class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                            {{-- <div class="noUi-base" style="top: -14px;">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect"
                                                        style="transform: translate(0.0277311%, 0px) scale(0.000462185, 1);">
                                                    </div>
                                                </div>
                                                <div class="noUi-origin"
                                                    style="transform: translate(-999.723%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                        tabindex="0" role="slider" aria-orientation="horizontal"
                                                        aria-valuemin="0.0" aria-valuemax="264.0" aria-valuenow="99.0"
                                                        aria-valuetext="99.00" style="display: none;">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin"
                                                    style="transform: translate(-999.261%, 0px); z-index: 6">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1"
                                                        tabindex="0" role="slider" aria-orientation="horizontal"
                                                        aria-valuemin="99.0" aria-valuemax="357000.0"
                                                        aria-valuenow="264.0" aria-valuetext="264.00" style="display:none">
                                                        <div class="noUi-touch-area" style="display:none"></div>
                                                    </div>
                                                </div>
                                            </div> --}}
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
                            <a class="text-reset" href="">Trang Chủ</a>
                        </li>
                        <li class="breadcrumb-item fw-600  text-dark">
                            <a class="text-reset" href="/search">"Tất cả danh mục"</a>
                        </li>
                    </ul>

                    <div class="text-left">
                        <div class="row gutters-5 flex-wrap align-items-center">
                            <div class="col-lg col-10">
                                <h1 class="h6 fw-600 text-body">
                                    @if (isset($keyWord))

                                        tìm kết quả cho "{{ $keyWord }} "
                                    @endif
                                </h1>
                                <input type="hidden" name="keyword" value="GUESS">
                            </div>
                            <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar">
                                    <i class="la la-filter la-2x"></i>
                                </button>
                            </div>
                            <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                <label class="mb-0 opacity-50">Nhãn hiệu</label>
                                <div class="dropdown bootstrap-select form-control form-control-sm aiz-"><select
                                        class="form-control form-control-sm aiz-selectpicker" data-live-search="true"
                                        name="brand" onchange="filter()" tabindex="-98">
                                        <option value="">Tất cả các thương hiệu</option>

                                        <option value="1-acvyo">ACER</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                        aria-haspopup="listbox" aria-expanded="false" title="Tất cả các thương hiệu">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Tất cả các thương hiệu</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="bs-searchbox"><input type="search" class="form-control"
                                                autocomplete="off" role="combobox" aria-label="Search"
                                                aria-controls="bs-select-1" aria-autocomplete="list"></div>
                                        <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                <label class="mb-0 opacity-50">Sắp xếp theo</label>
                                <div class="dropdown bootstrap-select form-control form-control-sm aiz-"><select
                                        class="form-control form-control-sm aiz-selectpicker" name="sort_by"
                                        onchange="filter()" tabindex="-98">
                                        <option value="newest">Mới nhất</option>
                                        <option value="oldest">Cũ nhất</option>
                                        <option value="price-asc">Giá thấp đến cao</option>
                                        <option value="price-desc">Giá từ cao đến thấp</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                        aria-haspopup="listbox" aria-expanded="false" title="Mới nhất">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Mới nhất</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="min_price" value="">
                    <input type="hidden" name="max_price" value="">
                    <div class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2">
                        @foreach ($products as $product)
                        <div class="col">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="/product/{{ $product->id }}" class="d-block">
                                        <img class="img-fit mx-auto h-140px h-md-210px lazyloaded"
                                            src="{{ @$product->images->first()->image_link }}"
                                            data-src="{{ @$product->images->first()->image_link }}"
                                            alt="GUESS Women's Abey Black Crossbody Flap Bag"
                                            onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(157200)"
                                            data-toggle="tooltip" data-title="Thêm vào danh sách yêu thích"
                                            data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(157200)"
                                            data-toggle="tooltip" data-title="Thêm vào để so sánh"
                                            data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(157200)"
                                            data-toggle="tooltip" data-title="Thêm vào giỏ hàng"
                                            data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">${{ $product->price }}</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class="las la-star active"></i><i class="las la-star active"></i><i
                                            class="las la-star active"></i><i class="las la-star active"></i><i
                                            class="las la-star"></i>
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
                    <div class="aiz-pagination aiz-pagination-center mt-4">
                        {{ $products->links() }}

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@include('shop2.layout.footer')
