<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;


class categories extends Controller
{
    function list()
    {
    	$data['categories'] = CategoryModel::all();	
    	return view("ecomm/categories",$data);
    }
}
