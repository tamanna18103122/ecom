@extends('admin.master')
@section('content')
<form action="{{route('admin.order.store')}}"  method='POST'enctype="multipart/form-data" >
       @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Order ID</label>
    <input name='p_id' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Order Name</label>
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
  <div class="input-group">
  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary">Submit</button>

  
</div>
</form>

@endsection