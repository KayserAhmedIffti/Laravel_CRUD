<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All posts</title>
</head>
<body>
    <h2><a href="{{route('post.index')}}">ALL POST</a></h2>
    <h1>Update Post</h1>
    <form class="container" action="{{route('post.update',$post->id)}}" method="POST">{{--here is the post base route and update is the controller method and we are passing id by $post id  --}}
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
         
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
          </div>

        <input type="text" name="Title" placeholder="title" value="{{$post->Title}}"> <br>
        
        <textarea name="details" id="" cols="30" rows="10" placeholder="details" >{{$post->details}}</textarea><br>

        <button type="Submit" class="btn btn-primary" >Update</button>

    </form>

</body>
</html>