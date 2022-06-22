@extends('stylist.Stylist')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('stylist.StylistDetails')

    <form action="{{route('stylist.destroy', ['SID' =>$stylist->SID])}}" method="post">
      @csrf
      <input type="hidden" name="SID" value="{{$stylist->SID}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('stylist.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
