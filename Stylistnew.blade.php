@extends('stylist.Stylist')

@section('main')
  <div class="container">
    <h1 class="display-4">Create New Stylist </h1>



    <form action="{{route('stylist.store')}}" method="post">
      @csrf
      @include('stylist.StylistFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
