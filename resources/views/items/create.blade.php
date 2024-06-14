@extends("layouts.front_layout")


@section("page_content")

<section class="py-4 overflow-hidden">

  <div class="container">
    <div class="row h-100">
      <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Create New Item</h5>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li style="color:brown">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="col-12">
        <form action="/item/add" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row" style="margin: 10px;">
            <label class="col-md-4"> Item Name:</label>
            <input class="col-md-8" type="text" name="title" class="form-control" value="{{old('title')}}">
          </div>

          <div class="row" style="margin: 10px;">
            <label class="col-md-4"> Item Price::</label>
            <input class="col-md-8" type="text" name="price" class="form-control" value="{{old('price')}}">
          </div>

          <div class="row" style="margin: 10px;">
            <label class="col-md-4"> Item Picture::</label>
            <input class="col-md-8" type="file" name="food_picture" class="form-control">
          </div>

          <input class="btn btn-primary" type="submit" value="Create Item">
        </form>
      </div>
    </div>
  </div><!-- end of .container-->

</section>




@endsection