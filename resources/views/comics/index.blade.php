<!-- resources/views/comics/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Truyện Tranh</title>
</head>
<body>
    <h1>Danh sách truyện tranh</h1>

    <a href="{{ route('comics.create') }}">Thêm mới truyện tranh</a>

    <ul>
        @forelse ($comics as $comic)
            <li>
                <h2><a href="{{ route('comics.show', $comic->ComicID) }}">{{ $comic->ComicName }}</a></h2>
                <p>{{ $comic->Description }}</p>
                <!-- Display the other fields... -->

                <a href="{{ route('comics.edit', $comic->ComicID) }}">Chỉnh sửa</a>

                <form action="{{ route('comics.destroy', $comic->ComicID) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Xóa">
                </form>
            </li>
        @empty
            <li>Không có truyện tranh nào.</li>
        @endforelse
    </ul>
</body>
</html>
