<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Catalogue extends Model
{
    protected $table = 'catalogues';

    public function getAllData(){
        $products = DB::table('catalogues')
                    ->join('categories','catalogues.id_categories','=','categories.id')
                    ->select('categories.ProductCategory','catalogues.id','catalogues.ProductName','catalogues.ProductPrice','catalogues.ProductDesc','catalogues.ProductImg')
                    ->simplepaginate(6);
        return $products;
    }
    public function getFilteredData($request){
        $productCategorySearch = $request->input('ProductCategory');
        $productNameSearch = $request->input('ProductName');
        $productPriceSearch= $request->input('ProductPrice');
        
        $products = DB::table('catalogues')
                    ->join('categories','catalogues.id_categories','=','categories.id')
                    ->select('categories.ProductCategory','catalogues.id','catalogues.ProductName','catalogues.ProductPrice','catalogues.ProductDesc','catalogues.ProductImg')
                    ->where('ProductName',$productNameSearch)
                    ->orWhere('ProductCategory',$productCategorySearch)
                    ->orWhere('ProductPrice',$productPriceSearch)
                    ->simplePaginate(6)
                    ->appends(['ProductName'=>$productNameSearch,
                             'ProductCategory'=>$productCategorySearch,
                             'ProductPrice'=>$productPriceSearch]);
        return $products;
    }

    public function getProductNameList(){
        $products = DB::table('catalogues')
                        ->select('catalogues.ProductName')
                        ->distinct()
                        ->get();
        return $products;
    }
    public function getCategoriesList(){
        $products = DB::table('categories')
                        ->select('categories.ProductCategory')
                        ->get();
        return $products;
    }
}
