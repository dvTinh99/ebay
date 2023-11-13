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



<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider">
                    <div class="col active">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2 las la-shopping-cart"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">
                                1. {{ __t('Giỏ hàng của tôi', 'My cart') }}
                            </h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">
                                2. {{ __t('Địa chỉ giao hàng', 'Shipping address') }}
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
                            <div class="col-md-5 fw-600">
                                {{ __t('Sản phẩm', 'Product') }}
                            </div>
                            <div class="col fw-600">
                                {{ __t('Giá bán', 'Price') }}
                            </div>
                            <div class="col fw-600">
                                {{ __t('Thuế', 'Tax') }}
                            </div>
                            <div class="col fw-600">
                                {{ __t('Số lượng', 'Quantity') }}
                            </div>
                            <div class="col fw-600">
                                {{ __t('Tổng cộng', 'Total') }}
                            </div>
                            <div class="col-auto fw-600">
                                {{ __t('Tẩy', 'Remove') }}
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach (Cart::content() as $product)

                            <li class="list-group-item px-0 px-lg-3">
                                <div class="row gutters-5">
                                    <div class="col-lg-5 d-flex">
                                        <span class="mr-2 ml-0">
                                            <img src="{{ $product->options['image'] }}"
                                                class="img-fit size-60px rounded"
                                                alt="AliToys alphabet flash cards Educational Toys Set 0-12 Months Baby Learning Language Quiet Cloth Book First Kids Soft Books Animal English Learning Card Can be washed">
                                        </span>
                                        <span class="fs-14 opacity-60">{{ $product->name }}</span>
                                    </div>

                                    <div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
                                        <span class="opacity-60 fs-12 d-block d-lg-none">
                                            {{ __t('Giá bán', 'Price') }}
                                        </span>
                                        <span class="fw-600 fs-16">${{ $product->price }}</span>
                                    </div>
                                    <div class="col-lg col-4 order-2 order-lg-0 my-3 my-lg-0">
                                        <span class="opacity-60 fs-12 d-block d-lg-none">
                                            {{ __t('Thuế', 'Tax') }}
                                        </span>
                                        <span class="fw-600 fs-16">$0.00</span>
                                    </div>

                                    <div class="col-lg col-6 order-4 order-lg-0">
                                        <div class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                type="button" data-type="minus" data-field="quantity[279]">
                                                <i class="las la-minus"></i>
                                            </button>
                                            <input type="number" name="quantity[279]"
                                                class="col border-0 text-center flex-grow-1 fs-16 input-number"
                                                placeholder="1" value="{{ $product->qty }}" min="1" max="4999"
                                                onchange="updateQuantity(279, this)">
                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                type="button" data-type="plus" data-field="quantity[279]">
                                                <i class="las la-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
                                        <span class="opacity-60 fs-12 d-block d-lg-none">
                                            {{ __t('Tổng cộng', 'Total') }}
                                        </span>
                                        <span class="fw-600 fs-16 text-primary">${{ $product->price * $product->qty }}</span>
                                    </div>
                                    <div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
                                        <a href="javascript:void(0)" onclick="removeFromCartPage('{{ $product->rowId }}')"
                                            class="btn btn-icon btn-sm btn-soft-primary btn-circle">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="px-3 py-2 mb-4 border-top d-flex justify-content-between">
                        <span class="opacity-60 fs-15">
                            {{ __t('Tổng phụ', 'Subtotal') }}
                        </span>
                        <span class="fw-600 fs-17">${{ Cart::priceTotal() }}</span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                            <a href="/" class="btn btn-link">
                                <i class="las la-arrow-left"></i>
                                {{ __t('Quay lại cửa hàng', 'Back to shop') }}
                            </a>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <button class="btn btn-primary fw-600" onclick="showCheckoutModal()">
                                {{ __t('Tiếp tục vận chuyển', 'Continue to shipping') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('shop2.layout.footer')
