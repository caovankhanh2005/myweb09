<!DOCTYPE html>
<html>
<head>
    <title>Sửa công việc</title>
</head>
<body>
    <h1>Sửa công việc</h1>

    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}">
        <label>
            <input type="checkbox" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}>
            Hoàn thành
        </label>
        <button type="submit">Lưu</button>
    </form>

    <a href="{{ route('todos.index') }}">⬅️ Quay lại</a>
</body>
</html>
