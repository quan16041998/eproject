@extends('stylist.Stylist')

@section('main')


  <div class="container">
    <h1 class="display-4">Stylist Details</h1>
    @include('stylist.StylistDetails')
    <a type="button" href="{{route('stylist.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
