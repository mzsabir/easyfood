@extends("layouts.app")

@section('title')
    Create Food Item
@endsection

@section("main")

    <h1>Create New Item</h1>
    <form action="/item/add" method="POST">
        @csrf
        Item Name:
        <input type="text" name="title"><br>
        Item Price:
        <input type="text" name="price"><br>
        <input type="submit">
    </form>

@endsection
