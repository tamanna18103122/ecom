@extends('admin.master')
@section('content')



<a href="{{route('admin.product.add')}}" class="btn btn-primary">add product</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Products ID</th>
      <th scope="col">Products Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
</table>

@endsection