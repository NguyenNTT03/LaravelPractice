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
    <h1>Thông tin chi tiết sản phẩm</h1>
    <p>Tên: {{$product->name}}</p>
    <p>Mô tả: {{$product->description}}</p>
    <p>Giá: {{number_format($product->price, 0, ',', '.')}}VND</p>
    <p>Nhãn: {{$product->label}}</p>
    @auth
    <form action="{{ route('products.buy', ['id' => $product->id]) }}" method="POST">
        @csrf
        <button type="submit">Mua</button>
    </form>
    <a href="{{ route('products.edit', ['id' => $product->id]) }}">
        <button type="submit">Chỉnh sửa</button>
    </a>
    <form action="{{ route('products.delete', ['id' => $product->id]) }}" method="POST"
        onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
        @csrf
        @method('DELETE')
        <button type="submit">Xóa sản phẩm</button>
    </form>
    @endauth

</body>

</html>