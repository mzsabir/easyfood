@extends("layouts.front_layout")


@section("page_content")

<section class="py-4 overflow-hidden">

<div class="container">
  <div class="row h-100">
    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
      <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Create New Item</h5>
    </div>
    <div class="col-12">
     <form action="/item/add" method="POST">
        @csrf
        Item Name:
        <input type="text" name="title"><br>
        Item Price:
        <input type="text" name="price"><br>
        <input type="submit">
    </form>
    </div>
  </div>
</div><!-- end of .container-->

</section>

   
    

@endsection
