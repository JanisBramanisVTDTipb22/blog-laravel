<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
    <h1>Posts</h1>
    <ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    </ul>
</body>
</html>