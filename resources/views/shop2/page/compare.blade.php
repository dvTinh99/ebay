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



<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">Đối chiếu</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="/">Trang Chủ</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="/compare">"Đối chiếu"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container text-left">
        <div class="bg-white shadow-sm rounded">
            <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                <div class="fs-15 fw-600">So sánh</div>
                <a href="/compare/reset" style="text-decoration: none;"
                    class="btn btn-soft-primary btn-sm fw-600">Đặt lại danh sách so sánh</a>
            </div>
            <div class="p-3">
                @if(getCountCompare() > 0)
                <table class="table table-responsive table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col" style="width:16%" class="font-weight-bold">
                                Tên
                            </th>
                            @foreach (Cart::content() as $product)
                            @if($product->options['type'] != 1)
                            <th scope="col" style="width:28%" class="font-weight-bold">
                                <a class="text-reset fs-15"
                                    href="product/{{ $product->id }}">{{ $product->name }}</a>
                            </th>
                            @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Hình ảnh</th>
                            @foreach (Cart::content() as $product)
                            @if($product->options['type'] != 1)
                            <td>
                                <img loading="lazy"
                                    src="{{ $product->options['image'] }}"
                                    alt="Hình ảnh sản phẩm" class="img-fluid py-4">
                            </td>
                            @endif
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="row">Giá bán</th>
                            @foreach (Cart::content() as $product)
                            @if($product->options['type'] != 1)
                            <td>
                                <span class="fw-700 text-primary">${{ $product->price }}</span>
                            </td>
                            @endif
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="row">Nhãn hiệu</th>
                            @foreach (Cart::content() as $product)
                            @if($product->options['type'] != 1)
                            <td>
                                No brand
                            </td>
                            @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">thể loại</th>
                            @foreach (Cart::content() as $product)
                            @if($product->options['type'] != 1)
                            <td>
                                {{ $product->options['category']?? 'Không thể loại' }}
                            </td>
                            @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            @foreach (Cart::content() as $product)
                            @if($product->options['type'] != 1)
                            <td class="text-center py-4">
                                <button type="button" class="btn btn-primary fw-600"
                                    onclick="showAddToCartModal('{{ $product->id }}')">
                                    Thêm vào giỏ hàng
                                </button>
                            </td>
                            @endif
                            @endforeach

                        </tr>
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</section>
@include('shop2.layout.footer')
