<section class="content-header">
    <h1>
        Thông tin tài khoản
    </h1>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
            <div class="box box-primary">
                <div class="panel-heading">
                    Profile
                </div>
                <div class="panel-body">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form
                        id="update-form"
                        role="form"
                        method="POST"
                        action="/profile"
                        class="nice-validator n-default n-bootstrap"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}

                        <div class="box-body box-profile">

                            <div class="profile-avatar-container">
                                <img
                                    src="{{asset(Auth::user()->avatar ?? 'database/avatar_default.png')}}"
                                    class="profile-user-img img-responsive img-circle"
                                    style="height: 111px"
                                    alt=""
                                >
                                <div class="profile-avatar-text img-circle">Click to edit</div>
                                <button type="button" id="faupload-avatar" class="faupload dz-clickable" data-input-id="c-avatar">
                                    <i class="fa fa-upload dz-message"></i>
                                    Upload
                                </button>
                                <input id="avatar-input" type="file" accept="image/*" class="hidden" name="avatar" />
                            </div>

                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                            <div class="form-group">
                                <label for="email" class="control-label">Email:</label>
                                <input type="text" readonly="readonly" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Leave password blank if dont want to change" autocomplete="new-password" name="password" value="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section>


<script>
    // window ready, then add lick listener to butotn to open file dialog
    window.addEventListener('DOMContentLoaded', function () {
        document.getElementById('faupload-avatar').addEventListener('click', function () {
            document.getElementById('avatar-input').click();
        });

        // listen avatar input change the create base64 string and set to img src
        document.getElementById('avatar-input').addEventListener('change', function () {
            const file = this.files[0];
            const reader = new FileReader();
            reader.onloadend = function () {
                document.querySelector('.profile-avatar-container img').src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            } else {
                document.querySelector('.profile-avatar-container img').src = "";
            }
        });
    });
</script>
