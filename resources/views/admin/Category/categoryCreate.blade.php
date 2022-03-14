@extends('admin.master')
@section('content')

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" class="form-control" placeholder="Enter category name" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Category details</label>
    <input type="text" class="form-control" placeholder="Enter category details" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection