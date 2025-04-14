<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
</head>

<body>
    <div>
        <h1>Thông tin người dùng</h1>
        <p>Tên: {{$user->name}}</p>
        <p>Giới tính: {{$user->userDetail->gender}}</p>
        <p>Ngày sinh: {{$user->userDetail->date_of_birth}}</p>
        <p>Số điện thoại: {{$user->userDetail->phone_number}}</p>
        <p>Địa chỉ: {{$user->userDetail->address}}</p>
    </div>
    <div>
        <p>{{$user->id}}</p>
        <a href="{{ route('user.edit', ['id' => $user->id]) }}">
            <button>
                Edit thong tin chi tiet nguoi dung
            </button>
        </a>
    </div>
    <div>
        <h2>San pham da mua cua {{$user->name}}</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Giá</th>
                    <th>Nhãn</th>
                    <th>Ngày mua</th>
                    </ttr>
            </thead>
            <tbody>
                @foreach($user->orders as $order) <tr>
                    <td>{{$order->product->id}}</td>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->product->description}}</td>
                    <td> {{number_format($order->product->price, 0, ',', '.')}}VND</td>
                    <td> {{$order->product->label}}</td>
                    <td> {{$order->order_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>