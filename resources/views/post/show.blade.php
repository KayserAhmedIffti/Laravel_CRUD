<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Single data</title>
</head>
<body>
    
    <h1>Show Details</h1>
    {{-- <h2> {{ $data['post']['details'] }}</h2> --}}
    <h2>{{$post->details}}</h2>    {{-- <h2> here is the data showing from PostController show method }}</h2> --}}
    <h2>{{$post->Title}}</h2>  

</body>
</html>