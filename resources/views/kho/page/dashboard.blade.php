<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
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
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <div class="panel panel-default panel-intro">
                    <!-- 公告 -->

                    <div class="panel-body">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="one">
                <!--        卖家展示数据        -->
                                            <div class="row" style="margin-top:15px;">
                                    <div class="col-lg-12">
                                    </div>
                <!--                钱包余额    -->
                                    <div class="col-xs-6 col-md-3">
                                        <div class="panel bg-blue-gradient no-border">
                                            <div class="panel-body">
                                                <div class="ibox-title">
                                                    <span class="label label-primary pull-right">Real time</span>
                                                    <h5>Wallet balance</h5>
                                                </div>
                                                <div class="ibox-content">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h1 class="no-margins">$0.00</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <!--                订单总金额    -->
                                    <div class="col-xs-6 col-md-3">
                                        <div class="panel bg-teal-gradient no-border">
                                            <div class="panel-body">
                                                <div class="ibox-title">
                                                    <span class="label label-primary pull-right">Real time</span>
                                                    <h5>Total order amount</h5>
                                                </div>
                                                <div class="ibox-content">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h1 class="no-margins">$38.28</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <!--                总利润   -->
                                    <div class="col-xs-6 col-md-3">
                                        <div class="panel bg-purple-gradient no-border">
                                            <div class="panel-body">
                                                <div class="ibox-title">
                                                    <span class="label label-primary pull-right">Real time</span>
                                                    <h5>Total Profit</h5>
                                                </div>
                                                <div class="ibox-content">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h1 class="no-margins">$6.38</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                <!--                未支付订单金额    -->
                                    <div class="col-xs-6 col-md-3">
                                        <div class="panel bg-blue-gradient no-border">
                                            <div class="panel-body">
                                                <div class="ibox-title">
                                                    <span class="label label-primary pull-right">Real time</span>
                                                    <h5>Unpaid order amount</h5>
                                                </div>
                                                <div class="ibox-content">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h1 class="no-margins">$31.9</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        </div>
                            <div class="tab-pane fade" id="two">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="panel no-border">
                                            <div class="panel-body">
                                                <div class="form-group row">
                                                    <label for="announcement" class="col-sm-2 col-form-label">Announcement Popup</label>
                                                    <div class="col-sm-2" id="announcement">
                                                        <select class="form-control form-control-lg" id="announcement_popup_status">
                                                            <option value="1" selected="">Open</option>
                                                            <option value="0">Close</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
