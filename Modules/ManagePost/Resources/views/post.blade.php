<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <!-- Link to your CSS file if you have one -->
    <link rel="stylesheet" href="{{ asset('client/css/post.css') }}">
</head>

<body>

    <header>
        <h1>Post Details</h1>
    </header>

    <main>
        <a href="{{ url('/post/' . $detail->slug) }}"></a>


        <article>
            <div>

                <h1>{{ $detail->title }} </h1>
            </div>
            <div>
                <p>{{ $detail->content }}</p>
            </div>
        </article>




    </main>

    <footer>

    </footer>

</body>

</html>
