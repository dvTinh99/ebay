@include('shop2.layout.header')

<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>



    <section class="pt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="row aiz-steps arrow-divider">
                        <div class="col active">
                            <div class="text-center text-primary">
                                <i class="la-3x mb-2 las la-shopping-cart"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">1. Giỏ hàng của tôi</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-map"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">2. Thông tin vận chuyển
                                </h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">3
                                </h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">4</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">5
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4" id="cart-summary">
        <div class="container">
                            <div class="row">
                    <div class="col-xxl-8 col-xl-10 mx-auto">
                        <div class="shadow-sm bg-white p-3 p-lg-4 rounded text-left">
                            <div class="mb-4">
                                <div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 pb-3">
                                    <div class="col-md-5 fw-600">Sản phẩm</div>
                                    <div class="col fw-600">Giá bán</div>
                                    <div class="col fw-600">Thuế</div>
                                    <div class="col fw-600">Định lượng</div>
                                    <div class="col fw-600">Tổng cộng</div>
                                    <div class="col-auto fw-600">Tẩy</div>
                                </div>
                                <ul class="list-group list-group-flush">
                                                                                                                                                        <li class="list-group-item px-0 px-lg-3">
                                            <div class="row gutters-5">
                                                <div class="col-lg-5 d-flex">
                                                    <span class="mr-2 ml-0">
                                                        <img src="https://www.ebeebbuy.cc/public/download/p/919340b3bbd32c2277b8fffbfc8793e1.jpg"
                                                            class="img-fit size-60px rounded"
                                                            alt="AliToys alphabet flash cards Educational Toys Set 0-12 Months Baby Learning Language Quiet Cloth Book First Kids Soft Books Animal English Learning Card Can be washed">
                                                    </span>
                                                    <span class="fs-14 opacity-60">AliToys alphabet flash cards Educational Toys Set 0-12 Months Baby Learning Language Quiet Cloth Book First Kids Soft Books Animal English Learning Card Can be washed</span>
                                                </div>

                                                <div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Giá bán</span>
                                                    <span
                                                        class="fw-600 fs-16">$19.00</span>
                                                </div>
                                                <div class="col-lg col-4 order-2 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Thuế</span>
                                                    <span
                                                        class="fw-600 fs-16">$0.00</span>
                                                </div>

                                                <div class="col-lg col-6 order-4 order-lg-0">
                                                                                                            <div
                                                            class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                                            <button
                                                                class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                                type="button" data-type="minus"
                                                                data-field="quantity[279]">
                                                                <i class="las la-minus"></i>
                                                            </button>
                                                            <input type="number" name="quantity[279]"
                                                                class="col border-0 text-center flex-grow-1 fs-16 input-number"
                                                                placeholder="1" value="1"
                                                                min="1"
                                                                max="4999"
                                                                onchange="updateQuantity(279, this)">
                                                            <button
                                                                class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                                type="button" data-type="plus"
                                                                data-field="quantity[279]">
                                                                <i class="las la-plus"></i>
                                                            </button>
                                                        </div>
                                                                                                    </div>
                                                <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Tổng cộng</span>
                                                    <span
                                                        class="fw-600 fs-16 text-primary">$19.00</span>
                                                </div>
                                                <div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
                                                    <a href="javascript:void(0)"
                                                        onclick="removeFromCartView(event, 279)"
                                                        class="btn btn-icon btn-sm btn-soft-primary btn-circle">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                                                                                                    <li class="list-group-item px-0 px-lg-3">
                                            <div class="row gutters-5">
                                                <div class="col-lg-5 d-flex">
                                                    <span class="mr-2 ml-0">
                                                        <img src="https://www.ebeebbuy.cc/public/download/p/ab177e6d7d555096defcd11eaa162a36.jpg"
                                                            class="img-fit size-60px rounded"
                                                            alt="Electronic Interactive Alphabet Wall Chart, Talking ABC &amp; 123s &amp; Music Poster, Best Educational Toy Gifts for Toddler,Kids Fun Learning for Boys &amp; Girls">
                                                    </span>
                                                    <span class="fs-14 opacity-60">Electronic Interactive Alphabet Wall Chart, Talking ABC &amp; 123s &amp; Music Poster, Best Educational Toy Gifts for Toddler,Kids Fun Learning for Boys &amp; Girls</span>
                                                </div>

                                                <div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Giá bán</span>
                                                    <span
                                                        class="fw-600 fs-16">$17.99</span>
                                                </div>
                                                <div class="col-lg col-4 order-2 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Thuế</span>
                                                    <span
                                                        class="fw-600 fs-16">$0.00</span>
                                                </div>

                                                <div class="col-lg col-6 order-4 order-lg-0">
                                                                                                            <div
                                                            class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                                            <button
                                                                class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                                type="button" data-type="minus"
                                                                data-field="quantity[280]">
                                                                <i class="las la-minus"></i>
                                                            </button>
                                                            <input type="number" name="quantity[280]"
                                                                class="col border-0 text-center flex-grow-1 fs-16 input-number"
                                                                placeholder="1" value="1"
                                                                min="1"
                                                                max="4999"
                                                                onchange="updateQuantity(280, this)">
                                                            <button
                                                                class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                                type="button" data-type="plus"
                                                                data-field="quantity[280]">
                                                                <i class="las la-plus"></i>
                                                            </button>
                                                        </div>
                                                                                                    </div>
                                                <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Tổng cộng</span>
                                                    <span
                                                        class="fw-600 fs-16 text-primary">$17.99</span>
                                                </div>
                                                <div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
                                                    <a href="javascript:void(0)"
                                                        onclick="removeFromCartView(event, 280)"
                                                        class="btn btn-icon btn-sm btn-soft-primary btn-circle">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                                                                                                    <li class="list-group-item px-0 px-lg-3">
                                            <div class="row gutters-5">
                                                <div class="col-lg-5 d-flex">
                                                    <span class="mr-2 ml-0">
                                                        <img src="https://www.ebeebbuy.cc/public/download/p/b51d784df49207e8d9cabc80f1fb7104.jpg"
                                                            class="img-fit size-60px rounded"
                                                            alt="Moulty Letters Matching Eggs 26PCS ABC Alphabet Color Recoginition Sorter Puzzle Easter Travel Bingo Game Uppercase Learning Educational Fine Motor Skill Montessori Gift for 1 2 3 Year Old Toddler Kid">
                                                    </span>
                                                    <span class="fs-14 opacity-60">Moulty Letters Matching Eggs 26PCS ABC Alphabet Color Recoginition Sorter Puzzle Easter Travel Bingo Game Uppercase Learning Educational Fine Motor Skill Montessori Gift for 1 2 3 Year Old Toddler Kid</span>
                                                </div>

                                                <div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Giá bán</span>
                                                    <span
                                                        class="fw-600 fs-16">$17.81</span>
                                                </div>
                                                <div class="col-lg col-4 order-2 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Thuế</span>
                                                    <span
                                                        class="fw-600 fs-16">$0.00</span>
                                                </div>

                                                <div class="col-lg col-6 order-4 order-lg-0">
                                                                                                            <div
                                                            class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                                            <button
                                                                class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                                type="button" data-type="minus"
                                                                data-field="quantity[281]">
                                                                <i class="las la-minus"></i>
                                                            </button>
                                                            <input type="number" name="quantity[281]"
                                                                class="col border-0 text-center flex-grow-1 fs-16 input-number"
                                                                placeholder="1" value="1"
                                                                min="1"
                                                                max="4999"
                                                                onchange="updateQuantity(281, this)">
                                                            <button
                                                                class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                                type="button" data-type="plus"
                                                                data-field="quantity[281]">
                                                                <i class="las la-plus"></i>
                                                            </button>
                                                        </div>
                                                                                                    </div>
                                                <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
                                                    <span
                                                        class="opacity-60 fs-12 d-block d-lg-none">Tổng cộng</span>
                                                    <span
                                                        class="fw-600 fs-16 text-primary">$17.81</span>
                                                </div>
                                                <div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
                                                    <a href="javascript:void(0)"
                                                        onclick="removeFromCartView(event, 281)"
                                                        class="btn btn-icon btn-sm btn-soft-primary btn-circle">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                                                    </ul>
                            </div>

                            <div class="px-3 py-2 mb-4 border-top d-flex justify-content-between">
                                <span class="opacity-60 fs-15">Tổng phụ</span>
                                <span class="fw-600 fs-17">$54.80</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                                    <a href="https://www.ebeebbuy.cc" class="btn btn-link">
                                        <i class="las la-arrow-left"></i>
                                        Quay lại cửa hàng
                                    </a>
                                </div>
                                <div class="col-md-6 text-center text-md-right">
                                                                            <button class="btn btn-primary fw-600"
                                            onclick="showCheckoutModal()">Tiếp tục vận chuyển</button>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
    </section>
@include('shop2.layout.footer')
