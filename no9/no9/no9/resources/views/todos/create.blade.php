<!DOCTYPE html>
<html>
<head>
    <title>Thêm công việc</title>
</head>
<body>
    <h1>Thêm công việc mới</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Tên công việc">
        <button type="submit">Thêm</button>
    </form>

    <a href="{{ route('todos.index') }}">⬅️ Quay lại</a>
</body>
</html>
