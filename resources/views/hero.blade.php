<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($query as $data)
    <h3>{{$data->realName}}</h3>
    <h3>{{$data->heroName}}</h3>
    <h3>{{$data->power}}</h3>
    <h3>{{$data->kindofpower}}</h3>
    <h3>{{$data->gender}}</h3>
    <h3>{{$data->height}}</h3>
    <h3>{{$data->weight}}</h3>
    <h3>{{$data->borndate}}</h3>
    @endforeach
</body>
</html>