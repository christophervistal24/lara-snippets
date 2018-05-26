<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/posts">
    {{ csrf_field() }}
    <fieldset class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Example input">
    </fieldset>

    <div class="form-group"><input type="submit" value="Submit" class="btn btn-primary"></div>
</form>
</body>
</html>