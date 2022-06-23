@extends('masters.productMaster')
@section('main')
    <div class="container">
        <h1 class="display-4">Product Details</h1>
        @include('products.productDetails')
        <a type="button" href="{{route('product.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </div>
@endsection
