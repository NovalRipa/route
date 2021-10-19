<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data post</center>
    @foreach($query as $data)
    <h3>{{$data->title}}</h3>
    <h3>{{$data->content}}</h3>
    @endforeach
</body>
</html>