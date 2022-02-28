@extends('admin.master')
@section('content')
<form action="{{route('admin.product.store')}}"  method='post'>
       @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product ID</label>
    <input name='p_id' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Name</label>
    <input name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cost</label>
    <input name='cost' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Details</label>
    <input name='details' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection