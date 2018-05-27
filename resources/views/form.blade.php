<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <p>{{ $e }}</p>
            @endforeach
        @endif
             <form action="/form" method="POST">
            {{ csrf_field() }}
            <label for="">Username</label>
            <input type="text" name="username">
            <br>
            <label for="">Password</label>
            <input type="password" name="password">
               <br>
            <label for="">Retype Password</label>
            <input type="password" name="password_confirmation">
            <input type="submit" value="Submit Baby">
        </form>
    </body>
</html>