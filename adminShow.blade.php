@extends('masters.adminMaster')
@section('main')
    <div class="container">
        <h1 class="display-4">Admin Details</h1>
        @include('admin.adminDetails')
        <a type="button" href="{{route('admin.adminIndex')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
    </div>
@endsection
