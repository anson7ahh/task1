<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="{{ asset('client/css/manage.css') }}">


<body>
    <!-- Trong blade view -->

    <form action="{{ route('post.store') }}" method="post">
        @csrf <!-- Sử dụng csrf để bảo vệ form từ tấn công CSRF -->
        <h2>Tạo bài đăng</h2>
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            <!-- Hiển thị giá trị cũ nếu có lỗi -->
        </div>

        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{ old('content') }}</textarea>
            <!-- Hiển thị giá trị cũ nếu có lỗi -->
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            </select>
            <!-- Hiển thị giá trị cũ nếu có lỗi -->
        </div>

        <button type="submit">Submit</button>
    </form>

    <div class ='getuser'>
        <form action="{{ route('post.show') }}" method="get">
            <h2>xem bài đăng</h2>
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col" style="width: 80px">STT</th>
                        <th scope="col">title</th>
                        <th scope="col">slug</th>
                        <th scope="col">content</th>
                        <th scope="col">status</th>

                    </tr>
                </thead>
                <tbody>
                    @if (!@empty($showpost))
                        @foreach ($showpost as $index => $post)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->status }}</td>
                                <div class='td'>

                                </div>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">ko co post</td>
                        </tr>
                    @endif
                </tbody>

            </table>
        </form>
    </div>
</body>

</html>
