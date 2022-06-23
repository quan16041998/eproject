<?php

namespace App\Http\Controllers;

use App\Repository\ProductsRepos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductsControllerWithRepos extends Controller
{
    public function index(){
        $product = ProductsRepos::getAllProducts();

        return view('products.productIndex',
            [
                'product' => $product
            ]);
    }

    public function create(){
        $product = ProductsRepos::getAllProducts();

        return view(
            'products.productIndex',
            [
                "product" => (object)[
                    'CID' => '',
                    'product_code' => '',
                    'fabric' => '',
                    'size' => '',
                    'urlimg' => '',
                    'CollectionID' => '',
                    'SID' => ''
                ],
            ]);
    }

    public function store(Request $request){
        $this->formValidate($request)->validate();

        $product = (object)[
            'CID' => $request->input('CID'),
            'product_code' => $request->input('product_name'),
            'fabric' => $request->input('fabric'),
            'size' => $request->input('size'),
            'urlimg' => $request->input('urlimg'),
            'CollectionID' => $request->input('CollectionID'),
            'SID' => $request->input('SID'),
        ];

        $newCID = ProductsRepos::insert($product);

        return redirect()
            ->action('ProductsControllerWithRepos@index')
            ->with('msg', 'New product with id: '.$newCID.'has been inserted');
    }

    public function update(Request $request, $CID){
        if($CID != $request->input('CID')) {
            return redirect()->action('ProductsControllerWithRepos@index');
        }

        $this->formValidate($request)->validate();

        $product = (object)[
            'CID' => $request->input('CID'),
            'product_code' => $request->input('product_code'),
            'fabric' => $request->input('fabric'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'urlimg' => $request->input('urlimg'),
            'CollectionID' => $request->input('CollectionID'),
            'SID' => $request->input('SID')
        ];

        ProductsRepos::update($product);

        return redirect()->action('ProductsControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($CID){
        $product = ProductsRepos::getProductById($CID);

        return view('products.productDelete',
            [
                'product' => $product[0],
            ]
        );
    }

    public function destroy(Request $request, $CID){
        if ($request->input('CID') != $CID){
            return redirect()->action('ProductsControllerWithRepos@index');
        }

        ProductsRepos::delete($CID);

        return redirect()->action('ProductsControllerWithRepos@index')
            ->with('msg', 'Delete successfully');
    }

    private function formValidate(Request $request){
        return Validator::make(
            $request->all(),
            [
                'product_code'=> ['required'],
                'fabric' => ['required'],
                'price' => ['required'],
                'size' => ['required'],
                'urlimg' => ['required'],
                'CollectionID' => ['required'],
                'SID' => ['required']
            ],
            [
                'product_code.required' => 'Product code can not be empty',
                'fabric.required' => 'Fabric can not be empty',
                'price.required' => 'Price can not be empty',
                'size.required' => 'Size can not be empty',
                'urlimg.required' => 'Url for image can not be empty',
                'CollectionID.required' => 'Conllection ID can not be empty',
                'SID.required' => 'SID can not be empty',
            ]
        );
    }
}
