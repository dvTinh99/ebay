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

<div class="home-banner-area mb-4 pt-3">
    <div class="container">
        <div class="row gutters-10 position-relative">
            @include('shop2.layout.side-bar')
            <div class="col-lg-9">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true"
                    data-autoplay="true">
                    <div class="carousel-box">
                        <a href="https://">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="public/uploads/all/olqknhpEizdysiBSCuZ6XK5YXJ9nnPeBI2UsQkpI.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="index.html">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="public/uploads/all/63UjjMKy25oqaXvoEAoBhECNB2bNxgLy9Cjb1NrQ.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="index.html">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="public/uploads/all/K7zsD97YfwdQ8fKc16dZIRmRJC0DaDkxy83TpzOz.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="index.html">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden h-lg-460px"
                                src="public/uploads/all/iKKXiL9jniaNt7NDtlJrhhhSXJeBYOSg2SZL07GP.jpg"
                                alt="ebay Shop promo" height="315"
                                onerror="this.onerror=null;this.src='/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@include('shop2.section.product')


{{-- <div id="section_featured">
        </div>


        <div id="section_best_selling">

        </div> --}}

<!-- Auction Product -->
@include('shop2.layout.footer')
