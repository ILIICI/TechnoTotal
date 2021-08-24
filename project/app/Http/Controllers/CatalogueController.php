<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue;
class CatalogueController extends Controller
{
    private $title = "CATALOG : Techno Total";

    public function index(){    
        $data = new Catalogue();
        //return $data->getCategoriesList();
       return view('catalogue')->with('products',$data->getAllData())
                                ->with('list',$data->getProductNameList())
                                ->with('categories',$data->getCategoriesList())
                                ->with('title',$this->title);        
    }

    public function search(Request $request){
        $catalogModel = new Catalogue();
        return view('catalogue')->with('products',$catalogModel->getFilteredData($request))
                                ->with('list',$catalogModel->getProductNameList())
                                ->with('categories',$catalogModel->getCategoriesList())
                                ->with('title',$this->title);
    }

}
