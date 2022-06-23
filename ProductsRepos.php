<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ProductsRepos
{
    public static function getAllProducts(){
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'order by CID';

        return DB::select($sql);
    }

    public static function getProductById($CID){
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where p.CID = ?';

        return DB::select($sql, [$CID]);
    }

    public static function update($product){
        $sql = 'update product ';
        $sql .= 'set product_code = ?, fabric = ?, price = ?, size = ?, urlimg = ?, CollectionID = ?, SID = ? ';
        $sql .= 'where CID = ? ';

        DB::update($sql, [$product->product_code, $product->fabric, $product->price, $product->size,
            $product->urlimg, $product->CollectionID, $product->SID]);
    }

    public static function delete($CID){
        $sql = 'delete from product ';
        $sql .= 'where CID = ? ';

        DB::delete($sql, [$CID]);
    }

    public static function insert($product){
        $sql = 'insert into product ';
        $sql .= '(product_code, fabric, price, size, urlimg, CollectionID, SID) ';
        $sql .= 'value(?, ?, ?, ?, ?, ?, ?)';

        $result = DB::insert($sql, [$product->product_code, $product->fabric, $product->price, $product->size,
            $product->urlimg, $product->CollectionID, $product->SID]);

        if ($result){
            return DB::getPdo()->lastInsertCID();
        } else {
            return -1;
        }
    }
}
