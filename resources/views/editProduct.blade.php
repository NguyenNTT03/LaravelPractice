<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>
    <h1>Chỉnh sửa sản phẩm</h1>

    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required><br>

        <label for="description">Mô tả:</label>
        <textarea name="description" rows="3" required>{{ old('description', $product->description) }}</textarea><br>

        <label for="price">Giá:</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" required><br>

        <label for="image">Ảnh sản phẩm:</label>
        @if($product->img_path)
        <div>
            <img src="{{ asset('storage/' . $product->img_path) }}" width="120" alt="Ảnh sản phẩm hiện tại">
        </div>
        @endif
        <input type="file" name="image"><br>

        <button type="submit">Cập nhật sản phẩm</button>
    </form>
</body>

</html>