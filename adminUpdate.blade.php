@extends('masters.productMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Admin</h1>
        @include('products.sessionmessage')

        <form action="{{route('admin.update', ['username' => old('username')?? $admin->username])}}" method="post">
            @csrf
            @include('admin.adminFields')

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
