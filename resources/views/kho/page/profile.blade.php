<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thông tin tài khoản
        {{-- <small>Control panel</small> --}}
    </h1>
    {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol> --}}
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
            <div class="box box-primary">
                <div class="panel-heading">
                    Profile            </div>
                <div class="panel-body">

                    <form id="update-form" role="form" data-toggle="validator" method="POST" action="/sys.php/general.profile/update" class="nice-validator n-default n-bootstrap" novalidate="novalidate">
                        <input type="hidden" name="__token__" value="fb5124d44b86c2d510e381c05c0d246d">                    <input type="hidden" id="c-avatar" name="row[avatar]" value="/public/assets/img/default_avatar/avatar-3.png">
                        <div class="box-body box-profile">

                            <div class="profile-avatar-container">
                                <img src=" /public/assets/img/default_avatar/avatar-3.png" class="profile-user-img img-responsive img-circle" style="height: 111px">
                                <div class="profile-avatar-text img-circle">Click to edit</div>
                                <button type="button" id="faupload-avatar" class="faupload dz-clickable" data-input-id="c-avatar" initialized="true"><i class="fa fa-upload dz-message"></i> Upload</button>
                            </div>

                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                            <p class="text-muted text-center">{{ Auth::user()->name }}</p>
                            <div class="form-group">
                                <label for="email" class="control-label">Email:</label>
                                <input type="text" readonly="readonly" class="form-control" id="email" name="row[email]" value="{{ Auth::user()->name }}">
                            </div>
    <!--                        <div class="form-group">-->
    <!--                            <label for="email" class="control-label">Email:</label>-->
    <!--                            <input type="text" class="form-control" id="email" name="row[email]" value="{{ Auth::user()->name }}" data-rule="required;email"/>-->
    <!--                        </div>-->
    <!--                        <div class="form-group">-->
    <!--                            <label for="email" class="control-label">email:</label>-->
    <!--                            <input type="text" class="form-control" id="email" name="row[email]" value="{{ Auth::user()->name }}" data-rule="required"/>-->
    <!--                        </div>-->
                            <div class="form-group">
                                <label for="password" class="control-label">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Leave password blank if dont want to change" autocomplete="new-password" name="row[password]" value="">
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
