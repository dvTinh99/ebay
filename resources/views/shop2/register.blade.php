@include('shop2.layout.header')
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body"></div>
        </div>
    </div>
</div>

<section class="gry-bg py-4">
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-6 mx-auto px-3">
                    <div class="card">
                        <div class="text-center pt-4">
                            <h1 class="h4 fw-600">
                                {{ __t('Tạo tài khoản', 'Create account') }}
                            </h1>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="px-4 py-3 py-lg-4">
                            <div class="">
                                <form id="reg-form" class="form-default" role="form" action="/user/register" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            value=""
                                            placeholder="{{ __t('Tên', 'Name') }}"
                                            name="name"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control"
                                            value=""
                                            placeholder="E-mail"
                                            name="email"
                                        />
                                        <input type="hidden" class="form-control" value="customer" placeholder="E-mail" name="role" />
                                    </div>

                                    <div class="form-group">
                                        <input
                                            type="password"
                                            class="form-control"
                                            placeholder="{{ __t('Mật khẩu', 'Password') }}"
                                            name="password"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <input
                                            type="password"
                                            class="form-control"
                                            placeholder="{{ __t('Nhập lại mật khẩu', 'Confirm Password') }}"
                                            name="password_confirmation"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <input
                                            required
                                            type="text"
                                            class="form-control"
                                            value="{{ $_GET['invitation_code'] ?? '' }}"
                                            placeholder="{{ __t('Mã giới thiệu', 'Referral Code') }}"
                                            name="ref_link"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="checkbox_example_1" required />
                                            <span class="opacity-60">
                                                {{ __t('Bằng cách đăng ký, bạn đồng ý với các điều khoản và điều kiện của chúng tôi.', 'By signing up you agree to our terms and conditions.') }}
                                            </span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>

                                    <div class="mb-5">
                                        <button type="submit" class="btn btn-primary btn-block fw-600">
                                            {{ __t('Tạo tài khoản', 'Create account') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mb-0">
                                    {{ __t('Bạn có sẵn tài khoản?', 'Already have an account?') }}
                                </p>
                                <a href="/users/login">
                                    {{ __t('Đăng nhập', 'Login') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('shop2.layout.footer')
