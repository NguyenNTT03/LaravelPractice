<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="/dashboard">Back</a>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>@foreach($products as $product) <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>
                    <a href="{{ route('products.showDetail', ['id' => $product->id]) }}" class="text-green-500">
                        Xem chi tiết
                    </a>
                </td>
            </tr>@endforeach </tbody>
    </table>
</body>

</html>