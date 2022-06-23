@extends('customer.index')

@section('main')
  <div class="container"><br>
    <h3 style="text-align: center">Customer Manager</h3>
    @include('partials.allmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">CusID</th>
        <th scope="col">Customer name</th>
        <th scope="col">dob</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($customer as $a)
        <tr>
          <td>{{$a->ID}}</td>
          <td>{{$a->name}}</td>
          <td>{{$a->dob}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('Admin.show_customer',['ID' => $a->ID])}}">Details</a></td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('Admin.edit_customer',['ID' => $a->ID])}}">Edit</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
@endsection
