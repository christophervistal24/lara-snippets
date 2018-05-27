<ul>
    @foreach ($students as $student)
        <li>{{ $student }}</li>
    @endforeach
</ul>
<hr>
@inject('posts','App\Post')
    @foreach ($posts->post_list() as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
    @endforeach
