@extends('admin.master')
@section('content')
<form action="{{route('admin.customer.store')}}"  method='post'>
       @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer ID</label>
    <input name='c_id' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Customer Name</label>
    <input name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Details</label>
    <input name='details' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection