@extends('admin.master')
@section('content')



<a href="{{route('admin.customer.add')}}" class="btn btn-primary">add customer</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customers ID</th>
      <th scope="col">Customers Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
</table>

@endsection