<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Post ID : {{ $post->id }}</p>
    <p>Post Title : {{ $post->title }}</p>
    <p>Post Body : {{ $post->body }}</p>
    <form action="/tasks/{{$post->id}}" method="POST">
        {{ csrf_field() }}
         <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">
    </form>
</body>
</html>