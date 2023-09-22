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

                                <div class="bootstrap-table">
                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        <div class="fixed-table-header" style="display: none;">
                                            <table></table>
                                        </div>
                                        <div class="fixed-table-body">
                                            <div class="fixed-table-loading" style="top: 42px; display: none;">
                                                Loading, please wait...</div>
                                            <table id="table"
                                                class="table table-striped table-bordered table-hover table-nowrap"
                                                width="100%">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center; vertical-align: middle; "
                                                            data-field="id">
                                                            <div class="th-inner ">ID</div>
                                                            <div class="fht-cell"></div>
                                                        </th>
                                                        <th style="text-align: center; vertical-align: middle; "
                                                            data-field="amount">
                                                            <div class="th-inner ">Số tiền</div>
                                                            <div class="fht-cell"></div>
                                                        </th>
                                                        <th style="text-align: center; vertical-align: middle; "
                                                            data-field="users.email">
                                                            <div class="th-inner ">Ghi chú</div>
                                                            <div class="fht-cell"></div>
                                                        </th>
                                                        <th style="text-align: center; vertical-align: middle; "
                                                            data-field="created_at">
                                                            <div class="th-inner ">Ngày</div>
                                                            <div class="fht-cell"></div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody data-listidx="0">
                                                    @if($recharge->count() == 0)
                                                        <tr class="no-records-found">
                                                            <td colspan="5">No matching records found</td>
                                                        </tr>
                                                    @else
                                                        @foreach ($recharge as $bill)
                                                            <tr class="no-records-found">
                                                                <td style="text-align: center; vertical-align: middle;">{{ $bill->id }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $bill->amount }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $bill->method }}</td>
                                                                <td style="text-align: center; vertical-align: middle;">{{ $bill->created_at }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fixed-table-pagination" style="display: block;">
                                            <div class="pull-left pagination-detail">
                                                {{ $recharge->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
