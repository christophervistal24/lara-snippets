<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
               {{--  <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a> --}}
                @endauth
            </div>
            @endif
            <div class="content">
                @foreach ($users as $user)
                <p>
                    <a style="text-decoration: none;"
                    href=" {{ route('user.show' , ['user' => $user->id]) }}
                    ">User Details</a>
                </p>
                @endforeach
                <p>
                    <a style="text-decoration: none;"
                    href=" {{ route('users.comments.show' , ['user' => $user->id]) }}
                    ">Name Prefixes</a>
                </p>
                 <p>
                    <a style="text-decoration: none;"
                    href="{{ url('/tasks') }}">Posts</a>
                </p>
                Shared Variable
                <ul>
                @foreach ($posts as $post)
                    <li>{{ $post }}</li>
                @endforeach
                @foreach ($posts2 as $post)
               {{--  @complete($post->)
                   {{ 'Complete' }}
                    @else
                    {{ 'Complete' }}
                @endcomplete --}}
                    <li>{{ $post }}</li>
                @endforeach


                </ul>
            </div>
        </div>
    </body>
</html>