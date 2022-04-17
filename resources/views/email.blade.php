<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>
<body>
    <form action="{{route('email.send')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <input type="text" name="nama">
        <input type="file" name="image">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>