@extends('customer.index')

@section('main')
  <div class="container">
    <h1 class="display-4">Customer Details</h1>
    @include('customer.customerDetails')
    <a type="button" href="{{route('Admin.index_customer')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
