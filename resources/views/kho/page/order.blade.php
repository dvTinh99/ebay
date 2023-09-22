<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Đơn Hàng
    </h1>
    {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol> --}}
</section>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <div class="panel panel-default panel-intro">
                    <div class="panel-body">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="one">
                                <div class="widget-body no-padding">

                                    <div class="bootstrap-table">
                                        {{-- <div class="commonsearch-table ">
                                            <form
                                                class="form-horizontal form-commonsearch nice-validator n-default n-bootstrap"
                                                novalidate="" method="post" action="">
                                                <fieldset>
                                                    <div class="row">
                                                        <div
                                                            class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                            <label for="code" class="control-label col-xs-4">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Số đơn
                                                                        hàng</font>
                                                                </font>
                                                            </label>
                                                            <div class="col-xs-8"><input type="hidden"
                                                                    class="form-control operate" name="code-operate"
                                                                    data-name="code" value="="
                                                                    readonly=""><input type="text"
                                                                    class="form-control" name="code"
                                                                    value="" placeholder="Số đơn hàng"
                                                                    id="code" data-index="2"></div>
                                                        </div>
                                                        <div
                                                            class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                            <div class="col-sm-8 col-xs-offset-4"><button
                                                                    type="submit" class="btn btn-success"
                                                                    formnovalidate="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Nộp
                                                                        </font>
                                                                    </font>
                                                                </button> <button type="reset"
                                                                    class="btn btn-default">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Cài
                                                                            lại</font>
                                                                    </font>
                                                                </button> </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div> --}}
                                        {{-- <div class="fixed-table-toolbar">
                                            <div class="bs-bars pull-left">
                                                <div id="toolbar" class="toolbar">
                                                    <a href="javascript:;" class="btn btn-primary btn-refresh"
                                                        title="Làm cho khỏe lại"><i class="fa fa-refresh"></i> </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-success btn-bulk-purchase "
                                                        title="Mua số lượng lớn"><i class="fa fa-plus"></i>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Mua số lượng lớn
                                                            </font>
                                                        </font>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-info btn-wallet-recharge"
                                                        title="Nạp tiền vào ví"><i class="fa fa-plus"></i>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Nạp tiền vào ví
                                                            </font>
                                                        </font>
                                                    </a>
                                                    <a href="javascript:"
                                                        class="btn btn-warning-light btn-selected-tips hide"
                                                        data-animation="false" data-toggle="tooltip"
                                                        data-title="Click to uncheck all"><i
                                                            class="fa fa-info-circle"></i> Multiple selection mode:
                                                        <b>0</b> checked</a>
                                                </div>
                                            </div>
                                            <div class="columns-right pull-right"
                                                style="margin-top:10px;margin-bottom:10px;"><button
                                                    class="btn btn-default" type="button" name="commonSearch"
                                                    title="Tìm kiếm chung"><i
                                                        class="glyphicon glyphicon-search"></i></button></div>
                                            <div class="columns columns-right btn-group pull-right"><button
                                                    class="btn btn-default" type="button" name="toggle"
                                                    aria-label="chuyển đổi" title="Chuyển đổi"><i
                                                        class="glyphicon glyphicon-list-alt icon-list-alt"></i></button>
                                                <div class="keep-open btn-group" title="Cột"><button
                                                        type="button" aria-label="cột"
                                                        class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown"><i
                                                            class="glyphicon glyphicon-th icon-th"></i> <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="o_id" value="1"
                                                                    checked="checked"> ID</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="code" value="2"
                                                                    checked="checked"> Order number</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="product_storehouse_total"
                                                                    value="3" checked="checked"> Pickup
                                                                amount</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="profit" value="4"
                                                                    checked="checked"> Profit</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="grand_total" value="5"
                                                                    checked="checked"> Total amount</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="email" value="6"
                                                                    checked="checked"> Customer email</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="seller" value="7"
                                                                    checked="checked"> Seller</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="product_storehouse_status"
                                                                    value="8" checked="checked"> Pickup
                                                                status</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="payment_status" value="9"
                                                                    checked="checked"> Payment status</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="created_at" value="10"
                                                                    checked="checked"> Create time</label></li>
                                                        <li role="menuitem"><label><input type="checkbox"
                                                                    data-field="operate" value="11"
                                                                    checked="checked"> Operate</label></li>
                                                    </ul>
                                                </div>
                                                <div class="export btn-group"><button
                                                        class="btn btn-default dropdown-toggle"
                                                        aria-label="loại xuất khẩu" title="Xuất dữ liệu"
                                                        data-toggle="dropdown" type="button"><i
                                                            class="glyphicon glyphicon-export icon-share"></i>
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="menuitem" data-type="json"><a
                                                                href="javascript:void(0)">JSON</a></li>
                                                        <li role="menuitem" data-type="xml"><a
                                                                href="javascript:void(0)">XML</a></li>
                                                        <li role="menuitem" data-type="csv"><a
                                                                href="javascript:void(0)">CSV</a></li>
                                                        <li role="menuitem" data-type="txt"><a
                                                                href="javascript:void(0)">TXT</a></li>
                                                        <li role="menuitem" data-type="doc"><a
                                                                href="javascript:void(0)">MS-Word</a></li>
                                                        <li role="menuitem" data-type="excel"><a
                                                                href="javascript:void(0)">MS-Excel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="fixed-table-container" style="padding-bottom: 0px;">
                                            <div class="fixed-table-header" style="display: none;">
                                                <table></table>
                                            </div>
                                            <div class="fixed-table-body">
                                                <table id="table"
                                                    class="table table-striped table-bordered table-hover table-nowrap"
                                                    width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="code">
                                                                <div class="th-inner ">
                                                                    Mã đơn hàng
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="product_storehouse_total">
                                                                <div class="th-inner ">
                                                                    Giá kho
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="profit">
                                                                <div class="th-inner ">
                                                                    Lợi nhuận
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="grand_total">
                                                                <div class="th-inner ">
                                                                   Tổng cộng
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="email">
                                                                <div class="th-inner ">
                                                                    Email khách
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="seller">
                                                                <div class="th-inner ">
                                                                    Người bán
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="product_storehouse_status">
                                                                <div class="th-inner ">
                                                                    Tình trạng đơn hàng
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="payment_status">
                                                                <div class="th-inner ">
                                                                    Tình trạng thanh toán
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="created_at">
                                                                <div class="th-inner ">
                                                                    Thời gian tạo
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                            <th style="text-align: center; vertical-align: middle; "
                                                                data-field="operate">
                                                                <div class="th-inner ">
                                                                    Chi tiết
                                                                </div>
                                                                <div class="fht-cell"></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-listidx="0">
                                                        @foreach($myOrder as $order)
                                                            <tr>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->id }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->warehouse_price }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->profit }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->price }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->customer_id }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->user_id }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->status }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->payment }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $order->time_signing }}</td>
                                                                <td style="text-align: center; vertical-align: middle;"><button>Chi tiết</button></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fixed-table-pagination" style="display: block;">
                                                <div class="pull-left pagination-detail"><span
                                                        class="pagination-info">
                                                        <font style="vertical-align: inherit;">
                                                           {{ $myOrder->links() }}
                                                        </font>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
