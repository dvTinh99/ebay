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

    <table class="table" >
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
            <td>Email khách</td>
            <td>{{ $order->customer_id }}</td>
          </tr>
          <tr>
            <td>Người bán</td>
            <td>{{ $order->user_id }}</td>
          </tr>
          <tr>
            <td>Tình trạng đơn hàng</td>
            <td>{{ $order->status }}</td>
          </tr>
          <tr>
            <td>Tình trạng thanh toán</td>
            <td>{{ $order->payment }}</td>
          </tr>
        </tbody>
    </table>

</body>
</html>
