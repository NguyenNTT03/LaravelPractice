<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h1>Chỉnh sửa thông tin người dùng</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Tên:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required><br>

        <label for="address">Địa chỉ:</label>
        <input type="text" name="address" value="{{ old('address', $user->userDetail->address) }}" required><br>

        <label for="date_of_birth">Ngày sinh:</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $user->userDetail->date_of_birth) }}"
            required><br>

        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>