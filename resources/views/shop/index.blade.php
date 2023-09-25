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
            @include('shop.layout.slider')
        </div>
    </div>
</div>
<!-- Flash Deal 原始版本 -->


@include('shop.section.new-product')


@include('shop.section.featured-product')


@include('shop.section.best-selling')

<!-- Auction Product -->
@include('shop.section.home-categories')

@include('shop.layout.footer')
