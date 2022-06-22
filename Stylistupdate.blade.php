@extends('stylist.Stylist')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Stylist</h1>

    @include('partials.ErrorsStylist')

    <form action="{{route('stylist.update', ['SID' => old('SID')?? $stylist->SID])}}" method="post">
      @csrf
      @include('stylist.StylistFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
