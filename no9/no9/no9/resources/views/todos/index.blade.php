<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Danh sách công việc</h1>
    <a href="{{ route('todos.create') }}">➕ Thêm việc mới</a>

    <ul>
        @foreach($todos as $todo)
            <li>
                {{ $todo->title }}
                @if($todo->completed)
                    ✅
                @endif
                <a href="{{ route('todos.edit', $todo) }}">✏️</a>
                <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
