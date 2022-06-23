@extends('masters.productMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Product</h1>
        @include('products.sessionmessage')

        <form action="{{route('product.update', ['CID' => old('CID')?? $product->CID])}}" method="post">
            @csrf
            @include('products.productFields')

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
