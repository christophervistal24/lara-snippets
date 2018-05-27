<ul>
@foreach ($students as $student)
    <li>{{ $student }}</li>
@endforeach


<h3>Custom View Composer</h3>
<hr>
<h3>This is from Database</h3>
@foreach ($posts as $post)
    <li>Title : {{ ucfirst($post->title) }}</li>
    <li>Body : {{ ucfirst($post->body) }}</li>
    <hr>
@endforeach
</ul>