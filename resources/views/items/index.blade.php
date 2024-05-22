<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu</h1>
    <a href="/item/create">Create</a>
    @foreach($items as $item)
        <p>{{$item->title}} - {{$item->price}} <a href="/item/{{$item->id}}">Delete</a></p>
    @endforeach
</body>
</html>