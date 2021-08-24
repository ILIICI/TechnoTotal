<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    private $companyTitle = " : Techno-Total";

    public function getAllData($value){
        $title = 'SERVICE '.strtoupper($value). $this->companyTitle;
        $alldata = Service::all()->where('Category',$value);
        return view('service')->with('data',$alldata)->with('title',$title);
    }
}
