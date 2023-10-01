@include('shop2.layout.header')


        <div class="modal fade" id="order_details" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>


        <section class="gry-bg py-5">
            <div class="profile">
                <div class="container">
                    <div class="row" style="display:flex;justify-content: center;overflow: hidden;">
                        <img style="height:394px" src="{{ asset('public/uploads/all/flash-sell.jpg') }}" />
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto"
                            style="margin-left: 0 !important; margin-right: 0 !important;padding:0;">

                            <div class="card">

                                <div class="text-center pt-4">
                                    <h1 class="h4 fw-600">
                                        Đăng nhập vào tài khoản của bạn.
                                    </h1>
                                </div>

                                <div class="px-4 py-3 py-lg-4">
                                    <div class="">
                                        <form class="form-default" role="form"
                                            action="/user/login" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control input-email" value=""
                                                    placeholder="E-mail" name="email" id="email"
                                                    autocomplete="off">
                                            </div>

                                            <div class="form-group input-password">
                                                <input type="password" class="form-control " placeholder="Mật khẩu"
                                                    name="password" id="password">
                                            </div>


                                            <div class="form-group google_code_container" style="display: none;">
                                                <input type="text" class="form-control" value=""
                                                    placeholder="Nhập mã xác minh của Google" name="google_code"
                                                    id="google_code" autocomplete="off">
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <label class="aiz-checkbox">
                                                        <input type="checkbox" name="remember">
                                                        <span class=opacity-60>Nhớ tôi</span>
                                                        <span class="aiz-square-check"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="/password/reset"
                                                        class="text-reset opacity-60 fs-14">Quên mật khẩu?</a>
                                                </div>
                                            </div>

                                            <div class="mb-5">
                                                <button type="submit" class="btn btn-primary btn-block fw-600">Đăng
                                                    nhập</button>
                                            </div>
                                        </form>


                                    </div>
                                    <div class="text-center">
                                        <p class="text-muted mb-0">Không có tài khoản?</p>
                                        <a href="/users/registration">Đăng ký ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@include('shop2.layout.footer')
