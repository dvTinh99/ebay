<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset('/kho')?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
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
            <td>{{ Config::get('order.'.$order->status, 'Đang chờ xử lí') }}</td>
          </tr>
          <tr>
            <td>Tình trạng thanh toán</td>
            <td>{{ Config::get('payment.'.$order->payment, 'Chưa thanh toán') }}</td>
          </tr>
        </tbody>
    </table>

</body>
</html>
