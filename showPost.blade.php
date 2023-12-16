<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
</head>
<body>
    <h1>{{$post->title}}</h1>
    <h5>Created at: {{$post->created_at}}</h5>
    <h5>Updated at: {{$post->updated_at}}</h5>
    <p>{{$post->description}}</p>
    <p>The auther is: {{$post->auther}}</p>
    <p>{{($post->published)?"Published":"Not Published"}}</p>
</body>
</html>