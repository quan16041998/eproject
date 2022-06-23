@extends('masters.productMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Create new product</h1>

        <form action="{{route('product.store')}}" method="post">
            @csrf
            @include('products.productFields')
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
