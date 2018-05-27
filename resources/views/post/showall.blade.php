<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover table-inverse">
        <thead>
            <tr>
                <th>Post ID : </th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Actions</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->created_at->toFormattedDateString() }}</td>
                <td><a href="{{'/tasks/' . $post->id . '/edit/'}}">EDIT</a> | <a href="{{'/tasks/' . $post->id}}">VIEW</a></td>
                <td>
                    {{-- Custom Directive --}}
                    @complete($post)
                        {{'Complete'}}
                     @else
                        {{'Not complete'}}
                    @endcomplete
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>
    <hr>
    <p>Using App directive shortcut to get an instance of a class</p>
    <table class="table table-hover table-inverse">
        <thead>
            <tr>
                <th>Post ID : </th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Actions</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach (@app('App\Post')->post_list() as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->created_at->toFormattedDateString() }}</td>
                <td><a href="{{'/tasks/' . $post->id . '/edit/'}}">EDIT</a> | <a href="{{'/tasks/' . $post->id}}">VIEW</a></td>
                <td>
                    {{-- Custom Directive --}}
                    @complete($post)
                        {{'Complete'}}
                     @else
                        {{'Not complete'}}
                    @endcomplete
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>
</body>
</html>