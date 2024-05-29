
@extends("layouts.front_layout")


@section("page_content")

<section class="py-4 overflow-hidden">

<div class="container">
  <div class="row h-100">
    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
      <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Food Items</h5>
    </div>
    <div class="col-12">
        <a class="btn btn-primary" href="/item/create">Create</a>
        @foreach($items as $item)
            <p>{{$item->title}} - {{$item->price}} <a href="/item/{{$item->id}}">Delete</a></p>
        @endforeach
    </div>
  </div>
</div><!-- end of .container-->

</section>

