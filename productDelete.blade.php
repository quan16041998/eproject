@extends('masters.productMaster')
@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('products.productDetails')

        <form action="{{route('product.destroy', ['CID' => $product->CID])}}" method="post">
            @csrf
            <input type="hidden" name="CID" value="{{$product->CID}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('product.index')}}" class="btn btn-info">Cacel</a>
        </form>
    </div>
@endsection
