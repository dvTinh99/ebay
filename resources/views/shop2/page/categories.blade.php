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
                <h1 class="fw-600 h4">Tất cả danh mục</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="https://www.ebeebbuy.cc">Trang Chủ</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="https://www.ebeebbuy.cc/categories">"Tất cả danh mục"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        @foreach ($categories as $category)

        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="/category/{{ $category->id }}" class="text-reset">{{ $category->name }}</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    @foreach ($category->children as $child)

                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                href="/category/{{ $child->id }}">{{ $child->name }}</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('shop2.layout.footer')
