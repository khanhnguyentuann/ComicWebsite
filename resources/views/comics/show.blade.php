<!-- resources/views/comics/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem truyện tranh</title>
</head>
<body>
    <h1>Truyện tranh: {{ $comic->ComicName }}</h1>

    <div>
        <strong>Tên truyện:</strong> {{ $comic->ComicName }}
    </div>

    <div>
        <strong>Mô tả:</strong> {{ $comic->Description }}
    </div>

    <div>
        <strong>ID Tác giả:</strong> {{ $comic->AuthorID }}
    </div>

    <div>
        <strong>Thể loại:</strong> {{ $comic->Genre }}
    </div>

    <div>
        <strong>Trạng thái:</strong> {{ $comic->Status }}
    </div>

    <div>
        <strong>Ngày đăng:</strong> {{ $comic->UploadDate }}
    </div>

    <div>
        <strong>Ảnh bìa:</strong> <br>
        <img src="{{ $comic->ThumbnailImage }}" alt="{{ $comic->ComicName }}">
    </div>

    <a href="{{ route('comics.edit', $comic->ComicID) }}">Chỉnh sửa</a>

    <form action="{{ route('comics.destroy', $comic->ComicID) }}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit">Xóa truyện tranh</button>
    </form>

    <a href="{{ route('home') }}">Quay lại trang chủ</a>
</body>
</html>
