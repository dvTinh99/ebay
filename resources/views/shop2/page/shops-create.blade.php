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
                <h1 class="fw-600 h4">
                    {{ __t('Đăng ký cửa hàng của bạn', 'Create your shop') }}
                </h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="/">
                            {{ __t('Trang chủ', 'Home') }}
                        </a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="create.html">
                            {{ __t('Đăng ký cửa hàng của bạn', 'Create your shop') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                <form id="shop" class="" action="/user/register" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="bg-white rounded shadow-sm mb-3">
                        <div class="fs-15 fw-600 p-3 border-bottom">
                            {{ __t('Thông tin cửa hàng', 'Shop Information') }}
                        </div>
                        <div class="p-3">
                            <div class="form-group">
                                <label>
                                    {{ __t('Tên', 'Name') }}
                                    <span class="text-primary">*</span>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value=""
                                    placeholder="Tên"
                                    name="name"
                                >
                                <input
                                    type="hidden"
                                    class="form-control"
                                    value="seller"
                                    name="role"
                                >
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                    <span class="text-primary">*</span>
                                </label>
                                <input type="email" class="form-control" value="" placeholder="E-mail"
                                    name="email">
                            </div>

                            <div class="form-group">
                                <label>
                                    {{ __t('Mật khẩu', 'Password') }}
                                    <span class="text-primary">*</span>
                                </label>
                                <input type="password" class="form-control" placeholder="{{ __t('Mật khẩu', 'Password') }}" name="password">
                            </div>
                            <div class="form-group">
                                <label>
                                    {{ __t('Xác nhận mật khẩu', 'Confirm Password')}}
                                    <span class="text-primary">*</span>
                                </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    placeholder="{{ __t('Xác nhận mật khẩu', 'Confirm Password')}}"
                                    name="password_confirmation"
                                >
                            </div>

                            <div class="form-group">
                                <label>
                                    mã mời
                                    <span class="text-primary">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value="{{ $_GET['invitation_code'] ?? '' }}"
                                    placeholder="mã mời"
                                    name="ref_link"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary fw-600">Đăng ký cửa hàng của bạn
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- 注册协议模态框 -->
<div class="modal d-none" id="seller_register_modal">
    <div class="absolute-full bg-black opacity-60"></div>
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
        <div class="modal-content position-relative border-0 rounded-0" style="margin:1rem">
            <div class="aiz-editor-data" style="max-height: 25rem;overflow-y: auto;">

            </div>
            <a href="javascript:void(0)"
                class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session"
                onclick="changeRegisterModal(1)">
                <i class="la la-close fs-20"></i>
            </a>
        </div>
    </div>
</div>
@include('shop2.layout.footer')
