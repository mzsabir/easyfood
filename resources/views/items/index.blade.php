@extends("layouts.app")

@section('title')
    Menu
@endsection

@section("main")
    <h1>Menu</h1>
    <a href="/item/create">Create</a>
    @foreach($items as $item)
        <p>{{$item->title}} - {{$item->price}} <a href="/item/{{$item->id}}">Delete</a></p>
    @endforeach
@endsection