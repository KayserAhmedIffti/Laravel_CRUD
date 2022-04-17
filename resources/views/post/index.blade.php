<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All posts</title>
</head>
<body>
    <table border="1" width="90%">
        <thead>
        <tr>
            <th>Email address </th>
            <th>Title</th>
            <th>Details</th>

        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->Email}}</td>
                <td>{{$post->Title}}</td>
                <td><a href="{{route('post.show',$post->id)}}">show </a>||
                    <a href="{{route('post.edit',$post->id)}}">Edit</a>
                <form action="{{route('post.destroy',$post->id)}}"method="post">
                    @csrf
                    @method('delete') 
                    <button>Delete</button>
                    </form>
                </td>
            
                    </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>