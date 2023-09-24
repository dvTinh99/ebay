<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            {{-- <li class="header">MAIN NAVIGATION</li> --}}
            <li class="<?= $page == 'dashboard' ? 'active' : '' ?>">
                <a href="/dashboard">
                    <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                </a>
            </li>
            <li class="<?= $page == 'profile' ? 'active' : '' ?>">
                <a href="/profile">
                    <i class="fa fa-user fa-fw"></i> <span>Tài khoản</span>
                </a>
            </li>
            <li class="treeview <?= in_array($page, ['wallet-recharge', 'wallet-withdraw']) ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa fa-bitcoin fa-fw"></i>
                    <span>VÍ</span>
                    <span class="pull-right-container">
                        {{-- <span class="label label-primary pull-right">4</span> --}}
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?= $page == 'wallet-recharge' ? 'active' : '' ?>"><a href="wallet-recharge"><i class="fa fa-circle-o"></i>Biến động số dư</a></li>
                    <li class="<?= $page == 'wallet-withdraw' ? 'active' : '' ?>"><a href="wallet-withdraw"><i class="fa fa-circle-o"></i>Rút tiền</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li> --}}
            <li class="treeview <?= $page == 'order' ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa fa-wpforms fa-fw"></i>
                    <span>Đặt Hàng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?= $page == 'order' ? 'active' : '' ?>"><a href="/order"><i class="fa fa-circle-o"></i> Đơn hàng mới</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
