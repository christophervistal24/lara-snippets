<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="/tasks/{{$post->id}}">
            {{ csrf_field() }}
            <fieldset class="form-group">
                <label for="username">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" id="username" placeholder="Example input">
            </fieldset>
            <fieldset class="form-group">
                <label for="username">Body</label>
                <input type="text" name="body" class="form-control" value="{{ $post->body }}" id="username" placeholder="Example input">
            </fieldset>

            <input type="hidden" name="_method" value="DELETE">
            <div class="form-group"><input type="submit" value="Submit" class="btn btn-primary"></div>
        </form>
    </body>
</html>