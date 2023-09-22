<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Biến động số dư
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
            <div class="panel panel-default panel-intro">

                <div class="panel-body">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="one">
                            <div class="widget-body no-padding">

                                <div class="bootstrap-table"><div class="commonsearch-table "><form class="form-horizontal form-commonsearch nice-validator n-default n-bootstrap" novalidate="" method="post" action=""><fieldset><div class="row"><div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3"><label for="id" class="control-label col-xs-4">ID</label><div class="col-xs-8"><input type="hidden" class="form-control operate" name="id-operate" data-name="id" value="=" readonly=""><input type="text" class="form-control" name="id" value="" placeholder="ID" id="id" data-index="1"></div></div><div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3"><label for="users.email" class="control-label col-xs-4">Merchant email</label><div class="col-xs-8"><input type="hidden" class="form-control operate" name="users.email-operate" data-name="users.email" value="LIKE" readonly=""><input type="text" class="form-control" name="users.email" value="" placeholder="Merchant email" id="users.email" data-index="3"></div></div><div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3"><div class="col-sm-8 col-xs-offset-4"><button type="submit" class="btn btn-success" formnovalidate="">Submit</button> <button type="reset" class="btn btn-default">Reset</button> </div></div></div></fieldset></form></div><div class="fixed-table-toolbar"><div class="bs-bars pull-left"><div id="toolbar" class="toolbar">
                                    <a href="javascript:;" class="btn btn-primary btn-refresh" title="Refresh"><i class="fa fa-refresh"></i> </a>
                                    <a href="/sys.php/user/wallet/recharge/logistics_wallet_recharge?type=HyPay" class="btn btn-success btn-dialog  hide " title="Wallet recharge1"> Wallet recharge1 </a>
                                    <a href="/sys.php/user/wallet/recharge/logistics_wallet_recharge?type=UnionPay" class="btn btn-success btn-dialog  hide " title="Wallet recharge2"> Wallet recharge2 </a>
                                    <a href="/sys.php/user/wallet/recharge/logistics_wallet_recharge?type=GPay" class="btn btn-success btn-dialog  hide " title="Wallet recharge3"> Wallet recharge3 </a>
                                    <!--                        <a href="/sys.php/user/wallet/recharge/logistics_wallet_recharge" class="btn btn-success btn-addtabs  hide " title="Wallet recharge"><i class="fa fa-plus"></i> Wallet recharge </a>-->
                                <a href="javascript:" class="btn btn-warning-light btn-selected-tips hide" data-animation="false" data-toggle="tooltip" data-title="Click to uncheck all"><i class="fa fa-info-circle"></i> Multiple selection mode: <b>0</b> checked</a></div></div><div class="columns-right pull-right" style="margin-top:10px;margin-bottom:10px;"><button class="btn btn-default" type="button" name="commonSearch" title="Common search"><i class="glyphicon glyphicon-search"></i></button></div><div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="toggle" aria-label="toggle" title="Toggle"><i class="glyphicon glyphicon-list-alt icon-list-alt"></i></button><div class="keep-open btn-group" title="Columns"><button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem"><label><input type="checkbox" data-field="id" value="1" checked="checked"> ID</label></li><li role="menuitem"><label><input type="checkbox" data-field="amount" value="2" checked="checked"> Amount</label></li><li role="menuitem"><label><input type="checkbox" data-field="users.email" value="3" checked="checked"> Merchant email</label></li><li role="menuitem"><label><input type="checkbox" data-field="created_at" value="4" checked="checked"> Create time</label></li></ul></div><div class="export btn-group"><button class="btn btn-default dropdown-toggle" aria-label="export type" title="Export data" data-toggle="dropdown" type="button"><i class="glyphicon glyphicon-export icon-share"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" data-type="json"><a href="javascript:void(0)">JSON</a></li><li role="menuitem" data-type="xml"><a href="javascript:void(0)">XML</a></li><li role="menuitem" data-type="csv"><a href="javascript:void(0)">CSV</a></li><li role="menuitem" data-type="txt"><a href="javascript:void(0)">TXT</a></li><li role="menuitem" data-type="doc"><a href="javascript:void(0)">MS-Word</a></li><li role="menuitem" data-type="excel"><a href="javascript:void(0)">MS-Excel</a></li></ul></div></div></div><div class="fixed-table-container" style="padding-bottom: 0px;"><div class="fixed-table-header" style="display: none;"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 42px; display: none;">Loading, please wait...</div><table id="table" class="table table-striped table-bordered table-hover table-nowrap" width="100%">
                                <thead><tr><th class="bs-checkbox " style="text-align: center; vertical-align: middle; width: 36px; " data-field="0"><div class="th-inner "><input name="btSelectAll" type="checkbox"></div><div class="fht-cell"></div></th><th style="text-align: center; vertical-align: middle; " data-field="id"><div class="th-inner ">ID</div><div class="fht-cell"></div></th><th style="text-align: center; vertical-align: middle; " data-field="amount"><div class="th-inner ">Amount</div><div class="fht-cell"></div></th><th style="text-align: center; vertical-align: middle; " data-field="users.email"><div class="th-inner ">Merchant email</div><div class="fht-cell"></div></th><th style="text-align: center; vertical-align: middle; " data-field="created_at"><div class="th-inner ">Create time</div><div class="fht-cell"></div></th></tr></thead><tbody data-listidx="0"><tr class="no-records-found"><td colspan="5">No matching records found</td></tr></tbody></table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div><div class="fixed-table-pagination" style="display: none;"><div class="pull-left pagination-detail"><span class="pagination-info">Showing 1 to 0 of 0 rows</span><span class="page-list" style="display: none;"><span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem"><a href="#">10</a></li></ul></span> rows per page</span></div><div class="pull-right pagination" style="display: none;"><ul class="pagination"><li class="page-pre"><a href="#">Previous</a></li><li class="page-next"><a href="#">Next</a></li><li class="jumpto"><input type="text" class="form-control"><button class="btn btn-default" title="Go" type="button">Go</button></li></ul></div></div><div class="fixed-columns-right"></div></div></div><div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <script id="tpl-all-pass" type="text/html">
                    <div class="form-group">
                        Video_all_pass        </div>
                </script>
            </div>

        </section>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
