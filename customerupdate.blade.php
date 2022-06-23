@extends('customer.index')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Customer</h1>

    @include('partials.ErrorsAll')

    <form action="{{route('Customer.update_customer', ['ID' => old('ID')?? $customer->ID])}}" method="post">
      @csrf
      @include('customer.customerFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
