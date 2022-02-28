@extends('admin.master')
@section('content')


<a href="{{route('admin.order.add')}}" class="btn btn-primary">add order</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Orders ID</th>
      <th scope="col">Orders Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
</table>


@endsection