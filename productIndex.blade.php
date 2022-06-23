@extends('masters.productMaster')

@section('main')
    <div class="container">
        <h3 style="text-align: center">Products Manager</h3>
        @include('products.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">CID</th>
                <th scope="col">Product Code</th>
                <th scope="col">Fabric</th>
                <th scope="col">Price</th>
                <th scope="col">URL for image</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                <tr>
                    <td>{{$p->CID}}</td>
                    <td>{{$p->product_code}}</td>
                    <td>{{$p->fabric}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->urlimg}}</td>
                    <td><a type="button" class="btn btn-info btn-sm"
                           href="{{route('product.show', ['CID' => $p->CID])}}">Show</a> </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                            href="{{route('product.edit', ['CID' => $p->CID])}}">Edit</a></td>
                    <td><a type="button" class="btn btn-danger btn-sm"
                            href="{{route('product.confirm', ['CID' => $p->CID])}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
