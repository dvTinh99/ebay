<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset('/kho') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <table class="table table-striped table-bordered">
        <tbody style="text-align: center; vertical-align: middle;">
            <tr>
                <td>Mã đơn hàng</td>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <td>Giá kho</td>
                <td>{{ $order->warehouse_price }}</td>
            </tr>
            <tr>
                <td>Lợi nhuận</td>
                <td>{{ $order->profit }}</td>
            </tr>
            <tr>
                <td>Tổng cộng</td>
                <td>{{ $order->price }}</td>
            </tr>
            <tr>
                <td>Sản phẩm</td>
                <td>
                    @foreach ($order->orderItem as $item)
                        {{ $item->product->name }} ( {{ $item->quantity }})<br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Email khách</td>
                <td>{{ substr($order->customer->email, 0, 3) }}**********</td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>{{ substr($order->address->address, 0, 3) }}**********</td>
            </tr>
            <tr>
                <td>zip code</td>
                <td>{{ substr($order->address->zip_code, 0, 3) }}**********</td>
            </tr>
            <tr>
                <td>Người bán</td>
                <td>{{ $order->seller->name }}</td>
            </tr>
            <tr>
                <td>Tình trạng đơn hàng</td>
                <td><label
                        class="{{ $order->payment == '2' ? 'label label-success' : '' }}">{{ Config::get('order.' . $order->status, 'Đang chờ xử lí') }}<label>
                </td>
            </tr>
            <tr>
                <td>Tình trạng thanh toán</td>
                <td><label
                        class="{{ $order->payment == '2' ? 'label label-success' : '' }}">{{ Config::get('payment.' . $order->payment, 'Chưa thanh toán') }}</label>
                </td>
            </tr>
        </tbody>
    </table>

    <?php
        $dateCreate = $order->time_create;
        $dateCreated = \Carbon\Carbon::parse($dateCreate);

        $dateRecieve = $order->time_signing;
        $dateRecieved = \Carbon\Carbon::parse($dateRecieve);

        $dayDiff = $dateRecieved->diffInDays($dateCreated);
    ?>
    <div class="alert alert-success">
        <b>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Thông tin hậu cần</font>
            </font>
        </b>
        <div class="track-rcol">
            <div class="track-list">
                <ul>
                    <li>
                        <i class="node-icon"></i>
                        <span class="time">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $dateCreate }} </font>
                            </font>
                        </span>
                        <span class="txt">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Thanh toán thành công! </font>
                                <font style="vertical-align: inherit;">Chờ xếp dỡ trong quá trình kiểm đếm</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <i class="node-icon"></i>
                        <span class="time">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $dateCreate }} </font>
                            </font>
                        </span>
                        <span class="txt">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Gói hàng đã được chuyển đi và hiện đang được gửi
                                    đến trạm tiếp theo</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <i class="node-icon"></i>
                        <span class="time">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $dateCreated->addDay() }} </font>
                            </font>
                        </span>
                        <span class="txt">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Gói hàng đã được nạp và hiện đang được gửi đến
                                    trung tâm trung chuyển</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <i class="node-icon"></i>
                        <span class="time">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $dateCreated }} </font>
                            </font>
                        </span>
                        <span class="txt">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hàng đã về tới trạm trung chuyển khu vực và hiện
                                    đang được chuyển về trung tâm phân loại thành phố</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <i class="node-icon"></i>
                        <span class="time">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $dateCreated->addDay() > $dateRecieve ? $dateRecieve : $dateCreated}} </font>
                            </font>
                        </span>
                        <span class="txt">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Người chuyển phát nhanh đã đến trung tâm phân
                                    loại thành phố và hiện đang phân loại</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <i class="node-icon"></i>
                        <span class="time">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $dateRecieve }}</font>
                            </font>
                        </span>
                        <span class="txt">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Giao hàng thành công</font>
                            </font>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
